<form action="{{ route('posts.destroy', $post->id) }}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit">Delete Post</button>
</form>
