@extends('layouts.layout')
@section('content')

    <div class="pt-24 axeld_home">
        <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <!--Left Col-->
            <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
                <p class="uppercase tracking-loose w-full">What business are you?</p>
                <h1 class="my-4 text-5xl font-bold leading-tight">
                    Main Hero Message to sell yourself!
                </h1>
                <p class="leading-normal text-2xl mb-8">
                    Sub-hero message, not too long and not too short. Make it just right!
                </p>
                <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    Subscribe
                </button>
            </div>
            <!--Right Col-->
            <div class="w-full md:w-3/5 py-6 text-center">
                <img class="w-full md:w-4/5 z-50" src="images/hero.png" />
            </div>
        </div>
    </div>

<x-top-img />

    <section class="bg-white border-b py-8">
        <div class="container max-w-5xl mx-auto m-8">
            <x-h2>Разные фоны</x-h2>

            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            @foreach ($posts as $post)
                @if ($loop->odd)

                    <div class="flex flex-wrap">
                        <div class="w-5/6 sm:w-1/2 p-6">

                            <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                                {{ $post->title  }}
                            </h3>
                            <div class="text-gray-600 mb-8">
                                {{ $post->content  }}
                            </div>

                        </div>

                        <div class="w-full sm:w-1/2 p-6">
                            <img src="{{ $post->img  }}" alt="">
                        </div>
                    </div>

                @endif

                @if ($loop->even)

                    <div class="flex flex-wrap flex-col-reverse sm:flex-row">
                        <div class="w-full sm:w-1/2 p-6 mt-6">
                            <img src="{{ $post->img  }}" alt="">

                        </div>
                        <div class="w-full sm:w-1/2 p-6 mt-6">

                            <div class="align-middle">
                                <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                                    {{ $post->title  }}
                                </h3>
                                <div class="text-gray-600 mb-8">
                                    {{ $post->content  }}
                                </div>
                            </div>

                        </div>
                    </div>

                @endif

            @endforeach

        </div>
    </section>

@endsection
