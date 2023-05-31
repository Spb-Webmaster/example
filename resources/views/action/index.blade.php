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






                            <div class="mb-3">
                                <label
                                    for="file-input"
                                    class="mb-2 inline-block text-neutral-700 dark:text-neutral-200"
                                >Загрузить фон</label
                                >
                                <input
                                    class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                    type="file"
                                    name="file-input" id="file-input"/>
                            </div>

                            <br>

                            <input type="submit"
                                class="text-white bg-indigo-500 border-0 py-2 px-6 gradient rounded text-lg" value="Добавить страницу" />

                            <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled
                                brook viral artisan.</p></div>


                    </form>

        </div>
    </section>

@endsection
