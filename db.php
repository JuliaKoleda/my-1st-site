<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title> errortable </title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<form>
    <p>Выберите дату:
        <input type="date" name="calendar" value="2012-06-01"
               max="2012-06-04" min="2012-05-29">
        <input type="submit" value="Отправить"></p>
</form>
<h1 align="center" style='color:#fbfffb'>Description table</h1>
<?php
require_once("connection.php");

$link = mysqli_connect($host, $user, $password, $database);
$date = date("Y-m-d H:i:s");
if (!$link) {
    die('Connect Error: ' . mysqli_connect_error());
} else {
//    echo "All ok <br>";
}
//$query = "SELECT * FROM errors";
//$result = $link->query($query);
//if (!$result) die ($link->error);
//$rows = $result->num_rows; //
//for ($j = 0; $j < $rows; ++$j) //наращиваем строку если она меньше массива
//{
//    $result->data_seek($j); //переход к строке j
////После этого с использованием значения в $rows запускается цикл for, предназначенный для вывода на экран содержимого каждой строки.
//// При каждом прохождении цикла для поиска интересующих нас элементов данных вызывается метод data_seek объекта $result:
//    $row = $result->fetch_array(MYSQLI_ASSOC); //fetch_array может возвращать три типа массивов
//    echo 'id: ' . $row['id'] . '<br>';
//    echo 'description: ' . $row['description'] . '<br>';
//}
//$result->close();
//$link->close();
?>

<?php


/** @var TYPE_NAME $query */
$query = "SELECT * FROM errors ";
//$query = "SELECT NOW(),NOW()+1; ";
$result = $link->query($query);
if (!$result) die ("Сбой при доступе к базе данных: " . $link->error());
$rows = $result->num_rows;
foreach($link->query('SELECT NOW()') as $row) {

}
echo "<table >";
echo "<tr>";
echo "<th>" . "id" . "</th>";
echo "<th>" . "description" . "</th>";
echo "<th>" . "critical" . "</th>";
echo "<th>" . "date" . "</th>";
//echo "<th>" . $row['NOW()'] . "</th>";
echo "</tr>";
for ($j = 0; $j < $rows; $j++) {
    $result->data_seek($j); //переход к заданной строке
    $row = $result->fetch_array(MYSQLI_ASSOC); //FA Выбирает одну строку из результирующего набора и помещает ее в ассоциативный массив, обычный массив или в оба

    echo "<tr>";
    echo "<th>" . $row["id"] . "</th>";
    echo "<th>" . $row["description"] . "</th>";
    if ($row["critical"] == "high") {
        echo "<th style='color:red'>" . $row["critical"] . "</th>";
    } else {
        echo "<th>" . $row["critical"] . "</th>";
    }

    echo "</tr>";
}
echo "</table>";
echo "<a href='helpsystem/index.php' style='display: block;
    text-align: center;margin-top: 20px'>Write error</a>";
?>

</body>
</html>