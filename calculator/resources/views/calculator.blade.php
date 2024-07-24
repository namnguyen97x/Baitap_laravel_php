<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Máy tính</title>
    <style>
        .calculator {
            width: 300px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .calculator input[type="button"] {
            width: calc(25% - 10px); /* Độ rộng của mỗi nút là 25% chiều rộng của container, trừ đi khoảng cách 10px */
            height: 40px;
            font-size: 18px;
            margin: 5px;
        }
        .calculator input[type="text"] {
            width: 100%;
            height: 40px;
            font-size: 18px;
            text-align: right;
            margin-bottom: 10px;
            padding: 5px; /* Thêm padding để nội dung không dính vào các cạnh của input */
        }
        .calculator .row {
            text-align: center;
            margin-bottom: 5px; /* Khoảng cách giữa các dòng */
            display: flex; /* Sử dụng flexbox để căn chỉnh các nút */
            justify-content: space-between; /* Căn các nút theo lề */
        }
    </style>
</head>
<body>
    <div class="calculator">
        <input type="text" id="result" disabled>
        <div class="row">
            <input type="button" value="7" onclick="appendToResult('7')">
            <input type="button" value="8" onclick="appendToResult('8')">
            <input type="button" value="9" onclick="appendToResult('9')">
            <input type="button" value="/" onclick="appendToResult('/')">
        </div>
        <div class="row">
            <input type="button" value="4" onclick="appendToResult('4')">
            <input type="button" value="5" onclick="appendToResult('5')">
            <input type="button" value="6" onclick="appendToResult('6')">
            <input type="button" value="*" onclick="appendToResult('*')">
        </div>
        <div class="row">
            <input type="button" value="1" onclick="appendToResult('1')">
            <input type="button" value="2" onclick="appendToResult('2')">
            <input type="button" value="3" onclick="appendToResult('3')">
            <input type="button" value="-" onclick="appendToResult('-')">
        </div>
        <div class="row">
            <input type="button" value="0" onclick="appendToResult('0')">
            <input type="button" value="." onclick="appendToResult('.')">
            <input type="button" value="+" onclick="appendToResult('+')">
            <input type="button" value="=" onclick="calculate()">
        </div>
        <div class="row">
            <input type="button" value="C" onclick="clearResult()">
        </div>
    </div>

    <script>
        function appendToResult(value) {
            document.getElementById('result').value += value;
        }

        function calculate() {
            try {
                var result = eval(document.getElementById('result').value);
                document.getElementById('result').value = result;
            } catch (error) {
                document.getElementById('result').value = 'Error';
            }
        }

        function clearResult() {
            document.getElementById('result').value = '';
        }
    </script>
</body>
</html>
