@extends('layouts.front')

@section('title', ' Bootcamp')

@section('content')
    <div class="content mx-auto">
        <div class="bg-serv-bg-explore overflow-hidden">
            <div class="pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 mx-auto" data-aos="fade-down">
                <div class="text-center mb-5">
                    <div class="flex items-center justify-center">
                        <div class="flex w-full lg:w-1/2 rounded-lg" style="background: https://api.whatsapp.com/send?phone=6285312727272C4C4C4">
                            <input type="search" class="px-4 py-2 w-full rounded-lg" placeholder=" Search...">
                            <div class="share-button flex">
                                <button class="flex items-center justify-center px-4 rounded-lg">
                                    <svg class="w-6 h-6 text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 24 24">
                                        <path
                                                d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

{{--                <div class="animate-bounce"> <p>BOUNCE</p></div>--}}

                <div class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">
                    @foreach ($posts as $post)
                        @if(Auth::guest())
                        <a href="#" onclick="toggleModal('loginModal')">
                            @else
                                <a href="{{ route('detailBootcamp',$post->title) }}">
                            @endif
                            {{-- Post --}}
                            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                                {{-- Header --}}
                                <div class="flex-shrink-0">
                                    <img class="h-48 w-full object-cover" src="{{ Storage::url($post->thumbnail_bootcamp) }}" alt="blog image">
                                </div>

                                {{-- Contet --}}
                                <div class="flex-1 p-6 flex flex-col justify-between">
                                    <div class="flex-1">
                                        <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">{{ $post->title }}</h3>
                                        <p class="mt-3 text-base leading-6 text-gray-500">
                                            @if (strlen($post->description) > 200)
                                                {{--                                                {!! substr($post->body, 0, 200) !!}...--}}
                                                {{--                                                                                                {{ substr($post->body, 0, 200) }}...--}}
                                                {{--                                                <span class="mx-1">{!! ceil(strlen($post->body) / 863) ?? ''!!}</span>--}}
                                            @else
                                                {!! $post->description ?? '' !!}
                                                {{--                                                {{ $post->body }}--}}
                                            @endif
                                        </p>
                                    </div>

                                    <div class="mt-6 flex items-center justify-center">
{{--                                        <div class="flex-shrink-0">--}}

{{--                                            @if($post->user->detail_user->first()->photo != null)--}}
{{--                                                <img class="inline ml-3 h-10 w-10 rounded-full" src="{{ url(Storage::url($post->user->detail_user->first()->photo ?? '')) }}" alt="" loading="lazy" />--}}
{{--                                            @else--}}
{{--                                                <svg class="inline ml-3 h-10 w-10 rounded-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">--}}
{{--                                                    <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />--}}
{{--                                                </svg>--}}
{{--                                            @endif--}}

{{--                                        </div>--}}

                                        <div class="ml-3 flex inline-block">
{{--                                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-purple-400 opacity-75"></span>--}}
                                            <p class="text-4xl font-semibold disc-price blink mr-4" style="text-decoration-line: line-through;">Rp. 5.000.000</p>
                                            <p class="text-4xl font-semibold underline decoration-indigo-500">{{ 'Rp '.number_format($post->price) ?? ''}}</p>

{{--                                            <p class="text-sm leading-5 font-medium text-gray-900">{{ $post->user()->first()->name ?? ''}}</p>--}}
{{--                                            <div class="flex text-sm leading-5 text-gray-500">--}}
{{--                                                <time datetime="{{ $post->created_at ?? ''}}">--}}
{{--                                                    {{ $post->created_at->diffForHumans() ?? ''}}--}}
{{--                                                </time>--}}
{{--                                                --}}{{--                                                <span class="mx-1">{!! $post->body ?? ''!!}</span>--}}
{{--                                                --}}{{--                                                <span class="mx-1">{!! ceil(strlen($post->body) / 863) ?? ''!!}</span>--}}
{{--                                                --}}{{--                                                <span>{{!! ceil(strlen($post->body) / 863) ?? '' !!}} min read</span>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>

            <!-- <div class="card">
    <img src="{{ asset('/assets/images/article/article-3.png') }}" alt="Testing" class="cardpic">
</div>
<div class="pilihanbootcamp">

    <div class="text-start">
        <h2 class="text-black">Fullstack Javascript Immersive</h2>
        <p class="text-black">Siswa akan mengikuti pembelajaran secara intensif.</p>
    </div>
</div> -->


{{--                <div class="container mx-auto">--}}
{{--                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">--}}
{{--                        <div class="flex-col justify-center px-4 py-2 card" data-aos="fade-up"--}}
{{--                             data-aos-anchor-placement="top-bottom">--}}
{{--                            <a href=#>--}}
{{--                                <img src="{{ asset('/assets/images/FotoDepan.jpg') }}" style="height: 300px" alt="Testing foto" class="mx-auto">--}}
{{--                                <div class="text-center py-8">--}}
{{--                                    <h1 class="text-3xl font-semibold">UI & UX Design</h1>--}}
{{--                                    <p class="text-base font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit.--}}
{{--                                        Eget donec vel vitae rhoncus--}}
{{--                                        ullamcorper id enim hendrerit. Praesent ultrices porttitor velit consequat adipiscing--}}
{{--                                        morbi habitasse diam. Lorem vulputate a commodo vel sapien sed augue. Hendrerit turpis--}}
{{--                                        diam cursus amet, tortor a. Pellentesque tempor, non accumsan neque, morbi ac massa--}}
{{--                                        cursus interdum. Duis condimentum sed interdum commodo mauris mus.</p>--}}
{{--                                    <a href="https://api.whatsapp.com/send?phone=6285312727272">--}}
{{--                                        <button class="bg-serv-bg py-4 px-12">$9.99</button>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}


{{--                        <div class="flex-col justify-center px-4 py-2 card" data-aos="fade-up"--}}
{{--                             data-aos-anchor-placement="top-bottom">--}}
{{--                            <a href="#">--}}
{{--                                <img src="{{ asset('/assets/images/FotoDepan.jpg') }}" style="height: 300px" alt="Testing foto" class="mx-auto">--}}
{{--                                <div class="text-center py-8">--}}
{{--                                    <h1 class="text-3xl font-semibold">Dasar JavaScript</h1>--}}
{{--                                    <p class="text-base font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit.--}}
{{--                                        Eget donec vel vitae rhoncus--}}
{{--                                        ullamcorper id enim hendrerit. Praesent ultrices porttitor velit consequat adipiscing--}}
{{--                                        morbi habitasse diam. Lorem vulputate a commodo vel sapien sed augue. Hendrerit turpis--}}
{{--                                        diam cursus amet, tortor a. Pellentesque tempor, non accumsan neque, morbi ac massa--}}
{{--                                        cursus interdum. Duis condimentum sed interdum commodo mauris mus.</p>--}}
{{--                                    <a href="https://api.whatsapp.com/send?phone=6285312727272">--}}
{{--                                        <button class="bg-serv-bg py-4 px-12">$9.99</button>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </a>--}}

{{--                        </div>--}}
{{--                        <div class="flex-col justify-center px-4 py-2 card" data-aos="fade-up"--}}
{{--                             data-aos-anchor-placement="top-bottom">--}}
{{--                            <a href="#">--}}
{{--                                <img src="{{ asset('/assets/images/FotoDepan.jpg') }}" style="height: 300px" alt="Testing foto" class="mx-auto">--}}
{{--                                <div class="text-center py-8">--}}
{{--                                    <h1 class="text-3xl font-semibold">Fulk Stack Web Developer Toko Online</h1>--}}
{{--                                    <p class="text-base font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit.--}}
{{--                                        Eget donec vel vitae rhoncus--}}
{{--                                        ullamcorper id enim hendrerit. Praesent ultrices porttitor velit consequat adipiscing--}}
{{--                                        morbi habitasse diam. Lorem vulputate a commodo vel sapien sed augue. Hendrerit turpis--}}
{{--                                        diam cursus amet, tortor a. Pellentesque tempor, non accumsan neque, morbi ac massa--}}
{{--                                        cursus interdum. Duis condimentum sed interdum commodo mauris mus.</p>--}}
{{--                                    <a href="https://api.whatsapp.com/send?phone=6285312727272">--}}
{{--                                        <button class="bg-serv-bg py-4 px-12">$9.99</button>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </a>--}}

{{--                        </div>--}}
{{--                        <div class="flex-col justify-center px-4 py-2 card" data-aos="fade-up"--}}
{{--                             data-aos-anchor-placement="top-bottom">--}}
{{--                            <a href="#">--}}
{{--                                <img src="{{ asset('/assets/images/FotoDepan.jpg') }}" style="height: 300px" alt="Testing foto" class="mx-auto">--}}
{{--                                <div class="text-center py-8">--}}
{{--                                    <h1 class="text-3xl font-semibold">Dasar Laravel</h1>--}}
{{--                                    <p class="text-base font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit.--}}
{{--                                        Eget donec vel vitae rhoncus--}}
{{--                                        ullamcorper id enim hendrerit. Praesent ultrices porttitor velit consequat adipiscing--}}
{{--                                        morbi habitasse diam. Lorem vulputate a commodo vel sapien sed augue. Hendrerit turpis--}}
{{--                                        diam cursus amet, tortor a. Pellentesque tempor, non accumsan neque, morbi ac massa--}}
{{--                                        cursus interdum. Duis condimentum sed interdum commodo mauris mus.</p>--}}
{{--                                    <a href="https://api.whatsapp.com/send?phone=6285312727272">--}}
{{--                                        <button class="bg-serv-bg py-4 px-12">$9.99</button>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </a>--}}

{{--                        </div>--}}
{{--                        <div class="flex-col justify-center px-4 py-2 card" data-aos="fade-up"--}}
{{--                             data-aos-anchor-placement="top-bottom">--}}
{{--                            <a href="#">--}}
{{--                                <img src="{{ asset('/assets/images/FotoDepan.jpg') }}" style="height: 300px" alt="Testing foto" class="mx-auto">--}}
{{--                                <div class="text-center py-8">--}}
{{--                                    <h1 class="text-3xl font-semibold">Fulk Stack Web Developer Travel</h1>--}}
{{--                                    <p class="text-base font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit.--}}
{{--                                        Eget donec vel vitae rhoncus--}}
{{--                                        ullamcorper id enim hendrerit. Praesent ultrices porttitor velit consequat adipiscing--}}
{{--                                        morbi habitasse diam. Lorem vulputate a commodo vel sapien sed augue. Hendrerit turpis--}}
{{--                                        diam cursus amet, tortor a. Pellentesque tempor, non accumsan neque, morbi ac massa--}}
{{--                                        cursus interdum. Duis condimentum sed interdum commodo mauris mus.</p>--}}
{{--                                    <a href="https://api.whatsapp.com/send?phone=6285312727272">--}}
{{--                                        <button class="bg-serv-bg py-4 px-12">$9.99</button>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </a>--}}

{{--                        </div>--}}
{{--                        <div class="flex-col justify-center px-4 py-2 card" data-aos="fade-up"--}}
{{--                             data-aos-anchor-placement="top-bottom">--}}
{{--                            <a href="#">--}}
{{--                                <img src="{{ asset('/assets/images/FotoDepan.jpg') }}" style="height: 300px" alt="Testing foto" class="mx-auto">--}}
{{--                                <div class="text-center py-8">--}}
{{--                                    <h1 class="text-3xl font-semibold">Fulk Stack Web Developer Top up Voucher</h1>--}}
{{--                                    <p class="text-base font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit.--}}
{{--                                        Eget donec vel vitae rhoncus--}}
{{--                                        ullamcorper id enim hendrerit. Praesent ultrices porttitor velit consequat adipiscing--}}
{{--                                        morbi habitasse diam. Lorem vulputate a commodo vel sapien sed augue. Hendrerit turpis--}}
{{--                                        diam cursus amet, tortor a. Pellentesque tempor, non accumsan neque, morbi ac massa--}}
{{--                                        cursus interdum. Duis condimentum sed interdum commodo mauris mus.</p>--}}
{{--                                    <a href="https://api.whatsapp.com/send?phone=6285312727272">--}}
{{--                                        <button class="bg-serv-bg py-4 px-12">$9.99</button>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </a>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>

@endsection