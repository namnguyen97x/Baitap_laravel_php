<!DOCTYPE html>
<html>
<head>
    <title>Từ điển Anh-Việt</title>
</head>
<body>
    <h1>Tra từ tiếng anh</h1>
    <form method="POST" action="translate">
        @csrf
        <p>Nhập từ muốn tiếng anh muốn tra</p>
        <input type="text" name="word" placeholder="Nhập từ cần tra">
        <button type="submit">Dịch</button>
    </form>
</body>
</html>
