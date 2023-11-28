<div>
    <form class="space-y-6">
        <div>
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>

        <x-primary-button>
            {{ __('Next step') }}
        </x-primary-button>
    </form>
</div>
