<div class="hero min-h-[70vh]">
    <div class="hero-content flex-col justify-between lg:flex-row-reverse">
        <img src="/images/hero.jpeg" alt="My photo" class="w-full md:w-2/5 rounded-lg shadow-2xl" />
        <div>
            <h1 class="text-5xl font-bold">{{__("hero.title")}} 👋</h1>
            <p class="py-6">
                {{ __("hero.subtitle") }}
            </p>
            <div class="w-full flex gap-3">
                <a href="{{ asset('/docs/Klim_Subbotin_Backend_PHP.pdf') }}" target="_blank" rel="noreferrer noopener" class="w-1/2 btn btn-primary">{{ __("hero.resume") }}</a>
                <a href="https://github.com/paparrot" class="w-1/2 btn btn-outline" target="_blank" rel="noopener noreferrer">Github</a>
            </div>
        </div>
    </div>
</div>
