<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Light extends Component
{
    public $brightness = 20;
    public $max = 100;

    public function off()
    {
        $this->brightness = 0;
    }

    public function on()
    {
        $this->brightness = 100;
    }

    public function increment()
    {

        $this->brightness = min(100, $this->brightness + 10); //on ne doit pas dépasser 100




    }
    public function decrement()
    {

       // $this->brightness = max(0, $this->brightness -10); //on ne doit pas depasser 0

        if ($this->brightness >= 10) { //on peut derementer
            $this->brightness -= 10;
        }
    }
    public function render()
    {
        return view('livewire.light');
    }
}
