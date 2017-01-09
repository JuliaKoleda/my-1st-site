<?php
$host = 'localhost'; // адрес сервера
$user = 'root'; // имя пользователя
$password = ''; // пароль
$database = 'helpdesk'; // имя базы данных
$link = mysqli_connect($host, $user, $password, $database);
if (!$link) {
    die('Connect Error: ' . mysqli_connect_error());
} else {
  echo "All ok <br>";
}
$error = $_POST['error'];
$critical = $_POST['critical'];
//echo $error .$critical;
$sql = "INSERT INTO errors (description,critical)
VALUES ('$error','$critical')";

if ($link->query($sql) === TRUE) {
    echo "New record created successfully <br>";
    echo "<a href='../db.php'>Go to errors page </a>";
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}

$link->close();



?>