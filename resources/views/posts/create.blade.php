<x-layout>
    <section class="px-6 py-8">
        <div class="border border-gray-200 p-6 rounded-xl max-w-sm mx-auto">

            <form method="POST" action="/admin/posts">
                @csrf

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">
                        Title
                    </label>

                    <input class="border border-gray-400 p-2 w-full" type="text" name="title" id="title" value="{{ old('title') }}" required>

                    @error('title')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="slug">
                        Slug
                    </label>

                    <input class="border border-gray-400 p-2 w-full" type="text" name="slug" id="slug" value="{{ old('slug') }}" required>

                    @error('slug')
                    <p class=" text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="excerpt">
                        Excerpt
                    </label>

                    <textarea class="border border-gray-400 p-2 w-full" type="text" name="excerpt" id="excerpt" required>{{ old('body') }}</textarea>

                    @error('excerpt')
                    <p class=" text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="body">
                        Body
                    </label>

                    <textarea class="border border-gray-400 p-2 w-full" type="text" name="body" id="body" required> {{ old('body') }}</textarea>

                    @error('body')
                    <p class=" text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="category">
                        Category
                    </label>
                    <select name="category_id" id="category_id">

                        @foreach ( \App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}">{{ ucwords($category->name) }}</option>
                        @endforeach
                    </select>
                    @error('category')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">Publish</button>

        </div>
        </form>
    </section>
</x-layout>