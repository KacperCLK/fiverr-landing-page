<form wire:submit.prevent="submit" class="form">
    <div class="form__group">
        <input type="text" id="name" name="name" placeholder="Your Name" wire:model.lazy="name" class="{{ $errors->has('name') ? 'is-invalid' : '' }}">
        @error('name') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div class="form__group">
        <input type="email" id="email" name="email" placeholder="What's your email?" wire:model.lazy="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}">
        @error('email') <span class="error">{{ $message }}</span> @enderror
    </div>

    <div class="form__group">
        <textarea id="message" name="message" placeholder="Your message..." wire:model.lazy="message" class="{{ $errors->has('message') ? 'is-invalid' : '' }}" ></textarea>
        @error('message') <span class="error">{{ $message }}</span> @enderror
    </div>

    <button type="submit" class="button--main">Send message</button>

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</form>