<!DOCTYPE HTML>
<html>
<head>
<title>Form Test</title>
</head>
<body>
<?php
if (isset($_POST['name'])) $name = $_POST['name'];
else $name = "(Не введено)";
echo <<<_END
Вас зовут: $name <br>
<form method="post" action="formtest2.php">
Как Вас зовут?
<input type="text" name="name">
<input type="submit">
</form>
</body>
</html>
_END;
?>
<!--Изменения касаются двух строк в начале программы, в которых проверяется, содержит ли ассоциативный массив $_POST-->
<!-- отправленное поле name. Ассоциативный массив $_POST  -->
<!-- он включает в себя элемент для каждого поля HTML-формы. В примере 11.2 для вводимого имени использовалось поле name, -->
<!-- а для отправки данных формы был избран метод POST, поэтому значение элемента name массива $_POST содержится в элементе-->
<!-- массива $_POST['name'].-->

