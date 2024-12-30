<div x-data="{ todo: 'Ciao' }">
    @foreach($todos as $todo)
        TODO: {{ $todo }}
    @endforeach
    <input type="text" x-model="todo">
    <button x-on:click="$wire.addTodo(todo)">Add Todo</button>
</div>