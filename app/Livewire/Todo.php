<?php

namespace App\Livewire;

use Livewire\Component;

class Todo extends Component
{
    public array $todos = [];
    public string $todo = '';

    public function addTodo() {
        $this->todos[] = $this->pull('todo');

        //$this->js(expression: 'console.log("Ciao")');
        return true;
    }

    public function render()
    {
        return view('livewire.todo');
    }
}
