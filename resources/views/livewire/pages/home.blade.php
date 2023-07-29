@extends('layouts.app')

@section('content')
    <x-hero/>
    <livewire:components.project-list :projects="$projects"/>
    <livewire:components.contact-form />
@endsection
