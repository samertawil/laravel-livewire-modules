@props([
    'route'=>'',
    'label'=>null,
	  'divlclass' => '',
    $text_dir='text-right',
]) 


<div @class([' my-4 ', $divlclass,$text_dir])>
    
    <a href="{{$route}}"  
    {{$attributes->class(['text-decoration-none  ', ])}} >
   
    {{$label ? __("ucModule.$label") : __("ucModule.cancel_back")}}  </a>
</div>

 