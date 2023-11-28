@props([
    'back' => null
])

<div class="flex items-center justify-between pt-6 border-t mt-6">
    <div>
        {{ $back }}
    </div>
    <div>
        {{ $slot }}
    </div>
</div>
