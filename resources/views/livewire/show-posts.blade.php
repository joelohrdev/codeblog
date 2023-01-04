<div class="space-y-5">
    @foreach($posts as $post)
        <div>
            <a class="text-xl" href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
            <p class="text-sm text-gray-400">{{ $post->created_at->format('F d, Y') }}</p>
        </div>
    @endforeach
    {{ $posts->links() }}
</div>
