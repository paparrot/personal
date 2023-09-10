<div class="container mx-auto px-5 md:py-14 lg:py-28">
    <div class="card card-bordered p-5 max-w-5xl mx-auto">
        <h2 class="text-4xl font-bold text-center mb-5">{{ __('contacts') }}</h2>
        <div wire:loading wire:target="submit">
            Sending
        </div>
        <form wire:submit="submit" class="space-y-5">
            @csrf
            <div>
                <label for="email" class="label">Email</label>
                <input wire:model.live="email" name="email" id="email" type="text" placeholder="example@example.com"
                       class="input input-bordered w-full"/>
                @error('email') <span class="text-error">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="name" class="label">{{ __("contacts.name") }}</label>
                <input wire:model.live="name" name="name" id="name" type="text" placeholder="Jane Doe"
                       class="input input-bordered w-full"/>
                @error('name') <span class="text-error">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="message" class="label">{{__("contacts.message")}}</label>
                <textarea wire:model.live="message" id="message" name="message"
                          class="textarea textarea-bordered w-full" rows="5" placeholder="{{ __('contacts.message.placeholder') }}"></textarea>
                @error('message') <span class="text-error">{{ $message }}</span> @enderror
            </div>
            <div>
                <button type="submit" class="btn btn-primary px-12">{{__("submit")}}</button>
            </div>
        </form>
    </div>
</div>
