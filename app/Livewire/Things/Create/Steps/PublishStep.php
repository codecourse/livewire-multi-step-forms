<?php

namespace App\Livewire\Things\Create\Steps;

use Livewire\Component;
use Spatie\LivewireWizard\Components\StepComponent;

class PublishStep extends StepComponent
{
    public function render()
    {
        return view('livewire.things.create.steps.publish-step');
    }
}
