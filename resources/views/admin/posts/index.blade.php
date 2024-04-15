<x-layout>
    <x-setting heading="Manage Post">
        <!-- component -->
        <div class="overflow-x-auto rounded-lg border border-gray-200 shadow-md m-5">
            <table class="w-full table-auto border-collapse bg-white text-left text-sm text-gray-500">
                <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                    @foreach($posts as $post)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div class="flex items-center">


                                <div class="font-medium text-gray-900">

                                    <a href="/posts/{{ $post->slug }}">
                                        {{ $post->title }}
                                    </a>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                                <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                                Publised
                            </span>
                        </td>

                        <td class="px-6 py-4">
                            <a href="/admin/posts/{{ $post->id }}/edit" class="text-blue-500 hover:text-blue-900">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-setting>
</x-layout>