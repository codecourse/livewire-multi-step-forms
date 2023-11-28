<?php

namespace App\Livewire\Products\Create;

use App\Livewire\Products\Create\Steps\ImageStep;
use App\Livewire\Products\Create\Steps\MetaStep;
use App\Livewire\Products\Create\Steps\PublishStep;
use App\Support\State\ProductState;
use Livewire\Component;
use Spatie\LivewireWizard\Components\WizardComponent;

class CreateProduct extends WizardComponent
{
    public function stateClass(): string
    {
        return ProductState::class;
    }

    public function steps(): array
    {
        return [
            MetaStep::class,
            ImageStep::class,
            PublishStep::class,
        ];
    }
}
