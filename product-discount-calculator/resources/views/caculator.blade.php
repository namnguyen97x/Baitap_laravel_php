<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Caculator Test</title>
</head>
<body>
    <form action="caculator" method="post">
        @csrf
        <label for="ProductDescription">Product Description:</label>
        <input type="text" name="ProductDescription" id="ProductDescription">
        <br>
        <label for="ListPrice">List Price:</label>
        <input type="text" name="ListPrice" id="ListPrice">
        <br>
        <label for="DiscountPercent">Discount Percent:</label>
        <input type="text" name="DiscountPercent" id="DiscountPercent">
        <br>
        <button type="submit" id="CalculateDiscount">Calculate Discount</button>
    </form>
</body>
</html>