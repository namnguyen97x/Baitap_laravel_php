<!DOCTYPE html>
<html>
<head>
    <title>Viết bài mới</title>
</head>
<body>
    <h1>Viết bài mới</h1>
    <form action="/posts" method="POST">
        @csrf
        <label for="title">Tiêu đề:</label>
        <input type="text" id="title" name="title"><br><br>
        <label for="content">Nội dung:</label><br>
        <textarea id="content" name="content" rows="10" cols="30"></textarea><br><br>
        <button type="submit">Lưu</button>
    </form>
</body>
</html>
