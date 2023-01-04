<div class="space-y-5">
    <h1 class="font-bold text-2xl">{{ $post->title }}</h1>
    <x-markdown theme="material-ocean" class="prose">
        {!! $post->body !!}
    </x-markdown>
</div>
