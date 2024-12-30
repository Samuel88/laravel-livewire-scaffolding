<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class CreatePosts extends Component
{
    public string $title;
    public string $content;

    public function save() {
        return redirect()
            ->to('/')
            ->with('status', 'Post Created');
    }

    public function render()
    {
        return view('livewire.posts.create-posts');
    }
}
