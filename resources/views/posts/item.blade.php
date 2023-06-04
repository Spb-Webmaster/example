@extends('layouts.layout')
@section('content')


    <x-top-img/>

    <section class="bg-white border-b py-8">
        <div class="container max-w-5xl mx-auto m-8">
            <x-h2>Разные фоны</x-h2>

            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>

                    <div class="flex flex-wrap">
                        <div class="w-5/6 sm:w-1/2 p-6">

                            <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                                {{ $post->title  }}
                            </h3>
                            <div class="text-gray-600 mb-8">
                                {!! $post->content !!}
                            </div>
                            <div class="mb-8">
                                <a class="text-rose-950 decoration-1 underline hover:decoration-blue-400 hover:text-blue-400" href="{{ route('action-update-page', $post->id) }}">Редактировать</a>
                            </div>
                        </div>

                        <div class="w-full sm:w-1/2 p-6">
                            <img src="{{ $post->img  }}" alt="">
                        </div>
                    </div>

        </div>
    </section>

@endsection
