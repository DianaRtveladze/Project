@foreach ($posts as $post)
    <h3>{{ $post->title }}</h3>
    <p>{{ $post->content }}</p>
    <a href="{{ route('posts.show', $post) }}">Read more</a>
@endforeach