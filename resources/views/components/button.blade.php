@props([
    'type' => '',
    'label' => null,
    'divlclass' => '',
    'iclass' => '',
    '$iclassName' => '',
])


<div @class(['my-4 ', $divlclass])>

    <button type="{{ $type }}"
        {{ $attributes->class(['btn btn-md btn-info']) }}>{{ $label ? __("ucModule.$label") :  __("ucModule.save") }}
        @if ($iclass)
            <i class="{{ $iclassName }}"></i>
        @endif
    </button>

</div>

{{-- wire:click.prevent="storeAbility" --}}
