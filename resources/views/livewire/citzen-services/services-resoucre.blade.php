<div>

    <x-slot:crumb>
        <x-breadcrumb  >
          
            <li class="breadcrumb-item"><a href="{{route('citzen.services.index')}}" class="text-muted">{{__('ucModule.services index')}} </a></li>
            <li class="breadcrumb-item"><a href="{{route('citzen.services.resouces')}}" class="text-muted">{{__('ucModule.services resource')}} </a></li>
           
        </x-breadcrumb>

    </x-slot:crumb>

    
    <div class="row">

        <div class="col-6">
            <x-input type='number' min='1' wire:model='num' name='num' label :labelname="__('ucModule.service num')"
                divWidth='8'></x-input>

            <x-input wire:model='name' name='name' label :labelname="__('ucModule.service name')" divWidth='8'></x-input>

            <x-input wire:model='url' name='url' label divWidth='8'></x-input>

            <x-input wire:model='status_id' name='status_id' label divWidth='8'></x-input>

            <x-input wire:model='Responsible' name='Responsible' :labelname="__('ucModule.services Responsible')" label divWidth='8'></x-input>
        </div>

        <div class="col-6">

            <x-input type='date' wire:model='url_active_from_date' name='url_active_from_date' label
                divWidth='8'></x-input>

            <x-input type='date' wire:model='url_active_to_date' name='url_active_to_date' label
                divWidth='8'></x-input>

            <x-input type='date' wire:model='active_from_date' name='active_from_date' label
                divWidth='8'></x-input>

            <x-input type='date' wire:model='active_to_date' name='active_to_date' label divWidth='8'></x-input>

            <div class="d-md-flex">

                <x-radio wire:model='active' name='active' :value1='1' :value2='0'   label
                    :labelname="__('ucModule.activation')" :value_title1="__('ucModule.active')" :value_title2="__('ucModule.not active')" divclass="mt-5"></x-radio>


                <x-input wire:model='route_name' name='route_name' divlclass="mt-4"  label divWidth='5'></x-input>

            </div>

        </div>
    </div>

    <div class="row">
        <x-textarea wire:model='description' name='description' label divWidth='6' rows='4'></x-textarea>

        <x-textarea wire:model='note' name='note' label :labelname="__('ucModule.note')" divWidth='6' rows='4'></x-textarea>
    </div>


    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-title">
                    {{ __('ucModule.services conditions') }}
                </h3>
            </div>
        </div>


        <div class="card-body">
            <div class="form-group row">
                 
                <div class="col-lg-6 col-md-9 col-sm-12">
                    <textarea wire:model='conditions' name="conditions" class="form-control" data-provide="markdown" rows="10"></textarea>
                </div>
            </div>

        </div>


    </div>

    <div class="form-group">
        <label for="card_img">اضافة مرفقات</label>
        <input type="file" name="card_img[]" @class ([
            ' custom-file',
            'form-control',
            'is-invalid' => $errors->has('card_img'),
        ]) accept="image/*" multiple>
        @error('card_img')
            @foreach ($errors->get('card_img') as $error)
                <li class="invalid-feedback">{{ $error }}</li>
            @endforeach
        @enderror
    </div>


    <x-input wire:model='home_page_order' name='home_page_order' label></x-input>

    <div class="text-right ">

        <x-button wire:click.prevent='store'></x-button>
    </div>


</div>
