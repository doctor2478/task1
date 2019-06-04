<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Задание 1</title>
    <script type="text/javascript">
        function sum (form) {                                                       //передаем form в функцию sum
            let a = parseFloat(document.getElementById("num1").value);              // создаем переменные a и b, parseFloat - для возврата числа с плавающей точкой
            let b = parseFloat(document.getElementById("num2").value);              // document.getElementById("num1").value - обращение к значению элемента по его id
            let c = a + b;                                                          //выполняем сложение переменных
            alert (c.toFixed(1));                                                   //в алерт выводим переменную c, округленную до 1 знака после точки
        }
    </script>
</head>
<body>
    <form onsubmit="return false;">                                                   <!--в теле боди создаем форму, onsubmit пишем чтобы страница не обновлялась -->
        <label for="first_num"><b>Первое число</b></label><br />
        <input type="text" name="a"  value="0.1" id="num1" /><br />
        <label for="sec_num"><b>Второе число</b></label><br />
        <input type="text" name="b"  value="0.2" id="num2" /><br />
        <input type="submit" name="submit" value="Сложить" onclick="sum();"/> <br />   <!-- кнопка запускает функцию sum(); -->
    </form>
</body>
</html>