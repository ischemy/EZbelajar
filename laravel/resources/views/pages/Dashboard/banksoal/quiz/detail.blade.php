@extends('layouts.app')

@section('title', ' Detail Quiz')

@section('content')

    <main class="h-full overflow-y-auto">
        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-12">
                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Detail Quiz
                    </h2>
                    <ol class="inline-flex p-0 list-none">
                        <li class="flex items-center">
                            <a href="{{ route('admin.banksoal.index') }}" class="text-gray-400">Bank Soal</a>
                            <svg class="w-3 h-3 mx-3 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                            </svg>
                        </li>
                        <li class="flex items-center">
                            <p class="font-medium">Detail Quiz</p>
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-8">
                <div class="col-span-4 lg:text-left">
                    <div class="relative mt-0 md:mt-4 inline-block">
                        <a href="{{route('admin.createQuestion',$banksoal->id)}}" class="inline-block px-4 py-2 mt-2 text-left text-white rounded-xl bg-ezb-bg">
                            + Add Question
                        </a>
{{--                        <a href="{{route('admin.banksoal.index')}}" class="inline-block px-4 py-2 mt-2 text-left text-white rounded-xl bg-ezb-bg">--}}
{{--                           Back--}}
{{--                        </a>--}}
                    </div>
                </div>
            </div>
        </div>


        {{--            <div class="flex items-center justify-center mx-auto">--}}
        {{--                <div class="flex border-2 rounded">--}}
        {{--                    <form action="admin.belajar.find" method="GET">--}}
        {{--                        <input type="text" class="px-4 py-2 w-80" placeholder="Search...">--}}
        {{--                        <button class="flex items-center justify-center px-4 border-l">--}}
        {{--                            <svg class="w-6 h-6 text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg"--}}
        {{--                                 viewBox="0 0 24 24">--}}
        {{--                                <path--}}
        {{--                                        d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />--}}
        {{--                            </svg>--}}
        {{--                        </button>--}}
        {{--                    </form>--}}
        {{--                </div>--}}
        {{--            </div>--}}


        <section class="container px-6 mx-auto mt-5">
            <div class="grid gap-5 md:grid-cols-12">
                <main class="col-span-12 p-4 md:pt-0">
                    <div class="px-6 py-2 mt-2 bg-white rounded-xl">
                        <table class="w-full" aria-label="Table">
                            <thead>
                            <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                <th class="py-4" scope="">Items</th>
                                <th class="py-4" scope="">Details</th>
                            </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    Name
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">{{ $banksoal->title }}</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 ">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    Description
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">{{ $banksoal->description}}</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 ">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    Status
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 ">
                                        <div class="text-sm text-gray-900">{{ $banksoal->is_active === '1'  ? 'Active' : 'Not Active' }}</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    Details
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 ">
                                        <div class="text-sm text-gray-900">{{ $banksoal->details }}</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 ">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    Created By
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">{{ $banksoal->user->name}}</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>

            @if($questions->isEmpty())
                <div class="col-span-12">
                    <div class="px-4 py-5 my-3 sm:px-6">
                        <h1 class="text-sm leading-6 font-medium text-gray-900">
                            No question under this section are found!
                        </h1>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">
                            Create some questions, they will appear here!
                        </p>
                    </div>
                </div>
            @else
                <div class="grid gap-5 md:grid-cols-12">
                    <main class="col-span-12 p-4 md:pt-0">
                        <div class="px-6 py-2 mt-2 bg-white rounded-xl">
                            <table class="w-full" aria-label="Table">
                                <thead>
                                <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                        <th scope="col" class="py-4">
                                            Name
                                        </th>
                                        <th scope="col" class="py-4">
                                            Status
                                        </th>
                                        <th scope="col" class="py-4">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="capitalize bg-white divide-y divide-gray-200">
                                    @foreach($questions as $question)
                                        <tr class="text-gray-700 border-b">
                                            <td class="px-1 py-5 text-sm">
                                                <a class="text-blue-400 hover:underline" href="{{ route('admin.detailQuestion', $question->id) }}">
                                                    {{ $question->question}}
                                                </a>
                                            </td>
                                            <td class="px-1 py-5 text-sm">
                                                <div class="text-sm text-gray-900">{{ $question->is_active === '1'  ? 'Yes' : 'No' }}</div>
                                            </td>
                                            <td class="px-1 py-5 text-sm flex flex-shrink-0">
                                                <a href="{{ route('admin.createQuestion', $banksoal->id )}}" class="text-green-500 hover:text-green-700">
                                                    <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white  border border-transparent rounded-lg shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 bg-ezb-bg">
                                                        Create
                                                    </button>
{{--                                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-500 hover:text-blue-700 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">--}}
{{--                                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />--}}
{{--                                                    </svg>--}}
                                                </a>
                                                <a href="{{ route('admin.banksoal.index')}}  " class="text-green-500 hover:text-green-700">
                                                    <p>Back</p>
{{--                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20" fill="currentColor">--}}
{{--                                                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />--}}
{{--                                                        <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />--}}
{{--                                                    </svg>--}}
                                                </a>
                                                <form action="{{route('admin.deleteQuestion',$question->id)}}" method="post">
                                                    @csrf
                                                    <a class="text-red-500 hover:text-red-700">
                                                        <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white  border border-transparent rounded-lg shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 bg-ezb-bg" onclick="return confirm('Are you sure want to delete this data ?')">
                                                            Delete
                                                        </button>
{{--                                                        <button type="submit">--}}
{{--                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 pt-1" viewBox="0 0 20 20" fill="currentColor">--}}
{{--                                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />--}}
{{--                                                            </svg>--}}
{{--                                                        </button>--}}
                                                    </a>
                                                </form>
                                            </td>
{{--                                            <td class="px-6 ">--}}
{{--                                                <div class="flex items-center">--}}
{{--                                                    <div class="ml-4">--}}
{{--                                                        <div class="text-sm font-medium text-gray-900">--}}
{{--                                                            <a class="text-blue-400 hover:underline" href="{{ route('admin.detailQuestion', $question->id) }}">--}}
{{--                                                                {{ $question->question}}--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td class="px-6 py-1">--}}
{{--                                                <div class="text-sm text-gray-900">{{ $question->is_active === '1'  ? 'Yes' : 'No' }}</div>--}}
{{--                                            </td>--}}
{{--                                            <td class="sm:flex align-middle justify-center items-center px-6 py-1 text-right text-sm font-medium">--}}
{{--                                                <a href="{{ route('admin.createQuestion', $banksoal->id )}}" class="text-green-500 hover:text-green-700">--}}
{{--                                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-500 hover:text-blue-700 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">--}}
{{--                                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />--}}
{{--                                                    </svg>--}}
{{--                                                </a>--}}
{{--                                                <a href="{{ route('admin.banksoal.index')}}  " class="text-green-500 hover:text-green-700">--}}
{{--                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20" fill="currentColor">--}}
{{--                                                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />--}}
{{--                                                        <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />--}}
{{--                                                    </svg>--}}
{{--                                                </a>--}}
{{--                                                <form action="{{route('admin.deleteQuestion',$question->id)}}" method="post">--}}
{{--                                                    @csrf--}}
{{--                                                    <a class="text-red-500 hover:text-red-700">--}}
{{--                                                        <button type="submit">--}}
{{--                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 pt-1" viewBox="0 0 20 20" fill="currentColor">--}}
{{--                                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />--}}
{{--                                                            </svg>--}}
{{--                                                        </button>--}}
{{--                                                    </a>--}}
{{--                                                </form>--}}
{{--                                            </td>--}}
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <!-- ---------------- END NEW TABLE --------------------- -->
                            </div>
                            {{ $questions->links() }}
                        </div>
                    </div>
                </div>
            @endif

        </section>
    </main>

{{--    LINE--}}

{{--    <div class="max-w-7xl m-4 mx-auto sm:px-6 lg:px-8">--}}
{{--        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">--}}
{{--            <div class="mx-auto">--}}
{{--                <div class="flex justify-between items-center py-4">--}}
{{--                    <a href="{{route('admin.createQuestion',$banksoal->id)}}" class="tracking-wide font-bold rounded border-2 border-blue-500 hover:border-blue-500 bg-blue-500 text-white hover:bg-blue-600 transition shadow-md py-2 px-6 items-center">Create a Question</a>--}}
{{--                    <a href="{{route('admin.banksoal.index')}}" class="tracking-wide font-bold rounded border-2 border-blue-500 hover:border-blue-500 bg-blue-500 text-white hover:bg-blue-600 transition shadow-md py-2 px-6 items-center">Back</a>--}}
{{--                </div>--}}
{{--                <!-- --------------------- START NEW TABLE --------------------->--}}

{{--                <div class="flex flex-col">--}}
{{--                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">--}}
{{--                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">--}}
{{--                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">--}}
{{--                                <table class="min-w-full divide-y divide-gray-200">--}}
{{--                                    <thead class="tracking-wide font-bold rounded border-2 bg-green-500 text-white  transition shadow-md py-2 px-6 items-center">--}}
{{--                                    <tr>--}}
{{--                                        <th scope="col" class="px-6 py-3 text-left text-xs font-extrabold  uppercase tracking-wider">--}}
{{--                                            Item--}}
{{--                                        </th>--}}
{{--                                        <th scope="col" class="px-6 py-3 text-left text-xs font-extrabold  uppercase tracking-wider">--}}
{{--                                            Details--}}
{{--                                        </th>--}}
{{--                                    </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody class="bg-white divide-y divide-gray-200">--}}
{{--                                    <tr>--}}
{{--                                        <td class="px-6 py-4">--}}
{{--                                            <div class="flex items-center">--}}
{{--                                                <div class="ml-4">--}}
{{--                                                    <div class="text-sm font-medium text-gray-900">--}}
{{--                                                        Name--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td class="px-6 py-4">--}}
{{--                                            <div class="text-sm text-gray-900">{{ $banksoal->title }}</div>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td class="px-6 py-4 ">--}}
{{--                                            <div class="flex items-center">--}}
{{--                                                <div class="ml-4">--}}
{{--                                                    <div class="text-sm font-medium text-gray-900">--}}
{{--                                                        Description--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td class="px-6 py-4">--}}
{{--                                            <div class="text-sm text-gray-900">{{ $banksoal->description}}</div>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td class="px-6 py-4 ">--}}
{{--                                            <div class="flex items-center">--}}
{{--                                                <div class="ml-4">--}}
{{--                                                    <div class="text-sm font-medium text-gray-900">--}}
{{--                                                        Status--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td class="px-6 py-4 ">--}}
{{--                                            <div class="text-sm text-gray-900">{{ $banksoal->is_active === '1'  ? 'Active' : 'Not Active' }}</div>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td class="px-6 py-4">--}}
{{--                                            <div class="flex items-center">--}}
{{--                                                <div class="ml-4">--}}
{{--                                                    <div class="text-sm font-medium text-gray-900">--}}
{{--                                                        Details--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td class="px-6 py-4 ">--}}
{{--                                            <div class="text-sm text-gray-900">{{ $banksoal->details }}</div>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td class="px-6 py-4 ">--}}
{{--                                            <div class="flex items-center">--}}
{{--                                                <div class="ml-4">--}}
{{--                                                    <div class="text-sm font-medium text-gray-900">--}}
{{--                                                        Created By--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td class="px-6 py-4">--}}
{{--                                            <div class="text-sm text-gray-900">{{ $banksoal->user->name}}</div>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- ---------------- END NEW TABLE --------------------- -->--}}

{{--                <!-- --------------------- START NEW TABLE --------------------->--}}
{{--                @if($questions->isEmpty())--}}
{{--                    <div class="px-4 py-5 my-3 sm:px-6">--}}
{{--                        <h1 class="text-sm leading-6 font-medium text-gray-900">--}}
{{--                            No question under this section are found!--}}
{{--                        </h1>--}}
{{--                        <p class="mt-1 max-w-2xl text-sm text-gray-500">--}}
{{--                            Create some questions, they will appear here!--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                @else--}}
{{--                    <div class="flex flex-col">--}}
{{--                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">--}}
{{--                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">--}}
{{--                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">--}}
{{--                                    <table class="min-w-full divide-y divide-gray-200">--}}
{{--                                        <thead class="tracking-wide font-bold rounded border-2 bg-green-500 text-white  transition shadow-md py-2 px-6 items-center">--}}
{{--                                        <tr>--}}
{{--                                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider">--}}
{{--                                                Name--}}
{{--                                            </th>--}}
{{--                                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-white uppercase tracking-wider">--}}
{{--                                                Status--}}
{{--                                            </th>--}}
{{--                                            <th scope="col" class="relative px-6 py-3">--}}
{{--                                                <span class="sr-only">Edit</span>--}}
{{--                                            </th>--}}
{{--                                        </tr>--}}
{{--                                        </thead>--}}
{{--                                        <tbody class="capitalize bg-white divide-y divide-gray-200">--}}
{{--                                        @foreach($questions as $question)--}}
{{--                                            <tr class="hover:bg-green-100">--}}
{{--                                                <td class="px-6 ">--}}
{{--                                                    <div class="flex items-center">--}}
{{--                                                        <div class="ml-4">--}}
{{--                                                            <div class="text-sm font-medium text-gray-900">--}}
{{--                                                                <a class="text-blue-400 hover:underline" href="{{ route('detailQuestion', $question->id) }}">--}}
{{--                                                                    {{ $question->question}}--}}
{{--                                                                </a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </td>--}}
{{--                                                <td class="px-6 py-1">--}}
{{--                                                    <div class="text-sm text-gray-900">{{ $question->is_active === '1'  ? 'Yes' : 'No' }}</div>--}}
{{--                                                </td>--}}
{{--                                                <td class="sm:flex align-middle justify-center items-center px-6 py-1 text-right text-sm font-medium">--}}
{{--                                                    <a href="{{ route('createQuestion', $banksoal->id )}}" class="text-green-500 hover:text-green-700">--}}
{{--                                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-500 hover:text-blue-700 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">--}}
{{--                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />--}}
{{--                                                        </svg>--}}
{{--                                                    </a>--}}
{{--                                                    <a href="{{ route('listSection')}}  " class="text-green-500 hover:text-green-700">--}}
{{--                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20" fill="currentColor">--}}
{{--                                                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />--}}
{{--                                                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />--}}
{{--                                                        </svg>--}}
{{--                                                    </a>--}}
{{--                                                    <form action="{{route('deleteQuestion',$question->id)}}" method="post">--}}
{{--                                                        @csrf--}}
{{--                                                        <a class="text-red-500 hover:text-red-700">--}}
{{--                                                            <button type="submit">--}}
{{--                                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 pt-1" viewBox="0 0 20 20" fill="currentColor">--}}
{{--                                                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />--}}
{{--                                                                </svg>--}}
{{--                                                            </button>--}}
{{--                                                        </a>--}}
{{--                                                    </form>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
{{--                                        @endforeach--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}
{{--                                    <!-- ---------------- END NEW TABLE --------------------- -->--}}
{{--                                </div>--}}
{{--                                {{ $questions->links() }}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--            @endif--}}
{{--            <!-- ---------------- END NEW TABLE --------------------- -->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
