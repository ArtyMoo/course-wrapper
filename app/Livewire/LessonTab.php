<?php

namespace App\Livewire;

use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class LessonTab extends Component
{
    public $authorSlug, $courseSlug, $i;

    public function render()
    {
        return view('livewire.course-page.lesson-tab');
    }

    public function mount($authorSlug, $courseSlug, $i)
    {
        $this->authorSlug = $authorSlug;
        $this->courseSlug = $courseSlug;
        $this->i = $i;
    }

/*    public function tabClick()
    {
        $this->selectedTab = $this->i;
        $this->redirect('tabClicked', $this->i);

        $this->dispatch('updateUrl', [
            'url' => "/courses/{$this->authorSlug}/{$this->courseSlug}/?video={$this->i}",
        ]);
    }*/
}
