<?php

namespace App\Livewire\Products\Create\Steps;

use Livewire\Component;
use Spatie\LivewireWizard\Components\StepComponent;

class PublishStep extends StepComponent
{
    public function stepInfo(): array
    {
        return [
            'label' => 'Review and publish'
        ];
    }

    public function render()
    {
        return view('livewire.products.create.steps.publish-step');
    }
}
