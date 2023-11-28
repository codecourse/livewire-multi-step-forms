<?php

namespace App\Livewire\Products\Create\Steps;

use Livewire\Component;
use Spatie\LivewireWizard\Components\StepComponent;

class ImageStep extends StepComponent
{
    public function stepInfo(): array
    {
        return [
            'label' => 'Product image'
        ];
    }

    public function render()
    {
        return view('livewire.products.create.steps.image-step');
    }
}
