<div>

    @push('css')
        <style>
            .card {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }

            .text-decoration-line-through {
                text-decoration: line-through;
                color: inherit;
            }
        </style>
    @endpush



    <div class="row   justify-content-between  ">
        @foreach ($this->services as $service)
            <div class="col-md-4 my-3">
                <div class="card custom-card">
                    <img src="{{ asset('pic/media-43.jpg') }}" class="card-img-top" alt="..."
                        style="height: 130px;object-fit:cover ;overflow: hidden;">
                    <div class="card-body py-5">

                        <div class="d-flex ">
                            <span @class([
                                '  card-title mb-1 h5',
                                'text-hover-success' => $service->active == 1,
                                'text-decoration-line-through text-hover-danger' => $service->active == 0,
                            ])>

                                {{ $service->name }}


                            </span>
                            @php
                                $teals = [''];
                            @endphp
                            @if ($service->teal)
                                @php
                                    $teals = explode('//', $service->teal);
                                @endphp
                            @endif
                            <div class="d-flex ">

                                @foreach ($teals as $teal)
                                    <span class="mx-1  btn btn-sm btn-light-primary "
                                        style="font-size: 8px; font-weight: bold; ">{{ $teal }}</span>
                                @endforeach


                                <span class="mx-1  btn btn-sm btn-light-primary"
                                    style="font-size: 8px; font-weight: bold; ">{{ $service->active == 1 ? __('customTrans.active') : __('customTrans.deactivated') }}</span>
                            </div>


                        </div>




                        <div class="card-body py-5 px-1">

                            <p class="card-text">{{ $service->description }}</p>
                        </div>

                        @if ($service->active == 1)
                            <div class="card-footer d-flex justify-content-between py-5" style="border-top: none;">

                                <x-tag-a :route="route($service->route_name)" :name="__('customTrans.sign in')"
                                    default_class="btn btn-light-primary font-weight-bold"></x-tag-a>

                                <x-tag-a data-target="#conditionsModal{{ $service->id }}" data-toggle="modal"
                                    :route="route($service->route_name)" :name="__('customTrans.sign in')"
                                    default_class="btn btn-outline-secondary font-weight-bold"
                                    :name="__('customTrans.conditions')"></x-tag-a>
                            </div>
                        @endif
                        
                        <x-modal idName="conditionsModal{{ $service->id }}" width="md">
                            <div class="d-flex flex-column font-weight-bold  " style="line-height: 22px;">
                                @if ($service->conditions)
                                    <span class="text-danger mb-4"
                                        style="text-decoration: underline; font-weight: bold">{{ __('customTrans.conditions') }}
                                        :</span>


                                    @php
                                        $x = explode('//', $service->conditions);
                                    @endphp
                                    @foreach ($x as $y)
                                        <ul>
                                            <li>{{ $y }}</li>
                                        </ul>
                                    @endforeach
                                @endif

                                @if ($service->note)
                                    <span class="text-primary mb-4"
                                        style="text-decoration: underline; font-weight: bold">
                                        {{ __('customTrans.notes') }}
                                        :</span>
                                    {{ $service->note }}
                                @endif


                                <x-slot:ModalButton>

                                    <div class="d-flex justify-content-center">
                                        <x-tag-a :route="route($service->route_name)" :name="__('customTrans.sign in')"
                                            default_class="btn btn-light-primary"
                                            style="width: 100px; height: 38px; font-size:13px;"></x-tag-a>
                                    </div>
                                </x-slot:ModalButton>


                            </div>
                        </x-modal>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
   

</div>
