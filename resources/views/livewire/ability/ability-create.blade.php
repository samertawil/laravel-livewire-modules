<div>


    <form wire:submit='storeAbility'>
        <div class="row">


            <x-input type="text" name="ability_name" dir="ltr" autofocus label='yes' req
                description_field="ex: ModelName.functionName" wire:model="ability_name"></x-input>

            <x-input type="text" name="ability_description" label='yes' req :description_field="__('customTrans.ex_ability_desc')"
                wire:model="ability_description"></x-input>


            <x-input type="text" name="url" wire:model="url" label='yes' dir="ltr"></x-input>

            <div class="mx-5">
                <x-radio type="radio" name="activation" label="yes" req value1="1" value2="0" divWidth=12
                    wire:model="activation" :value_title1="__('customTrans.active')" :value_title2="__('customTrans.not active')"></x-radio>
            </div>

            <x-select name="module_id" label='yes' wire:model="module_id" :options="$this->moduleNames->pluck('name', 'id')" />

            <x-textarea type="text" name="description" label="yes" cols="20" rows="2" divWidth=6
                wire:model="description"></x-textarea>


        </div>


    
        <x-slot:ModalButton>
            <x-button></x-button>
        </x-slot:ModalButton>


    </form>
    <div class="text-center">
        <p> {{ __('customTrans.add new module') }} <span><a href="{{ route('ability.module.index') }}"
                    target="_blank">{{ __('customTrans.here') }} </a> </span></p>
    </div>

    {{-- @livewire('ability.ability-index',['lazy'=>'true']) --}}

</div>
