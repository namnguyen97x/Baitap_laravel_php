<!DOCTYPE html>
<html>
<head>
    <title>Blog</title>
</head>
<body>
    <h1>Danh sách bài viết</h1>
    <a href="/posts/create">Viết bài mới</a>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                <a href="/posts/{{ $post->id }}/edit">Chỉnh sửa</a>
                <form action="/posts/{{ $post->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Xóa</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
