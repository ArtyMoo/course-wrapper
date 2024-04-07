<?php

namespace App\Livewire;

use App\Models\Author;
use App\Models\Category;
use App\Models\Course;
use Livewire\Component;

class Filters extends Component
{
    public function render()
    {
        return view('livewire.filters', [
/*            'authors' => Course::with('author')->get(),
            'categories' => Course::with('category')->get()*/
            'authors' => Author::All(),
            'categories' => Category::All()
        ]);
    }
}
