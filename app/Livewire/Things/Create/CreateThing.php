<?php

namespace App\Livewire\Things\Create;

use App\Livewire\Things\Create\Steps\DescriptionStep;
use App\Livewire\Things\Create\Steps\PublishStep;
use App\Livewire\Things\Create\Steps\TitleStep;
use Livewire\Component;
use Spatie\LivewireWizard\Components\WizardComponent;

class CreateThing extends WizardComponent
{
    public function steps(): array
    {
        return [
            TitleStep::class,
            DescriptionStep::class,
            PublishStep::class,
        ];
    }
}
