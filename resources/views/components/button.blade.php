@props([
    'type' => '',
    'label' => null,
    'divlclass' => '',
    'iclass' => '',
    '$iclassName' => '',
    'text_dir'='text-right',
	'default_class'=>'btn btn-sm btn-light-primary  '
])


<div @class([' my-4 ', $divlclass,$text_dir])>

    <button type="{{ $type }}"
        {{ $attributes->class( $default_class) }}>{{ $label ? __("customTrans.$label") :  __("customTrans.save") }}
        @if ($iclass)
            <i class="{{ $iclassName }}"></i>
        @endif
    </button>

</div>


{{-- style="width: 100px; height: 38px; font-size:13px;" --}}


 