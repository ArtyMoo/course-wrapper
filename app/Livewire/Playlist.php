<?php

namespace App\Livewire;

use Livewire\Component;

class Playlist extends Component
{
    public $authorSlug;
    public $courseSlug;
    public $fileCount;

    public function render()
    {
        return view('livewire.playlist');
    }
    public function mount($authorSlug, $courseSlug, $fileCount)
    {
        $this->authorSlug = $authorSlug;
        $this->courseSlug = $courseSlug;
        $this->fileCount = $fileCount;
    }
}
