<?php

namespace App\Livewire;

use Livewire\Component;

class Row extends Component
{
    public string $title;

    public function render()
    {
        return view('livewire.row');
    }
}
