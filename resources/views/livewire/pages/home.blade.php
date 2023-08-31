@extends('components.layouts.app')

@section('content')
    <x-hero/>
    @if($projects->count())
        <livewire:components.project-list :projects="$projects"/>
    @endif
    <livewire:components.contact-form/>
@endsection
