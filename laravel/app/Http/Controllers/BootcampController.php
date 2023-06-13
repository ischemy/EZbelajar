<?php

namespace App\Http\Controllers;

use App\Http\Requests\Bootcamp\StoreBootcampRequest;
use App\Http\Requests\Bootcamp\UpdateBootcampRequest;
use App\Models\BankSoal;
use App\Models\Bootcamp\AdvantageBootcamp;
use App\Models\Bootcamp\BenefitBootcamp;
use App\Models\Bootcamp\Bootcamp;
use App\Models\Bootcamp\DetailBootcamp;
use App\Models\Bootcamp\MainMateriBootcamp;
use App\Models\Bootcamp\DetailMateriBootcamp;
use App\Models\User\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\stringContains;

class BootcampController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
        $this->middleware('permission:bootcamp-list|bootcamp_create|bootcamp-edit|bootcamp-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:bootcamp-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:bootcamp-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:bootcamp-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        if ($request->search) {
            $bootcamps = Bootcamp::where('title', 'like', '%' . $request->search . '%')
                ->orWhere('description', 'like', '%' . $request->search . '%')
                ->orWhereHas('user', function ($query) use ($request) {
                    $query->where('name', 'like', '%' . $request->search . '%');
                })
                ->latest()->paginate(4);
        } else {
            $bootcamps = Bootcamp::latest()->paginate(5);
        }

        return view('pages.Dashboard.bootcamp.index', compact('bootcamps'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('pages.Dashboard.bootcamp.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBootcampRequest $request)
    {
//        $data_bootcamp = $request->all();
//        $data_bootcamp['user_id'] = auth()->user()->id;
//        $data_detail_bootcamp = $request->detail_bootcamp;
//
//        // store file to storage
//        if (isset($data_bootcamp['thumbnail_bootcamp'])) {
//            $data_bootcamp['imthumbnail_bootcampage'] = $request->file('thumbnail_bootcamp')->store('assets/bootcamp/bootcamp','public');
//        }
//
//        if (isset($data_bootcamp['thumbnail_bootcamp_study_case'])) {
//            $data_bootcamp['thumbnail_bootcamp_study_case'] = $request->file('thumbnail_bootcamp_study_case')->store('assets/bootcamp/study-case','public');
//        }
//
//        // proses save to bootcamp
//        $bootcamp = Bootcamp::firstOrCreate($data_bootcamp);

//        $request->validate([
//            'title' => 'required',
//            'description' => 'required',
//            'thumbnail_bootcamp' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//            'thumbnail_bootcamp_study_case' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//            'main_materi_bootcamp' => 'required',
//            'detail_bootcamp' => 'required',
//            'advantage_bootcamp' => 'required',
//            'benefit_bootcamp' => 'required',
//        ]);

        $data = $request->all();
//        $data['user_id'] = Auth::user()->id;
        $mentor_id = $request->input('mentor_id');

        $title = $request->title;
        $description = $request->description;
        $title_study_case = $request->title_study_case;
        $description_study_case = $request->description_study_case;
        $price = $request->price;

        // path thumbnail
        $path_bootcamp = $request->file('thumbnail_bootcamp')->store('assets/bootcamp/bootcamp','public');

        // path_study_case
        $path_study_case = $request->file('thumbnail_bootcamp_study_case')->store('assets/bootcamp/study-case','public');

        $bootcamp = new Bootcamp();
        $bootcamp->title = $title;
        $bootcamp->description = $description;
        $bootcamp->thumbnail_bootcamp = $path_bootcamp;
        $bootcamp->title_study_case = $title_study_case;
        $bootcamp->description_study_case = $description_study_case;
        $bootcamp->thumbnail_bootcamp_study_case = $path_study_case;
        $bootcamp->price = $price;
        $bootcamp->user_id = Auth::user()->id;
        $bootcamp->mentor_id = $mentor_id;
        $bootcamp->save();

        $bootcampDetail = new DetailBootcamp();
        $bootcampDetail->bootcamp_id = $bootcamp->id;
        $bootcampDetail->registration = $request->registration;
        $bootcampDetail->duration = $request->duration;
        $bootcampDetail->media = $request->media;
        $bootcampDetail->schedule = $request->schedule;
        $bootcampDetail->start_bootcamp = $request->start_bootcamp;
        $bootcampDetail->participant = $request->participant;
        $bootcampDetail->save();




        // add to bootcamp
//        $bootcamp = Bootcamp::create($bootcamp);

        // add to detail bootcamp
//        foreach ($data['detail-bootcamp'] as $key => $value) {
//            $detail_bootcamp = new DetailBootcamp;
//            $detail_bootcamp->bootcamp_id = $bootcamp->id;
//            $detail_bootcamp->registration = $value;
//            $detail_bootcamp->duration = $value;
//            $detail_bootcamp->media = $value;
//            $detail_bootcamp->schedule = $value;
//            $detail_bootcamp->participant = $value;
//            $detail_bootcamp->save();
//        }

        // add to Benefit bootcamp
        foreach ($data['benefit-bootcamps'] as $key => $value) {
            $benefit_bootcamp = new BenefitBootcamp;
            $benefit_bootcamp->bootcamp_id = $bootcamp->id;
            $benefit_bootcamp->description = $value;
            $benefit_bootcamp->save();
        }

        // add to advantage bootcamp
        foreach ($data['advantage-bootcamps'] as $key => $value) {
            $advantage_bootcamp = new AdvantageBootcamp;
            $advantage_bootcamp->bootcamp_id = $bootcamp->id;
            $advantage_bootcamp->description = $value;
            $advantage_bootcamp->save();
        }



//        $bootcamp = new Bootcamp;
//        $bootcamp->users_id = Auth::user()->id;
//        $bootcamp->title = $request->title;
//        $bootcamp->description = $request->description;
//        $bootcamp->price = $request->price;
//        $bootcamp->study_case = $request->study_case;
//        $bootcamp->save();

        toast()->success('Data Bootcamp berhasil ditambahkan', 'Berhasil');
        return redirect()->route('admin.bootcamp.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bootcamp = Bootcamp::findOrFail($id);
        // get mentor_id name from table user
        $mentor_id = User::findOrFail($bootcamp->mentor_id);

        return view('pages.Dashboard.bootcamp.show',compact('bootcamp','mentor_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bootcamp $bootcamp)
    {
        $detail_bootcamp = DetailBootcamp::where('bootcamp_id',$bootcamp->id)->first();
        $benefit_bootcamp = BenefitBootcamp::where('bootcamp_id',$bootcamp->id)->get();
        $advantage_bootcamp = AdvantageBootcamp::where('bootcamp_id',$bootcamp->id)->get();
        $main_materi_bootcamp = MainMateriBootcamp::where('bootcamp_id',$bootcamp->id)->get();
//        $detail_materi_bootcamp = DetailMateriBootcamp::where('main_materi_bootcamp_id',$main_materi_bootcamp->id)->get();

        $mentor_id = User::all();
        return view('pages.Dashboard.bootcamp.edit',compact('bootcamp','mentor_id','benefit_bootcamp','advantage_bootcamp','main_materi_bootcamp','detail_bootcamp'));
    }

    public function editMainMateri(MainMateriBootcamp $mainMateriBootcamp)
    {
        return view('pages.Dashboard.bootcamp.edit', compact('mainMateriBootcamp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBootcampRequest $request, Bootcamp $bootcamp)
    {
        $data = $request->all();

        // update to bootcamp
        $bootcamp->update($data);

        // update to detail bootcamp
        $detail_bootcamp = DetailBootcamp::where('bootcamp_id',$bootcamp->id)->first();
        $detail_bootcamp->update($data);

        // update to benefit bootcamp
        $benefit_bootcamp = BenefitBootcamp::where('bootcamp_id',$bootcamp->id)->delete();
        foreach ($data['benefit-bootcamps'] as $key => $value) {
            $benefit_bootcamp = new BenefitBootcamp;
            $benefit_bootcamp->bootcamp_id = $bootcamp->id;
            $benefit_bootcamp->description = $value;
            $benefit_bootcamp->save();
        }

        // update to advantage bootcamp
        $advantage_bootcamp = AdvantageBootcamp::where('bootcamp_id',$bootcamp->id)->delete();
        foreach ($data['advantage-bootcamps'] as $key => $value) {
            $advantage_bootcamp = new AdvantageBootcamp;
            $advantage_bootcamp->bootcamp_id = $bootcamp->id;
            $advantage_bootcamp->description = $value;
            $advantage_bootcamp->save();
        }

        toast()->success('Data Bootcamp berhasil diubah', 'Berhasil');
        return redirect()->route('admin.bootcamp.index');

    }

    public function destroy($id)
    {
        $bootcamp = Bootcamp::findOrFail($id);
        $bootcamp->delete();

        toast()->success('Data Bootcamp berhasil dihapus', 'Berhasil');
        return redirect()->route('admin.bootcamp.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteMateriBootcamp($id)
    {
        $main_materi = MainMateriBootcamp::findOrFail($id);
        $main_materi->delete();
        toast()->success('Berhasil menghapus data', 'Berhasil');
        return redirect()->route('admin.bootcamp.index');
    }

    // create a schedule day a day
    public function detailBootcamp(Bootcamp $bootcamp)
    {
        $main_materi = $bootcamp->main_bootcamp()->paginate(10);
        $mentor_id = User::findOrFail($bootcamp->mentor_id);
        return view('pages.Dashboard.bootcamp.show', compact('bootcamp', 'main_materi','mentor_id'));
    }

    public function createMateriBootcamp(Bootcamp $bootcamp)
    {
        $bootcamp = $bootcamp;
//        return view('pages.dashboard.bootcamp.create_materi_bootcamp', compact('bootcamp'));
        return view('pages.dashboard.bootcamp.create_materi_bootcamp', compact('bootcamp'));
    }

    public function storeMateriBootcamp(Bootcamp $bootcamp,  Request $request)
    {
        $data = $request->all();
        $data['bootcamp_id'] = $bootcamp->id;
        $data['user_id'] = Auth::user()->id;

        $main_materi_bootcamp = new MainMateriBootcamp;
        $main_materi_bootcamp->bootcamp_id = $bootcamp->id;
        $main_materi_bootcamp->description = $request->description;
        $main_materi_bootcamp->save();

        foreach ($data['detail-materi-bootcamp'] as $key => $value) {
            $detail_materi_bootcamp = new DetailMateriBootcamp;
            $detail_materi_bootcamp->main_materi_bootcamp_id = $main_materi_bootcamp->id;
            $detail_materi_bootcamp->description = $value;
            $detail_materi_bootcamp->save();
        }

        toast()->success('Data Materi Bootcamp berhasil ditambahkan', 'Berhasil');
        return redirect()->route('admin.bootcamp.index');

//        // add to main materi bootcamp
//        foreach ($data['main-materi-bootcamp'] as $key => $value) {
//            $main_materi_bootcamp = new MainMateriBootcamp;
//            $main_materi_bootcamp->bootcamp_id = $bootcamp->id;
//            $main_materi_bootcamp->description = $value;
//            $main_materi_bootcamp->save();
//        }
//
//        // add to Detail Materi Bootcamp
//        foreach ($data['detail-materi-bootcamp'] as $key => $value) {
//            $detail_materi_bootcamp = new DetailMateriBootcamp;
//            $detail_materi_bootcamp->main_materi_bootcamp_id = $main_materi_bootcamp->id;
//            $detail_materi_bootcamp->description = $value;
//            $detail_materi_bootcamp->save();
//        }
    }

    public function detailMateriBootcamp($id)
    {
        $main_materi = MainMateriBootcamp::findOrFail($id);
//        $detail_materi = DetailMateriBootcamp::findOrFail($id);

        return view('pages.Dashboard.bootcamp.detail_materi_bootcamp', compact('main_materi'));
    }
}
