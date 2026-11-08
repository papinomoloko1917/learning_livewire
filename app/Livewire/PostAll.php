<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostAll extends Component
{
    public $posts;

    public function render()
    {

        $this->posts = Post::all();

        return view('livewire.post-all');
    }
}
