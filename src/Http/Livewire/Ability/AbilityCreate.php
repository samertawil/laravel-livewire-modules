<?php

namespace App\Livewire\Ability;


use App\Models\Ability;
use Livewire\Component;
use App\Models\ModuleName;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\AbilityRequest;
use App\Services\CacheStatusModelServices;


class AbilityCreate extends Component
{

    #[Validate(['required', 'string', 'unique:abilities,ability_name'])]
    public $ability_name;

    #[Validate(['required', 'string', 'unique:abilities,ability_description'])]
    public $ability_description;

    public $module_id;

    public $url;

    #[Validate(['required', 'in:"0","1"'])]
    public $activation;

    public $description;

    public function storeAbility()
    {

        // if(Gate::denies('ability.create')) {
        //     abort(403,'ليس لديك الصلاحية اللازمة');
        //  }


        Ability::create([
            'ability_name' => $this->ability_name,
            'ability_description' => $this->ability_description,
            'module_id' => $this->module_id,
            'url' => $this->url,
            'activation' => $this->activation,
            'description' => $this->description,
        ]);

        $this->dispatch('closeModel');
        $this->dispatch('Refresh_Ability_Index');


        $this->reset('ability_name', 'ability_description', 'module_id', 'url', 'activation', 'description');
    }

    #[Computed]
    public function ModuleNames() {
        return ModuleName::get();
        
    }

    public function render()
    {


        // $moduleNames=CacheStatusModelServices::getData()->where('p_id_sub',1121);

        $pageTitle = __('ucModule.create ability');

        return view('livewire.ability.ability-create')->title($pageTitle);
    }
}
