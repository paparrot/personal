@php
    use \Illuminate\Support\Facades\Route;
@endphp

<div class="sticky top-0 z-10 shadow  bg-base-100">
    <div class="navbar container flex justify-between mx-auto">
        <a href="{{ route('home') }}" class="font-bold px-0 normal-case text-xl">Paparrot</a>
        <nav>
            <ul class="flex gap-4">
                <li>
                    <a
                        href="{{ route('about') }}"
                        @class(['text-primary' => Route::is('about')])
                    >
                        About
                    </a>
                </li>
                <li>
                    <a
                        href="{{ route('projects.list') }}"
                        @class(['text-primary' => Route::is('projects')])
                    >
                        Projects
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
