@props([
    'route'=>'',
    'label'=>null,
]) 

<div class="text-end">
    <a href="{{$route}}"  
    {{$attributes->class(['text-decoration-none text-end ', ])}} >
   
    {{$label ? __("ucModule.$label") : __("ucModule.cancel_back")}}  </a>
</div>

 