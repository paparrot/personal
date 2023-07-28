@extends('layouts.base')

@section('body')
    <div class="min-h-screen flex flex-col">
        <x-header />
        <div class="flex-1 py-5">
            @yield('content')
        </div>
        <x-footer />
    </div>
    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
