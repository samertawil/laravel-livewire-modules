@props([
    'route'=>'',
    'label'=>null,
	  'divlclass' => '',
    $text_dir='text-right',
]) 


<div @class([' my-4 ', $divlclass,$text_dir])>
    
    <a href="{{$route}}"  
    {{$attributes->class(['text-decoration-none  ', ])}} >
   
    {{$label ? __("customTrans.$label") : __("customTrans.cancel_back")}}  </a>
</div>

 