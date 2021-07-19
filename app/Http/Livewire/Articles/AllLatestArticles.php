<?php

namespace App\Http\Livewire\Articles;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class AllLatestArticles extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.articles.all-latest-articles', ['articles' => Product::take(40)->paginate(16)]);
    }
}
