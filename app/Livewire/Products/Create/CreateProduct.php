<?php

namespace App\Livewire\Products\Create;

use App\Livewire\Products\Create\Steps\ImageStep;
use App\Livewire\Products\Create\Steps\MetaStep;
use App\Livewire\Products\Create\Steps\PublishStep;
use Livewire\Component;
use Spatie\LivewireWizard\Components\WizardComponent;

class CreateProduct extends WizardComponent
{
    public function steps(): array
    {
        return [
            MetaStep::class,
            ImageStep::class,
            PublishStep::class,
        ];
    }
}
