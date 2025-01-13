<div>


    @push('css')
        <link rel="stylesheet" href="{{ asset('template-assets/myTableResponsive.css') }}">
    @endpush

    <x-slot:crumb>
        <x-breadcrumb >

            <li class="breadcrumb-item"><a href="{{ route('citzen.services.index') }}"
                    class="text-muted">{{ __('ucModule.services index') }} </a></li>
            <li class="breadcrumb-item"><a href="{{ route('citzen.services.resouces') }}"
                    class="text-muted">{{ __('ucModule.services resource') }} </a></li>

        </x-breadcrumb>

    </x-slot:crumb>





    <div class="table-responsive  d-none d-sm-block">
        <div id="example2_wrapper " class="dataTables_wrapper dt-bootstrap4 no-footer">
            <table class="table text-md-nowrap dataTable no-footer dtr-inline collapsed sortable" id="example2"
                role="grid" aria-describedby="example2_info">
                <thead>
                    <tr>

                        <x-table-th wire:click="setSortBy('num')" name="num" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }} :labelname="__('ucModule.service num')"></x-table-th>

                        <x-table-th wire:click="setSortBy('name')" name="name" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }} :labelname="__('ucModule.service name')"></x-table-th>

                        <x-table-th wire:click="setSortBy('home_page_order')" name="home_page_order"
                            sortBy={{ $sortBy }} sortdir={{ $sortdir }} :labelname="__('ucModule.order')"></x-table-th>

                        <x-table-th wire:click="setSortBy('active')" name="activation" sortBy={{ $sortBy }}
                            sortdir={{ $sortdir }}></x-table-th>

                        <x-table-th wire:click="setSortBy('active_from_date')" name="active_from_date"
                            sortBy={{ $sortBy }} sortdir={{ $sortdir }}></x-table-th>

                        <x-table-th wire:click="setSortBy('active_to_date')" name="active_to_date"
                            sortBy={{ $sortBy }} sortdir={{ $sortdir }}></x-table-th>


                        <th class="text-center"> <span>{{ __('ucModule.actions') }}</span></th>

                    </tr>

                </thead>
                <tbody>
                    @foreach ($this->services as $key => $service)
                        <tr>
                            <td> {{ $service->num }} </td>

                            @if ($editServicesId === $service->id)
                                <td> <x-input wire:model="name" name="name" placeholder="..."
                                        divWidth="12"></x-input> </td>
                            @else
                                <td>{{ $service->name }}</td>
                            @endif


                            @if ($editServicesId === $service->id)
                                <td> <x-input wire:model="home_page_order" name="home_page_order" placeholder="..."
                                        divWidth="6"></x-input> </td>
                            @else
                                <td>{{ $service->home_page_order }}</td>
                            @endif



                            @if ($editServicesId === $service->id)
                                <td>
                                    <select wire:model="active" class="form-control bg-white">

                                        <option value="1">{{ __('ucModule.active') }}</option>
                                        <option value="0">{{ __('ucModule.not active') }}</option>
                                    </select>
                                </td>
                            @else
                                <td @class([
                                    '',
                                    'text-danger' => $service->active == 0,
                                    'text-success' => $service->active == 1,
                                ])>

                                    <div @class([
                                        'bg-danger dot-label' => $service->active == 0,
                                        'bg-success dot-label' => $service->active == 1,
                                    ])></div>
                                    {{ $service->active == 1 ? __('ucModule.active') : __('ucModule.not active') }}
                                </td>
                            @endif



                            @if ($editServicesId === $service->id)
                                <td> <x-input type='date' wire:model="active_from_date" name="active_from_date"
                                        divWidth="12"></x-input> </td>
                            @else
                                <td>{{ $service->active_from_date }}</td>
                            @endif


                            @if ($editServicesId === $service->id)
                                <td> <x-input type='date' wire:model="active_to_date" name="active_to_date"
                                        divWidth="12"></x-input> </td>
                            @else
                                <td>{{ $service->active_from_date }}</td>
                            @endif




                            <td class="d-flex  justify-content-center">
                                @if (!($editServicesId === $service->id))
                                    <x-actions preview data-target="#Servicepreview{{ $service->id }}"
                                        data-toggle="modal"></x-actions>


                                    <x-modal width='lg' idName="Servicepreview{{ $service->id }}">

                                        {{-- {{ __('ucModule.created_at') }} : {{ myDateStyle1($service->created_at) }}
                                        </br>
                                        <x-actions edit wire:loading.attr='disabled'
                                        wire:click.prevent='edit({{ $service->id }})'></x-actions>
                                        </br>
                                        {{ __('ucModule.note') }} : {{ $service->note }}</br>
                                        </br>
                                        {{ __('ucModule.description') }} : {{ $service->description }}</br>
                                        </br>
                                        {{ __('ucModule.services conditions') }} : {{ $service->conditions }}</br>
                                        </br> --}}

                                        <livewire:CitzenServices.Details :id="$service->id">
                                        </livewire:CitzenServices.Details>

                                    </x-modal>


                                    <x-actions edit wire:loading.attr='disabled'
                                        wire:click.prevent='edit({{ $service->id }})'></x-actions>

                                    <a wire:loading.attr='disabled' class="btn btn-lg text-danger "
                                        wire:confirm.prompt="{{ __('ucModule.please insert num of services for del') }}\n|{{ $service->num }}"
                                        wire:click.prevent='destroy({{ $service->id }})'> <i
                                            class="ti-trash text-danger"></i>
                                    </a>
                                @else
                                    <x-actions make wire:loading.attr='disabled'
                                        wire:click.prevent='update'></x-actions>
                                    <x-actions cancel wire:click.prevent='cancelEdit'></x-actions>
                                @endif




                            </td>

                        </tr>
                    @endforeach
                </tbody>

            </table>
            {{-- {{ $this->services->links() }} --}}
        </div>
    </div>


    <div class="bg-light  d-block d-sm-none " role="region" aria-labelledby="Cap1" tabindex="0">
        <table class=" table hover" id="mytable2">


            <tr>
                <th> {{ __('ucModule.service num') }} </th>
                <th> {{ __('ucModule.service name') }} </th>
                <th> الترتيب </th>
                <th> {{ __('ucModule.activation') }} </th>

                <th> {{ __('ucModule.active_from_date') }} </th>
                <th> {{ __('ucModule.active_to_date') }} </th>

                <th> {{ __('ucModule.url_active_from_date') }}</th>
                <th>{{ __('ucModule.url_active_to_date') }} </th>

                <th>{{ __('ucModule.services Responsible') }}</th>
                <th>{{ __('ucModule.url service') }}</th>
                <th>{{ __('ucModule.route_name') }}</th>
                <th>{{ __('ucModule.description') }}</th>
                <th>{{ __('ucModule.note') }}</th>
                <th>{{ __('ucModule.services conditions') }}</th>
                {{-- <th>{{ __('ucModule.actions') }}</th> --}}


            </tr>



            @foreach ($this->services as $key => $service)
                <tr>

                    <td> {{ $service->num }} </td>


                    @if ($editServicesId === $service->id)
                        <td>
                            <input wire:model='name' name='name' placeholder="..." class="form-control bg-white">
                        </td>
                    @else
                        <td>{{ $service->name }}</td>
                    @endif


                    @if ($editServicesId === $service->id)
                        <td>
                            <input wire:model='home_page_order' name='home_page_order' placeholder="..."
                                class="form-control bg-white">
                        </td>
                    @else
                        <td>{{ $service->home_page_order }}</td>
                    @endif



                    @if ($editServicesId === $service->id)
                        <td>
                            <select wire:model="active" class="form-control bg-white " style="width: 150px;">

                                <option value="1">{{ __('ucModule.active') }}</option>
                                <option value="0">{{ __('ucModule.not active') }}</option>
                            </select>
                        </td>
                    @else
                        <td @class([
                            '',
                            'text-danger' => $service->active == 0,
                            'text-success' => $service->active == 1,
                        ])>

                            {{ $service->active == 1 ? __('ucModule.active') : __('ucModule.not active') }}



                        </td>
                    @endif


                    @if ($editServicesId === $service->id)
                        <td> <x-input type='date' wire:model="active_from_date" name="active_from_date"
                                divWidth="12"></x-input> </td>
                    @else
                        <td>{{ myDateStyle1($service->active_from_date) }}</td>
                    @endif


                    @if ($editServicesId === $service->id)
                        <td> <x-input type='date' wire:model="active_to_date" name="active_to_date"
                                divWidth="12"></x-input> </td>
                    @else
                        <td>{{ myDateStyle1($service->active_to_date) }}</td>
                    @endif

                    @if ($editServicesId === $service->id)
                        <td> <x-input type='date' wire:model="url_active_from_date" name="url_active_from_date"
                                divWidth="12"></x-input> </td>
                    @else
                        <td>{{ myDateStyle1($service->url_active_from_date) }}</td>
                    @endif

                    @if ($editServicesId === $service->id)
                        <td> <x-input type='date' wire:model="url_active_to_date" name="url_active_to_date"
                                divWidth="12"></x-input> </td>
                    @else
                        <td>{{ myDateStyle1($service->url_active_to_date) }}</td>
                    @endif


                    @if ($editServicesId === $service->id)
                        <td>
                            <x-input wire:model='Responsible' name='Responsible' divWidth='8'
                                placeholder="..."></x-input>
                        </td>
                    @else
                        <td>{{ $service->Responsible }}</td>
                    @endif




                    @if ($editServicesId === $service->id)
                        <td>

                            <x-input wire:model='url' name='url' divWidth='8'></x-input>
                        </td>
                    @else
                        <td>{{ $service->url }}</td>
                    @endif

                    @if ($editServicesId === $service->id)
                        <td>

                            <x-input wire:model='route_name' name='route_name' divWidth='5'></x-input>
                        </td>
                    @else
                        <td>{{ $service->route_name }}</td>
                    @endif


                    @if ($editServicesId === $service->id)
                        <td>
                            <x-textarea wire:model='description' name='description' divWidth='6'
                                rows='4'></x-textarea>
                        </td>
                    @else
                        <td>{{ $service->description }}</td>
                    @endif

                    @if ($editServicesId === $service->id)
                        <td>

                            <x-textarea wire:model='note' name='note' :labelname="__('ucModule.note')" divWidth='6'
                                rows='4'></x-textarea>
                        </td>
                    @else
                        <td>{{ $service->note }}</td>
                    @endif


                    @if ($editServicesId === $service->id)
                        <td>
                            <div class="card card-custom">
                                <div class="card-header">
                                    <div class="card-title">

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

                        </td>
                    @else
                        <td>{{ $service->conditions }}</td>
                    @endif



                    <td class=" d-flex  justify-content-center">

                        @if (!($editServicesId === $service->id))
                            <x-actions edit wire:loading.attr='disabled'
                                wire:click.prevent='edit({{ $service->id }})'></x-actions>

                            <a wire:loading.attr='disabled' class="btn btn-lg text-danger "
                                wire:confirm.prompt="{{ __('ucModule.please insert num of services for del') }}\n|{{ $service->num }}"
                                wire:click.prevent='destroy({{ $service->id }})'> <i
                                    class="ti-trash text-danger"></i>
                            </a>
                        @else
                            <x-actions make wire:loading.attr='disabled' wire:click.prevent='update'></x-actions>
                            <x-actions cancel wire:click.prevent='cancelEdit'></x-actions>
                        @endif






                    </td>






                </tr>
            @endforeach


        </table>

    </div>



    @push('js')
        <script src="{{ asset('template-assets/myTableResponsive.js') }}"></script>
    @endpush

</div>
