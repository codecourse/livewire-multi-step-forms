<?php

namespace App\Support\State;

use App\Models\Product;
use Spatie\LivewireWizard\Support\State;

class ProductState extends State
{
    public function hasProduct()
    {
        return filled($this->forStep('products.create.steps.meta-step')['productId']);
    }

    public function product()
    {
        return Product::findOrFail(
            $this->forStep('products.create.steps.meta-step')['productId']
        );
    }
}
