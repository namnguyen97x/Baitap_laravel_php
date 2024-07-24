<!DOCTYPE html>
<html>
<head>
    <title>Từ điển Anh-Việt</title>
</head>
<body>
    <h1>Tra từ</h1>
    <form method="POST" action="translate">
        @csrf
        <input type="text" name="word" placeholder="Nhập từ cần tra">
        <button type="submit">Dịch</button>
    </form>
</body>
</html>
