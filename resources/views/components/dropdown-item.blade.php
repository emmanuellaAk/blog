@props(['active' => false])

@php 
 $classes = 'block py-1 px-4 hover:bg-blue-300 focus:bg-blue-500 hover:text-white focus:text-white';
 
 if ($active) $classes = 'bg-blue-500 text-white';
 @endphp
<a 
    {{ $attributes->merge(['class' => $classes]) }}
>
    {{ $slot }}
</a>
