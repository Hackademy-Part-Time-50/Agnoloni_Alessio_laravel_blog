<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;

class SearchArticles extends Component
{
    public $search;

    public function render()
    {
        return view('livewire.search-articles',[
            'articles' => Article::search($this->search),
        ]);
    }
}
