<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminModal extends Component
{
    public $count = 0;

    public function increment(){
        $this->count++;
    }

    public function render()
    {
        return view('livewire.admin-modal');
    }
}
