<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostUpdate extends Component
{
    public Post $post;

    public string $title;

    public function mount(Post $post)
    {

        $this->post = $post;

        $this->title = $post->title;
    }

    public function update(int $id)
    {
        Post::find($id)->update([
            'title' => $this->title,
        ]);

        return $this->redirectRoute('post.index');
    }

    public function render()
    {
        return view('livewire.post-update');
    }
}
