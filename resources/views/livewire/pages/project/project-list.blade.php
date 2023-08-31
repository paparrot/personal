@extends('components.layouts.app')

@section('title', 'Projects')

@section('content')
    <section class="container mx-auto px-5 py-12">
        <h2 class="text-4xl font-bold text-center pb-12">Projects</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-3">
            @foreach($projects as $project)
                <livewire:components.project-card :project="$project"/>
            @endforeach
        </div>
    </section>
@endsection
