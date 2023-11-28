<?php

namespace App\Livewire\Products\Create\Steps;

use Livewire\Component;
use Spatie\LivewireWizard\Components\StepComponent;

class MetaStep extends StepComponent
{
    public function render()
    {
        return view('livewire.products.create.steps.meta-step');
    }
}
