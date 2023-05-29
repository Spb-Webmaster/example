@extends('layouts.layout')
@section('content')

    <x-top-img />

    <section class="bg-white border-b py-8">
        <div class="container max-w-5xl mx-auto m-8">
            <x-h2>Телефонный справочник</x-h2>

            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-5/6 sm:w-1/2 p-6">
                    resources/views/phones/index.blade.php
                </div>
                <div class="w-full sm:w-1/2 p-6">

                </div>
            </div>
        </div>
    </section>

@endsection
