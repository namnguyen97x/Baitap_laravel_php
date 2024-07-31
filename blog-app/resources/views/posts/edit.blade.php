<!DOCTYPE html>
<html>
<head>
    <title>Chỉnh sửa bài viết</title>
</head>
<body>
    <h1>Chỉnh sửa bài viết</h1>
    <form action="/posts/{{ $post->id }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Tiêu đề:</label>
        <input type="text" id="title" name="title" value="{{ $post->title }}"><br><br>
        <label for="content">Nội dung:</label><br>
        <textarea id="content" name="content" rows="10" cols="30">{{ $post->content }}</textarea><br><br>
        <button type="submit">Cập nhật</button>
    </form>
</body>
</html>
