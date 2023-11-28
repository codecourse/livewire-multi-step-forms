<?php

namespace App\Livewire\Products\Create\Steps;

use Illuminate\Support\Arr;
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

    public function updatedImage()
    {
        if (is_array($this->image)) {
            $this->image = head(Arr::flatten($this->image));
        }
    }

    #[Computed()]
    public function product()
    {
        return $this->state()->product();
    }

    #[Computed()]
    public function imagePreview()
    {
        if ($this->image) {
            return $this->image?->temporaryUrl();
        }

        return $this->product->image_path;
    }

    public function submit()
    {
        if ($this->product->image_path && !$this->image) {
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
