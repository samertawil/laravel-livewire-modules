<?php

namespace App\Livewire\StatusModule;


use Livewire\Component;
use App\Models\SettingSystem;
use App\Traits\FlashMsgTraits;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;


class SystemClass extends Component
{
 
    public $description;

    #[Validate(['required','unique:setting_systems,system_name'])]
    public $system_name;


    public function systemStore()
    {

        $this->validate();

        SettingSystem::create([
            'system_name' => $this->system_name,
            'description' => $this->description,
        ]);


        FlashMsgTraits::created(); 
        $this->reset();
    }

    #[Computed()]
    public static function systems_data() {
        return SettingSystem::orderBy('created_at','desc')->get();
    }

    public function render()
    {
     
        return view('livewire.status.system');
    }



    
}


