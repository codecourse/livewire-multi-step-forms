<div>
    <form class="space-y-6" wire:submit="submit">
        <div>
            <ol>
                <li>Title: {{ $state['title'] }}</li>
                <li>Description: {{ $state['description'] }}</li>
            </ol>
        </div>

        <x-primary-button>
            {{ __('Publish') }}
        </x-primary-button>
    </form>
</div>
