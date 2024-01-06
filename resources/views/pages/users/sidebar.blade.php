@extends('layout.app')

@section('body')

    {{-- SIDEBAR --}}
    <div class="fixed top-0 hidden h-[100vh] w-[250px] lg:block py-8 px-4 text-gray-100 md:top-0">

    </div>

    {{-- CONTAINER --}}
    <div class="w-full pl-[30px] pr-[30px] lg:pl-[280px] py-8">
        <div class="text-3xl font-bold mb-8">
            @yield('header')
        </div>
        @yield('container')
    </div>
@endsection