<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class ShowModule extends Component
{

    public $module;

    #[On('showMod')]
    public function showMod($module){
        $this->module = $module;
    }

    public function mount(){
        $this->module = '';
    }

    public function render()
    {
        return view('livewire.show-module', ['module'=>$this->module]);
    }
}
