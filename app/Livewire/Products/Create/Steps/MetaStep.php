<?php

namespace App\Livewire\Products\Create\Steps;

use Livewire\Attributes\Validate;
use Livewire\Component;
use Spatie\LivewireWizard\Components\StepComponent;

class MetaStep extends StepComponent
{
    #[Validate('required')]
    public string $title;

    #[Validate('required')]
    public string $description;

    public function stepInfo(): array
    {
        return [
            'label' => 'Product information'
        ];
    }

    public function render()
    {
        return view('livewire.products.create.steps.meta-step');
    }
}
