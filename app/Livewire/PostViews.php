<?php

namespace App\Livewire;

use Livewire\Component;

class PostViews extends Component
{
    public $views = 0;

    public function inc(int $step)
    {
        $this->views += $step;
    }

    public function render()
    {
        return view('livewire.post-views');
    }
}
