@extends('layouts.layout')
@section('home-active', '')
@section('phones-active', 'axeld_active')
@section('posts-active', '')

@section('content')

    <x-top-img/>

    <section class="bg-white border-b py-8">
        <div class="container max-w-5xl mx-auto m-8">
            <x-h2>Добавить страницу</x-h2>

            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>



                    <form action="{{ route('action-create') }}" method="post">
                        @csrf

                        <div
                            class="bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">

                            <div class="relative mb-4">
                                <label for="email" class="leading-7 text-sm text-gray-600">Заголовок</label><input
                                    type="text" name="title"
                                    class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            <div class="relative mb-4"><label for="message" class="leading-7 text-sm text-gray-600">Описание</label><textarea
                                    name="content"
                                    class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                            </div>


                            <label for="file-input" class="sr-only">Choose file</label>
                            <input type="file" name="file-input" id="file-input" class="block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400
    file:bg-transparent file:border-0
    file:bg-gray-100 file:mr-4
    file:py-3 file:px-4
    dark:file:bg-gray-700 dark:file:text-gray-400">

                            <br>

                            <input type="submit"
                                class="text-white bg-indigo-500 border-0 py-2 px-6 gradient rounded text-lg" value="Добавить страницу" />

                            <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled
                                brook viral artisan.</p></div>


                    </form>

        </div>
    </section>

@endsection
