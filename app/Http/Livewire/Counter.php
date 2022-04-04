<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $name = "Abdullah";
    public $loud = false;
    public $greeting = "Hello";
    public function increment()
    {
        $this->count++;
    }
    public function render()
    {
        return view('livewire.counter');
    }
    public function resetName()
    {
        $this->name = "Ali";
    }
}
