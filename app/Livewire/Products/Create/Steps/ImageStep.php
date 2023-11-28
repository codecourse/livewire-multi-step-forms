<?php

namespace App\Livewire\Products\Create\Steps;

use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Spatie\LivewireWizard\Components\StepComponent;

class ImageStep extends StepComponent
{
    use WithFileUploads;

    #[Validate('required|image|max:1024')]
    public $image;

    public function stepInfo(): array
    {
        return [
            'label' => 'Product image'
        ];
    }

    public function submit()
    {
        $this->validate();

        $this->state()->product()->update([
            'image_path' => $this->image->storePubliclyAs('images', str()->uuid(), 'public')
        ]);

        $this->nextStep();
    }

    public function render()
    {
        return view('livewire.products.create.steps.image-step');
    }
}
