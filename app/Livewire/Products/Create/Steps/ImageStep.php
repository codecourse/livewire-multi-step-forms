<?php

namespace App\Livewire\Products\Create\Steps;

use Livewire\Attributes\Computed;
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

    #[Computed()]
    public function product()
    {
        return $this->state()->product();
    }

    #[Computed()]
    public function imagePreview()
    {
        if ($this->product->image_path) {
            return $this->product->image_path;
        }

        return $this->image?->temporaryUrl();
    }

    public function submit()
    {
        if ($this->product->image_path) {
            $this->nextStep();
            return;
        }

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
