<?php

namespace App\Livewire;

use Livewire\Component;

class Todo extends Component
{
    public array $todos = [];
    public function addTodo($todo) {
        $this->todos[] = $todo;
        $this->js('console.log("Ciao")');
        return true;
    }

    public function render()
    {
        return view('livewire.todo');
    }
}
