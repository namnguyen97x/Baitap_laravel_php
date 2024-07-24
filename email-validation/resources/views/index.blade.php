<!doctype html>
<html lang="en">
<head>
    <!-- Các thẻ meta và title -->
</head>
<body>
<div class="main-content">
    <h1>Ứng dụng kiểm tra email hợp lệ</h1>
    <form method="get">
        <label for="email-input">Email:</label>
        <input id="email-input" type="email" name="email">
        <button type="submit">Kiểm tra</button>
    </form>
    <p>{{ $message }}</p>
</div>
</body>
</html>
