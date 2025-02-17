@props([
    'type' => '',
    'label' => null,
    'divlclass' => '',
    'iclass' => '',
    '$iclassName' => '',
    $text_dir='text-right',
])


<div @class([' my-4 ', $divlclass,$text_dir])>

    <button type="{{ $type }}"
        {{ $attributes->class(['btn btn-md btn-info']) }}>{{ $label ? __("customTrans.$label") :  __("customTrans.save") }}
        @if ($iclass)
            <i class="{{ $iclassName }}"></i>
        @endif
    </button>

</div>


{{-- style="width: 100px; height: 38px; font-size:13px;" --}}