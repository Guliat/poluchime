<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Collection;

class Home extends Component
{
    public Collection $products;

    public function mount()
    {
        $this->products = Product::where('is_active', 1)->where('is_approved', 1)->get();
    }
    

    public function render()
    {
        return view('livewire.home');
    }
}
