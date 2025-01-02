<div>
    @foreach($todos as $todo)
        TODO: {{ $todo }}
    @endforeach
    <input type="text" wire:model="todo">
    <button wire:click="addTodo">Add Todo</button>
    <button x-on:click="$wire.set('todo', '')">Reset</button>
</div>