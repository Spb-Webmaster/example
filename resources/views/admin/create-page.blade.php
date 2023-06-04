@extends('layouts.layout')
@section('content')

    <x-top-img/>

    <section class="bg-white border-b py-8">
        <div class="container max-w-5xl mx-auto m-8">
            <x-h2>{{__('Добавить страницу')}}</x-h2>

            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <x-form action="{{ route('action-create') }}" method="POST">

                <div
                    class="bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">

                    <div class="relative mb-4">
                        <label for="title" class="leading-7 text-sm text-gray-600">{{__('Заголовок')}}</label>
                        <x-form.input type="text" name="title" />
                    </div>
                    <div class="relative mb-4"><label for="content" class="leading-7 text-sm text-gray-600">{{__('Описание')}}</label>
                        <x-form.textarea name="content"></x-form.textarea>
                    </div>

                    <div class="mb-3">
                        <label
                            for="file-input"
                            class="mb-2 inline-block text-neutral-700 dark:text-neutral-200"
                        >Загрузить фон</label
                        >
                        <x-form.input type="file"
                                      name="file-input" id="file-input"
                        />
                    </div>

                    <br>
                    <x-form.input type="submit"
                                  value="{{_('Добавить страницу')}}" />

                    <p class="text-xs text-gray-500 mt-3">{{__('Chicharrones blog helvetica normcore iceland tousled
                                brook viral artisan.')}}</p></div>

            </x-form>

        </div>
    </section>

@endsection

