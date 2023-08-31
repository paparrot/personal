<div>
    @if(app()->getLocale() === "ru")
        <button wire:click="toggle('en')" class="btn">🇷🇺</button>
    @else
        <button wire:click="toggle('ru')" class="btn">🇺🇸</button>
    @endif
</div>
