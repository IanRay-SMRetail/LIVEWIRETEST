<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Module;

class MyLearning extends Component
{
    public $curriculum;
    public $currID;
    public $mods = [];
 

    public function sendToShowModule($module){
        $this->dispatch('showMod', module: $module);
    }

    public function mount()
    {
        $this->updateCurriculum('Core');
    }
    public function updateCurriculum($name)
    {
        $this->curriculum = $name;

        switch ($name) {
            case 'Core':
                $this->currID = 1;
                break;
            case 'Job':
                $this->currID = 2;
                break;
            case 'Leadership':
                $this->currID = 3;
                break;
        }

        if ($this->currID == 1 || $this->currID == 3){
            $this->mods = Module::where('ModuleID', $this->currID)
                                ->where('active', 1)
                                ->get();
        }else{
            //temporary return value change once auth is ready
            $this->mods = Module::where('ModuleID', $this->currID)
                                ->where('active', 1)
                                ->get();
        }
            
    }

    public function render()
    {
        return view('livewire.my-learning', ['mods' => $this->mods]);
    }
}
