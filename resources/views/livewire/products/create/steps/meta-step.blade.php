<div>
    <x-livewire::products.create.navigation :steps="$steps" />

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <form class="space-y-6" wire:submit="submit">
                <div>
                    <x-input-label for="title" :value="__('Title')" />
                    <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" wire:model="title" />
                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="description" :value="__('Description')" />
                    <x-textarea id="description" class="block mt-1 w-full" type="text" name="description" wire:model="description" />
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>

                <x-livewire::products.create.buttons>
                    <x-primary-button>
                        {{ __('Next step') }}
                    </x-primary-button>
                </x-livewire::products.create.buttons>
            </form>
        </div>
    </div>
</div>
