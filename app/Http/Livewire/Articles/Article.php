<?php

namespace App\Http\Livewire\Articles;

use App\Models\Product;
use Livewire\Component;

class Article extends Component
{
    public $article;

    public function mount($id)
    {
        $this->post = Product::find($id);
    }

    public function render()
    {
        return view('livewire.articles.article');
    }
}
