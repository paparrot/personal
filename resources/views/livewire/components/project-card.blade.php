<a href="{{ route('projects.show', ['project' => $project]) }}" class="card card-bordered bg-base-100">
    <figure>
        <img class="aspect-video object-cover object-center" src="{{ $project->preview_path }}" alt="{{ $project->title }}"/>
    </figure>
    <div class="card-body">
        <h2 class="card-title">{{ $project->title }}!</h2>
        <p>{{ $project->summary }}</p>
        <div class="card-actions justify-end">
            <button class="btn btn-primary">Show more</button>
        </div>
    </div>
</a>
