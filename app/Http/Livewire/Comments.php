<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;

class Comments extends Component
{
    public $comments;

    public $newComment;

    public function addComment()
    {
        Comment::create([
            'user_id' => 1,
            'body' => $this->newComment
        ]);

        $this->mount();
    }

    public function mount()
    {
        $this->comments = Comment::latest()->get();
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
