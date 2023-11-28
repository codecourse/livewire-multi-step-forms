<?php

namespace App\Livewire\Things\Create\Steps;

use Livewire\Attributes\Validate;
use Livewire\Component;
use Spatie\LivewireWizard\Components\StepComponent;

class DescriptionStep extends StepComponent
{
    #[Validate('required')]
    public string $description;

    public function submit()
    {
        $this->validate();

        $this->nextStep();
    }

    public function render()
    {
        return view('livewire.things.create.steps.description-step');
    }
}
