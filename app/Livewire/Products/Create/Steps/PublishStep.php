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

    public function submit()
    {
        $this->state()->product()->update([
            'published' => true,
        ]);

        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.products.create.steps.publish-step', [
            'product' => $this->state()->product()
        ]);
    }
}
