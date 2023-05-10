<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send files to Server</title>
</head>
<body>
<form action="receive.php" method="post" >
    <label for="number1">Number 1</label><input name="number1" id="number1" type="number" required><br>
    <label for="number2">Number 2</label><input name="number2" id="number2" type="number" required><br>

    <input name="operator" id="operator" type="submit" value="+">
    <input name="operator" id="operator" type="submit" value="-">
    <input name="operator" id="operator" type="submit" value="*">
    <input name="operator" id="operator" type="submit" value="/">
    <input name="operator" id="operator" type="submit" value="%">
</form>
</body>
</html>


