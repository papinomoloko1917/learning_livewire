<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostForm extends Component
{
    public $title = '';

    public $body = '';

    public $submit = 'Отправить';

    public $clear = 'Очистить';

    public $titles = ['News', 'Scince', 'Auto'];

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        if ($this->title === 'Admin') {
            $this->addError('title', 'This title is reserved');

            return;
        }

        Post::create([
            'title' => $this->title,
            'body' => $this->body,
        ]);

        $this->reset();
    }

    public function clear()
    {
        $this->reset();
        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.post-form');
    }
}
