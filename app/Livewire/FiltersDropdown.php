<?php

namespace App\Livewire;

use App\Models\Course;
use Livewire\Component;

class FiltersDropdown extends Component
{

    public $name, $list;

    public function mount($name, $list)
    {
        $this->name = $name;
        $this->list = $list;
    }

    public function render()
    {
        return view('livewire.components.filters-dropdown');
    }
}
