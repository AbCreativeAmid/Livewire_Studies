<div>
    <h1>Hello World!</h1>
    <input type="text" wire:model.lazy="name">
    <select wire:model="greeting">
        <option>Hello</option>
        <option>Salam</option>
        <option>Namaste</option>
    </select>
    <div style="text-align: center">
        <button wire:click="increment">+</button>
        <h1>{{$count++}}</h1>
        <input type="checkbox" wire:model="loud">
        <h1> {{$greeting}} {{$name}} @if($loud) ! @endif</h1>
    </div>
</div>
