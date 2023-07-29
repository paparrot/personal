@extends('layouts.app')

@section('title', $project->title)

@section('content')
    <h1 class="text-5xl text-center font-bold">{{ $project->title }}</h1>
    <div class="container mx-auto py-5">
        {!! $project->body !!}
    </div>
@endsection
