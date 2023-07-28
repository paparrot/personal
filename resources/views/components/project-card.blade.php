<a href="#" class="card card-bordered bg-base-100">
    <figure><img src="{{ $project['image'] }}" alt="Shoes" /></figure>
    <div class="card-body">
        <h2 class="card-title">{{ $project['title'] }}!</h2>
        <p>{{ $project['summary'] }}</p>
        <div class="card-actions justify-end">
            <button class="btn btn-primary">Show more</button>
        </div>
    </div>
</a>
