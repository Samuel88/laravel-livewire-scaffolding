<div x-data="{ test: 'ciao' }">
    <h1 x-text="test"></h1>
    <button wire:click="increment">+</button>
    <button wire:click="decrement">-</button>
    <h1>{{ $count }}</h1>
</div>
