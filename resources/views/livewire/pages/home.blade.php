@extends('layouts.app')

@section('content')
    <x-hero/>
    <livewire:components.project-list :projects="$projects"/>
    <x-form/>
@endsection
