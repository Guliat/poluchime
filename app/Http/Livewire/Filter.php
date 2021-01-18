<?php

namespace App\Http\Livewire;

use App\Models\Option;
use Livewire\Component;
use App\Models\Category;
use App\Models\Subcategory;

class Filter extends Component
{
    public $categories;
    public $subcategories;
    public $sizes;

    public function mount()
    {
        $this->categories = Category::where('is_active', 1)->get();
        $this->subcategories = Subcategory::where('is_active', 1)->get();
        $this->sizes = Option::get();

    }

    public function render()
    {
        return view('livewire.filter');
    }
}
