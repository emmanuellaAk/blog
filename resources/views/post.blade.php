<x-layout>
<article>

    <h1> {{ $post->title }}</h1>


    <p>
       By <a href="#">{{ $post->user->name}}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }} </a>
    </p>

    <div>
       <p> {{ $post->body }}</p> 
    </div>
    
</article>

<p>
     <a href="/">Go Back</a>
</p>

</x-layout>