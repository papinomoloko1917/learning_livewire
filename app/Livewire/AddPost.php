<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddPost extends Component
{
    use WithFileUploads;

    public $title = '';

    public $photo;

    public $path = '';

    public function store()
    {
        $this->validate(['photo' => 'max:1024|image']);

        $this->path = $this->photo->store(path: 'photos');

        Post::create([
            'title' => $this->title,
        ]);

    }

    public function export()
    {
        return response()->download(storage_path('app/reports/report.txt'));
    }

    public function render()
    {
        return view('livewire.add-post');
    }
}
