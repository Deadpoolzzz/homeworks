<!-- Написать калькулятор. Переменная $a = изменяемое число. Переменная $b = изменяемое число. Переменная $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления). На экран выводить результат в зависимости от значений этих переменных. Не забудьте про деление на 0, если надо - выдавать ошибку что на 0 делить нельзя.
 -->

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method=POST action='action.php'>
    <label for="first">Чило №1<br></label>
    <input type="text" id="first" name="a"><br>
    <label for="second">Чило №2<br></label>
    <input type="text"id="second" name="b"><br>
    <select name="operator">
        <option>+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select><br><br>
    <input type="submit" value="посчитать">
</form>
</body>
</html>




