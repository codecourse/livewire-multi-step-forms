<div>
    <form class="space-y-6" wire:submit="submit">
        <div>
            <x-input-label for="description" :value="__('Description')" />
            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" wire:model="description" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <x-primary-button>
            {{ __('Next step') }}
        </x-primary-button>
    </form>
</div>
