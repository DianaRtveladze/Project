@foreach ($comments as $comment)
    <p>{{ $comment->username }}: {{ $comment->content }}</p>
@endforeach

<form id="commentForm">
    @csrf
    <input type="hidden" name="post_id" value="{{ $post->id }}">
    <input type="text" name="username" placeholder="Username">
    <textarea name="comment" placeholder="Your comment"></textarea>
    <button type="submit">Add Comment</button>
</form>

<script>
    $(document).ready(function() {
        $('#commentForm').submit(function(e) {
            e.preventDefault();

            $.ajax({
                type: 'POST',
                url: '{{ route('comments.store') }}',
                data: $(this).serialize(),
                success: function(response) {
                    // Handle success response
                },
                error: function(error) {
                    // Handle error response
                }
            });
        });
    });
</script>
