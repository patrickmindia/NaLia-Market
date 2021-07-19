<?php

namespace App\Http\Livewire\Articles;

use App\Models\Product;
use Livewire\Component;

class Latest extends Component
{
    public function render()
    {
        return view('livewire.articles.latest', ['articles' => Product::take(4)->orderBy('created_at')->get()]);
    }
}
