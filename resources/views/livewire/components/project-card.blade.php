<div class="card card-bordered bg-base-100">
    <figure>
        <img class="aspect-video object-cover object-center" src="{{ $project->preview_path }}"
             alt="{{ $project->title }}"/>
    </figure>
    <div class="card-body">
        <h2 class="card-title">{{ $project->title }}!</h2>
        <p class="mb-2">{{ $project->summary }}</p>
        <div class="flex gap-3">
            <a
                href="{{ $project->link }}"
                target="_blank"
                rel="noreferrer noopener"
                class="btn btn-primary w-1/2"
            >View project</a>
            @if($project->code_link)
                <a
                    href="{{ $project->code_link }}"
                    target="_blank"
                    rel="noreferrer noopener"
                    class="btn btn-primary w-1/2"
                >View code
                </a>
            @endif
        </div>
    </div>
</div>
