 @auth
 <form method="POST" action="/posts/{{ $post->slug }}/comments" class="border border-gray-200 p-6 rounded-xl">
     @csrf

     <header class="flex items-center">
         <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="40" height="40" class="rounded-full">

         <h2 class="ml-4">Want to participate</h2>
     </header>
     <div class="mt-6">
         <textarea name="body" class="w-full text-sm focus:outline-none focus:ring" rows="5" placeholder="Quick, think of something to say!" required></textarea>

         @error('body')
         <span class="text-xs text-red-500">{{ $message }}</span>
         @enderror
     </div>

     <div class="flex justify-end mt-6 border-t border-gray-200 pt-6">
         <button type="submit" class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">Post</button>
     </div>
 </form>

 @else
 <p class="semi-bold">
     <a href="/register" class="hover:underline">Register</a> or <a href="/login" class="hover:underline">Log in </a> to leave a comment.
 </p>
 @endauth