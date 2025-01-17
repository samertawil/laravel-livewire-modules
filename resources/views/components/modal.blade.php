<div>

    @props([
        'idName' => '',
        'title' => '',
        'width' => 'lg',
        'modalType' => null,
    ])


    <div wire:ignore.self class="modal fade" id="{{ $idName }}">
        <div class="modal-dialog modal-{{ $width }} {{ $modalType }} " role="document">
            <div class="modal-content modal-content-demo  ">
                <div class="modal-header">
                    <h6 class="modal-title text-dark">{{ $title }}</h6>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">x</button>
                </div>

                <div class="modal-body">
                    {{ $slot }}
                </div>

                <div class="modal-footer">
                    <button class="btn ripple btn-secondary" data-dismiss="modal"
                        type="button">{{ __('ucModule.close') }}</button>
                    {{ $ModalButton ?? '' }}
                      
                </div>
            </div>
        </div>
    </div>


    @push('js')
        <script>
            var modalId = $('.modal').attr('id');

            window.addEventListener('closeModel', event => {
                $(`#${modalId}`).modal('hide');
            })
        </script>
    @endpush

</div>



{{-- example

    <x-button class="mx-2"   data-target="#PropartiesModal" data-toggle="modal" label="add more proparty">
    </x-button>

<x-modal idName="PropartiesModal" :title="__('ucModule.add more proparty')">
    <livewire:AttributesList></livewire:AttributesList>
<x-slot:ModalButton>

<div class="d-flex justify-content-center">
 <x-tag-a :route="route('att')" :name="__('ucModule.sign in')"     default_class="btn btn-light-primary"
        style="width: 100px; height: 38px; font-size:13px;"></x-tag-a>
</div>
</x-slot:ModalButton>

 --}}
