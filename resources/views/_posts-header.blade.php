<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>


    <div class="flex items-center mt-4">
        <!-- Categories Button -->
        <div class="relative lg:inline-flex items-center bg-gray-100 rounded-xl">
           <x-dropdown>

           <x-slot name="trigger">
              <button 
              class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
             {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
         <x-icon name="down-arrow" class="absolute pointer-events-none"/>
    </button>
           </x-slot>
             <x-dropdown-item href="/" :active="request()->routeIs('home')">All</x-dropdown-item>
             
        @foreach ($categories as $category)
          <x-dropdown-item href="/categories/{{ $category->slug }}"
          :active='request()->is("categories/{$category->slug}")'
          >{{ ucwords($category->name) }}</x-dropdown-item>
          <!-- {{ isset($currentCategory) && $currentCategory->is($category) ? 'bg-blue-500 text-white' : '' }}" -->
        @endforeach
           </x-dropdown>
        </div>

        <!-- Other Filters -->
        <!-- <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl ml-4">
            <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                <option value="category" disabled selected>Other Filters</option>
                <option value="foo">Foo</option>
                <option value="bar">Bar</option>
            </select>
        </div> -->

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl ml-4">
            <form method="GET" action="#" class="flex">
                <input type="text" name="search" placeholder="Find something" class="flex-1 bg-transparent placeholder-black font-semibold text-sm py-2 pl-3 pr-9">
            </form>
        </div>
    </div>
</header>
