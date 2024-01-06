

<p>{{ $post->content }}</p>

<h2>Comments</h2>

@forelse ($post->comments as $comment)
    <div>
        <p>{{ $comment->content }}</p>
        <form action="{{ route('comments.destroy', ['postId' => $post->id, 'commentId' => $comment->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete Comment</button>
        </form>
    </div>
@empty
    <p>No comments yet.</p>
@endforelse

<h3>Add a Comment</h3>

<form action="{{ route('comments.store', $post->id) }}" method="POST">
    @csrf
    <label for="comment-content">Comment Content:</label>
    <textarea name="content" id="comment-content" rows="4" required></textarea>
    <button type="submit">Add Comment</button>
</form>

