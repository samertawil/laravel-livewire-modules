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
        {{ $attributes->class(['btn btn-md btn-info']) }}>{{ $label ? __("ucModule.$label") :  __("ucModule.save") }}
        @if ($iclass)
            <i class="{{ $iclassName }}"></i>
        @endif
    </button>

</div>