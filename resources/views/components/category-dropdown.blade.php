<x-dropdown>
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
            <x-icon name="down-arrow" class="absolute pointer-events-none"/>
        </button>
    </x-slot>
    
    <x-dropdown-item href="/?{{ http_build_query(request()->except('category', 'page')) }}" 
           :active="url()->full() == url()->current()">All
    </x-dropdown-item>
    
    @foreach ($categories as $category)
        @php
          $check = request('category') == $category->slug ? true : false;
          // dd(request()->is('/'))
        @endphp
        <x-dropdown-item 
            href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}"
            :active='$check'
        >
            {{ ucwords($category->name) }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>
