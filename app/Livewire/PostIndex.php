<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Список постов')]
#[Layout('layouts::app')]

class PostIndex extends Component
{
    use WithPagination;

    public $search = '';

    public bool $show = false;

    public $num1 = 0;

    public $num2 = 0;

    public $sum = 0;

    public function delete(int $id)
    {
        Post::find($id)->delete();
    }

    public function showAll()
    {
        $this->show = ! $this->show;
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    #[Computed]
    public function summation()
    {
        return $this->num1 + $this->num2;
    }

    public function render()
    {
        $posts = Post::where('title', 'like', '%'.$this->search.'%')->orderBy('id')->paginate(10);

        return view('livewire.post-index', compact('posts'));
    }
}
