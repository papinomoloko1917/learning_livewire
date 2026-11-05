<?php

namespace App\Livewire;

use Livewire\Component;

class Button extends Component
{
    public string $action;

    public function render()
    {
        return view('livewire.button');
    }
}
