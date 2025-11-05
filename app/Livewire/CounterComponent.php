<?php

namespace App\Livewire;

use Livewire\Component;

class CounterComponent extends Component
{
    //Variable para almacenar el numero
    public $count = 0;
    public function render()
    {
        return view('livewire.counter-component');
    }

    //Funciones que sumen y resten
    public function increment() {
        $this->count++;
    }

    public function decrement() {
        $this->count--;
    }

}
