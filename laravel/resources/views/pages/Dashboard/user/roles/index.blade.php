@extends('layouts.app')

@section('title', ' Belajar')

@section('content')

    @if (count($roles))
        <main class="h-full overflow-y-auto">
            <div class="container mx-auto">
                <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                    <div class="col-span-8">
                        <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                            Roles Managment
                        </h2>
                        <p class="text-sm text-gray-400">
                            {{ auth()->user()->roles->count() }} Total Roles
                        </p>
                    </div>
{{--                    <div class="col-span-4 lg:text-right">--}}
{{--                        <div class="relative mt-0 md:mt-6">--}}
{{--                            <a href="{{ route('admin.role.create') }}" class="inline-block px-4 py-2 mt-2 text-left text-white rounded-xl bg-ezb-button">--}}
{{--                                + Add Roles--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>

            <div class="container mx-auto">
                <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                    <div class="col-span-4 lg:text-left">
                        <div class="relative mt-0 md:mt-6 inline-block">
                            <a href="{{ route('admin.role.create') }}" class="inline-block px-4 py-2 mt-2 text-left text-white rounded-xl bg-ezb-bg">
                                + Add Role
                            </a>
                            <div class="inline-block ">
                                <form method="GET">
                                    <input type="text" name="search" class="px-4 py-2 w-80" placeholder="Search..." value="{{ request('search') }}">
                                    <button class="flex items-center justify-center px-4 border-l">
                                        {{--                                                    <svg class="w-6 h-6 text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg"--}}
                                        {{--                                                         viewBox="0 0 24 24">--}}
                                        {{--                                                        <path--}}
                                        {{--                                                                d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"> </path>--}}
                                        {{--                                                    </svg>--}}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="container px-6 mx-auto mt-5">
                <div class="grid gap-5 md:grid-cols-12">
                    <main class="col-span-12 p-4 md:pt-0">
                        <div class="px-6 py-2 mt-2 bg-white rounded-xl">
                            <table class="w-full" aria-label="Table">
                                <thead>
                                <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                    <th class="py-4" scope="">No</th>
                                    <th class="py-4" scope="">Role</th>
                                    <th class="py-4" scope="">Action</th>
                                </tr>
                                </thead>
                                <tbody class="bg-white">

                                @forelse ($roles as $key => $role)
                                    <tr class="text-gray-700 border-b">
                                        <td class="w-2/6 px-1 py-5">
                                            <div class="flex items-center text-sm">
                                                <div>
                                                    <p class="font-medium text-black">
                                                        {{ ++$i }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-1 py-5 text-sm">
                                            {{ $role->name ?? '' }}
                                        <td class="px-1 py-5 text-sm">
                                            <a class="px-4 py-2 mt-2 text-left text-white rounded-xl bg-ezb-email" href="{{ route('admin.role.show',$role->id) }}">Show</a>
                                            @can('role-edit')
                                                <a class="px-4 py-2 mt-2 text-left text-white rounded-xl bg-ezb-email" href="{{ route('admin.role.edit',$role->id) }}">Edit</a>
                                            @endcan
                                            @can('role-delete')
                                                {!! Form::open(['method' => 'DELETE','route' => ['admin.role.destroy', $role->id],'style'=>'display:inline']) !!}
                                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                            @endcan
                                        </td>
{{--                                        </td>--}}
{{--                                        <form action="{{ route('admin.role.destroy',$role['id']) }}" method="POST">--}}
{{--                                            <td class="px-1 py-5 text-sm">--}}
{{--                                                <a href="{{ route('admin.role.show', $role['id']) }}" class="px-4 py-2 mt-2 text-left text-white rounded-xl bg-ezb-email">--}}
{{--                                                    Show Role--}}
{{--                                                </a>--}}
{{--                                            </td>--}}
{{--                                            <td class="px-1 py-5 text-sm">--}}
{{--                                                <a href="{{ route('admin.role.edit', $role['id']) }}" class="px-4 py-2 mt-2 text-left text-white rounded-xl bg-ezb-email">--}}
{{--                                                    Edit Role--}}
{{--                                                </a>--}}
{{--                                            </td>--}}

{{--                                            @csrf--}}
{{--                                            @method('DELETE')--}}
{{--                                            <td class="px-1 py-5 text-sm">--}}
{{--                                                <a href="{{ route('admin.role.destroy', $role['id']) }}" class="px-4 py-2 mt-2 text-left text-white rounded-xl bg-ezb-email">--}}
{{--                                                    Delete Role--}}
{{--                                                </a>--}}
{{--                                            </td>--}}
{{--                                        </form>--}}
                                    </tr>
                                @empty

                                    {{-- empty --}}

                                @endforelse

                                </tbody>
                            </table>

                            {!! $roles->render() !!}
                        </div>
                    </main>
                </div>
            </section>
        </main>
    @else
        <div class="flex h-screen">
            <div class="m-auto text-center">
                <img src="{{ asset('/assets/images/no_data.png') }}" alt="" class="mx-auto">
                <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                    There is No Roles Yet
                </h2>
                <p class="text-sm text-gray-400">
                    It seems that you haven’t provided any Roles. <br>
                    Let’s create Roles!
                </p>

                <div class="relative mt-0 md:mt-6">
                    <a href="{{ route('admin.roles.create') }}" class="px-4 py-2 mt-2 text-left text-white rounded-xl bg-ezb-bg">
                        + Add Roles
                    </a>
                </div>
            </div>
        </div>
    @endif

@endsection
