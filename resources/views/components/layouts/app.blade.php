@extends('components.layouts.base')

@section('body')
    @if(session()->has('message'))
        <div
            x-data="{open : true}"
            class="alert alert-success text-accent-content fixed bottom-5 right-5 z-10 w-max p-4"
            x-show="open"
        >
            <span>{{ session('message') }}</span>
            <button @click="open = false">&times;</button>
        </div>
    @endif
    <div class="min-h-screen flex flex-col">
        <x-header/>
        <div class="flex-1 py-5">
            @yield('content')
        </div>
        <x-footer/>
    </div>
    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
