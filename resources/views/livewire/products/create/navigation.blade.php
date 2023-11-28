<div class="flex items-center justify-around text-sm">
    @foreach ($steps as $index => $step)
        <button
            @class(['p-4 uppercase tracking-wide font-semibold text-gray-500', 'text-gray-900' => $step->isCurrent()])
            wire:click="{{ $step->show() }}"
        >
            {{ $index + 1 }}. {{ $step->label }}
        </button>
    @endforeach
</div>
