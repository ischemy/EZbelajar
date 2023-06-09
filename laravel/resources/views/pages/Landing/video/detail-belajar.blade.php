@extends('layouts.front')

@section('title', $post->title)

@section('content')

    <div class="bg-gray-50 py-16 px-4 sm:grid sm:grid-cols-12">
        <div class="sm:col-start-4 sm:col-span-6">
            <a href="{{ route('belajar.index') }}">
                <div class="bg-white text-center px-4 py-3 rounded-sm shadow-sm hover:shadow-md">Back</div>
            </a>


            <div class="flex mx-auto items-center justify-center shadow-lg mt-56 mx-8 mb-4 max-w-lg" style="width: 640px; height: 480px; position: relative;">

                <iframe src="{{ $post->link ?? ''}}"   width="640" height="480" frameborder="0" scrolling="no" seamless=""></iframe>

                <div style="width: 80px; height: 80px; position: absolute; opacity: 0; right: 0px; top: 0px;">&nbsp;</div>
            </div>


            <!-- comment form -->
{{--            <div class="flex mx-auto items-center justify-center shadow-lg mt-56 mx-8 mb-4 max-w-lg">--}}
{{--                <form class="w-full max-w-xl bg-white rounded-lg px-4 pt-2">--}}
{{--                    <div class="flex flex-wrap -mx-3 mb-6">--}}
{{--                        <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Add a new comment</h2>--}}
{{--                        <div class="w-full md:w-full px-3 mb-2 mt-2">--}}
{{--                            <textarea class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" name="body" placeholder='Type Your Comment' required></textarea>--}}
{{--                        </div>--}}
{{--                        <div class="w-full md:w-full flex items-start md:w-full px-3">--}}
{{--                            <div class="flex items-start w-1/2 text-gray-700 px-2 mr-auto">--}}
{{--                                <svg fill="none" class="w-5 h-5 text-gray-600 mr-1" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>--}}
{{--                                </svg>--}}
{{--                                <p class="text-xs md:text-sm pt-px">Some HTML is okay.</p>--}}
{{--                            </div>--}}
{{--                            <div class="-mr-1">--}}
{{--                                <input type='submit' class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100 btn-center" value='Post Comment'>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}

            @include('components.comment.indexBelajar',['comments' => $post->comments, 'belajar_id' => $post->id])
{{--            @include('components.comment.indexBelajar',['comments' => $post->comments, 'belajar_id' => $post->id])--}}

        </div>
    </div>

{{--    <div class="container">--}}
{{--        <div class="bg-ezb-bg-explore overflow-hidden">--}}

{{--        <iframe class="w-full aspect-video ..." src="{{ $post->link }}"></iframe>--}}


{{--            <div class="flex mx-auto items-center justify-center shadow-lg mt-56 mx-8 mb-4 max-w-lg" style="width: 640px; height: 480px; position: relative;">--}}

{{--                <iframe src="{{ $post->link }}"   width="640" height="480" frameborder="0" scrolling="no" seamless=""></iframe>--}}

{{--                <div style="width: 80px; height: 80px; position: absolute; opacity: 0; right: 0px; top: 0px;">&nbsp;</div>--}}
{{--            </div>--}}

{{--            <div class="w-full aspect-video md:aspect-square text-center justify-center shadow-lg flex lg:mb-0 mb-12">--}}

{{--                <div  style="width: 640px; height: 480px; position: relative;">--}}

{{--                    <iframe src="{{ $post->link }}"   width="640" height="480" frameborder="0" scrolling="no" seamless=""></iframe>--}}

{{--                    <div style="width: 80px; height: 80px; position: absolute; opacity: 0; right: 0px; top: 0px;">&nbsp;</div>--}}
{{--                </div>--}}

{{--                <a href="{{ $post->link }}" data-lity>--}}
{{--                    <img id="hero" src="{{ Storage::url($post->cover)}}" alt="" class="" />--}}
{{--                </a>--}}
{{--            </div>--}}

{{--            <!-- comment form -->--}}
{{--            <div class="flex mx-auto items-center justify-center shadow-lg mt-56 mx-8 mb-4 max-w-lg">--}}
{{--                <form class="w-full max-w-xl bg-white rounded-lg px-4 pt-2">--}}
{{--                    <div class="flex flex-wrap -mx-3 mb-6">--}}
{{--                        <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Add a new comment</h2>--}}
{{--                        <div class="w-full md:w-full px-3 mb-2 mt-2">--}}
{{--                            <textarea class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" name="body" placeholder='Type Your Comment' required></textarea>--}}
{{--                        </div>--}}
{{--                        <div class="w-full md:w-full flex items-start md:w-full px-3">--}}
{{--                            <div class="flex items-start w-1/2 text-gray-700 px-2 mr-auto">--}}
{{--                                <svg fill="none" class="w-5 h-5 text-gray-600 mr-1" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>--}}
{{--                                </svg>--}}
{{--                                <p class="text-xs md:text-sm pt-px">Some HTML is okay.</p>--}}
{{--                            </div>--}}
{{--                            <div class="-mr-1">--}}
{{--                                <input type='submit' class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100" value='Post Comment'>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--    </div>--}}
{{--    </div>--}}

@endsection