{{--<a href="{{ route('detail.landing', $item->id) }}" class="inline-block px-3">--}}
{{--    <div class="w-96 h-auto overflow-hidden md:p-5 p-4 bg-white rounded-2xl inline-block">--}}
{{--        <div class="flex items-center space-x-2 mb-6">--}}

{{--            @if ($item->user->detail_user->photo != NULL)--}}
{{--                <img class="w-14 h-14 object-cover rounded-full mr-1" src="{{ url(Storage::url($item->user->detail_user->photo)) }}" alt="photo freelancer" loading="lazy">--}}
{{--            @else--}}
{{--                <svg class="w-14 h-14 object-cover object-center rounded-full mr-1 text-gray-300" fill="currentColor" viewBox="0 0 24 24">--}}
{{--                    <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />--}}
{{--                </svg>--}}
{{--            @endif--}}

{{--            <div>--}}
{{--                <!--Author name-->--}}
{{--                <p class="text-gray-900 font-semibold text-lg">Amin</p>--}}
{{--                <p class="text-ezb-text font-light text-md">--}}
{{--                    Role--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <!--Banner image-->--}}
{{--        @if (count($item->thumbnail_service))--}}
{{--            @if (($item->thumbnail_service[0]->thumbnail) != NULL)--}}
{{--                <img class="rounded-2xl object-cover h-48 w-full" src="{{ url(Storage::url($item->thumbnail_service[0]->thumbnail)) }}" alt="photo freelancer" loading="lazy">--}}
{{--            @else--}}
{{--                <img class="rounded-2xl w-full" src="{{ url('https://via.placeholder.com/750x500') }}" alt="placeholder" />--}}
{{--            @endif--}}
{{--        @else--}}
{{--            <img class="rounded-2xl w-full" src="{{ url('https://via.placeholder.com/750x500') }}" alt="placeholder" />--}}
{{--    @endif--}}

{{--    <!--Title-->--}}
{{--        <h1 class="font-semibold text-gray-900 text-lg mt-1 leading-normal py-4">--}}
{{--            {{ $item->title ?? '' }}--}}
{{--            Title--}}
{{--        </h1>--}}
{{--        <!--Description-->--}}
{{--        <div class="max-w-full">--}}
{{--            @include('components.landing.rating')--}}
{{--        </div>--}}

{{--        <div class="text-center mt-5 flex justify-between w-full">--}}
{{--            <span--}}
{{--                class="text-ezb-text mr-3 inline-flex items-center leading-none text-md py-1 ">--}}
{{--                Price starts from:--}}
{{--            </span>--}}
{{--            <span--}}
{{--                class="text-ezb-button inline-flex items-center leading-none text-md font-semibold">--}}
{{--                Rp {{ number_format($item->price) ?? '' }}--}}
{{--                Rp 1.000.000--}}
{{--            </span>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</a>--}}
