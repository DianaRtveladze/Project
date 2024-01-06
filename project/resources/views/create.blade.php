
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <label for="content">Post Content:</label>
    <textarea name="content" id="content" rows="4" required></textarea>
    <button type="submit">Add Post</button>
</form>
