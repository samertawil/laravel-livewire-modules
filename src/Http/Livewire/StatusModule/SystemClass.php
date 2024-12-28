<?php

namespace App\Livewire\StatusModule;


use Livewire\Component;
use App\Models\SettingSystem;
use App\Traits\FlashMsgTraits;
use Livewire\Attributes\Validate;
use App\Http\Requests\SystemNamesRequest;


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

    public function render()
    {
       $systems_data = SettingSystem::orderBy('created_at','desc')->get();
        
        return view('livewire.status.system',compact('systems_data'));
    }



    
}


