<div>
    <x-livewire::products.create.navigation :steps="$steps" />

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            <form class="space-y-6" wire:submit="submit">
                <div class="flex items-center space-x-3">
                    <div>
                        <label for="image" class="h-44 w-44 bg-gray-100 border-2 border-dashed flex items-center justify-center">
                            Choose an image
                        </label>
                        <input type="file" id="image" class="sr-only" wire:model="image">
                    </div>

                    @if($image)
                        <img src="{{ $image->temporaryUrl() }}" class="h-44 w-44" />
                    @endif
                </div>

                <x-primary-button>
                    {{ __('Next step') }}
                </x-primary-button>
            </form>
        </div>
    </div>
</div>
