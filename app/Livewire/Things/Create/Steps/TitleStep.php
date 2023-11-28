<?php

namespace App\Livewire\Things\Create\Steps;

use Livewire\Component;
use Spatie\LivewireWizard\Components\StepComponent;

class TitleStep extends StepComponent
{
    public string $title;

    public function render()
    {
        return view('livewire.things.create.steps.title-step');
    }
}
