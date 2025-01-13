<div>
    <div class="d-flex  justify-content-end">
        @if ($goEdit == 0)
            <x-actions edit wire:loading.attr='disabled' wire:click.prevent='edit'></x-actions>
        @else
            <x-actions make wire:loading.attr='disabled' wire:click.prevent='update'></x-actions>
            <x-actions cancel wire:loading.attr='disabled' wire:click.prevent='cancelEdit'></x-actions>
        @endif
    </div>

    @if ($goEdit == 0)
        <div>

            <span style="  font-weight: bold;">{{ __('ucModule.services Responsible') }}</span> : {{ $Responsible }} <br>
            <br>
            <span style="  font-weight: bold;">{{ __('ucModule.url_active_from_date') }}</span> : {{ $url_active_from_date }}
            <br> <br>
            <span style="  font-weight: bold;">{{ __('ucModule.url_active_to_date') }}</span> : {{ $url_active_to_date }}
            <br>
            <br>
            <span style="  font-weight: bold;">{{ __('ucModule.url') }} </span>: {{ $url }} <br> <br>
            <span style="  font-weight: bold;"> {{ __('ucModule.route_name') }}</span> : {{ $route_name }} <br> <br>
            <span style="  font-weight: bold;">{{ __('ucModule.description') }}</span> : {{ $description }} <br> <br>
            <span style="  font-weight: bold;">{{ __('ucModule.note') }}</span> : {{ $note }} <br> <br>
            <span style="  font-weight: bold;">{{ __('ucModule.services conditions') }}</span> : {{ $conditions }} <br>
            <br>

        </div>
    @endif

    @if ($goEdit == 1)
        <div>

            <div class="row">

                <x-input wire:model='Responsible' name='Responsible' :labelname="__('ucModule.services Responsible')" label divWidth='6'></x-input>

            </div>

            <div class="row">

                <x-input type='date' wire:model='url_active_from_date' name='url_active_from_date' label
                    divWidth='6'></x-input>

                <x-input type='date' wire:model='url_active_to_date' name='url_active_to_date' label
                    divWidth='6'></x-input>


            </div>

            <div class="row">

                <x-input wire:model='url' name='url' label :labelname="__('ucModule.url service')" divWidth='6'></x-input>

                <x-input wire:model='route_name' name='route_name' label divWidth='6'></x-input>

            </div>



            <div class="row">

                <x-textarea wire:model='description' name='description' label divWidth='6'
                    rows='4'></x-textarea>

                <x-textarea wire:model='note' name='note' label :labelname="__('ucModule.note')" divWidth='6'
                    rows='4'></x-textarea>

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
                        <label class="col-form-label text-right col-lg-3 col-sm-12">Default Demo</label>
                        <div class="col-lg-6 col-md-9 col-sm-12">
                            <textarea wire:model='conditions' name="conditions" class="form-control" data-provide="markdown" rows="10"></textarea>
                        </div>
                    </div>

                </div>


            </div>


        </div>
    @endif



</div>
