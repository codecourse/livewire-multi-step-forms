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

    public function submit()
    {
        // look the product up
        // update

        dd($this->state()->product());
    }

    public function render()
    {
        return view('livewire.products.create.steps.image-step');
    }
}
