<div class="max-w-2xl mx-auto">
    @foreach($posts as $post)
        <article>
            <h1 class="font-bold"><a href="#">{{ $post->title }}</a></h1>
            <p class="text-sm text-gray-400">{{ $post->created_at->format('F d, Y') }}</p>
        </article>
    @endforeach
</div>
