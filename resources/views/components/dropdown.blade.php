@props(['trigger'])
<div x-data="{ show: false }" @click.away="show = false">
    <div @click="show = ! show">
  
    {{ $trigger }}

    </div>


    <div x-show="show" @click.away="show = false" class="absolute mt-2 w-40 bg-gray-100 rounded-xl w-full z-50 overflow-auto max-h-52" style="display: none">
        {{ $slot }}
    </div>
</div>
