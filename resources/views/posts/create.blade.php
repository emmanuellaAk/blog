<x-layout>
    <section class="max-w-md mx-auto py-8">

        <h1 class="text-lg font-bold mb-4">
            Publish New Post
        </h1>
        <div class="border border-gray-200 p-6 rounded-xl">

            <form method="POST" action="/admin/posts" enctype="multipart/form-data">
                @csrf

                <x-form.input name="title" />
                <x-form.input name="slug" />
                <x-form.input name="thumbnail" type="file" />
                <x-form.textarea name="excerpt" />
                <x-form.textarea name="body" />

                <div class="mb-6">
                    <x-form.lable name="category"/>
                    <select name="category_id" id="category_id">

                        @foreach ( \App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}">{{ ucwords($category->name) }}</option>
                        @endforeach
                    </select>
                   <x-form.error name="category"/>
                </div>

                <button type="submit" class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">Publish</button>

        </div>
        </form>
    </section>
</x-layout>