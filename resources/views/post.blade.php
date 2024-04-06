<x-layout>
<article>

    <h1> {{ $post->title }}</h1>


    <p>
       <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }} </a>
    </p>

    <div>
       <p> {{ $post->body }}</p> 
    </div>
    
</article>

<p>
     <a href="/">Go Back</a>
</p>

</x-layout>