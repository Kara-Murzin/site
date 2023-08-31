<?php
// Подключение к базе данных MySQL
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "test";

// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Запрос на получение данных из таблицы "answers"
$sql = "SELECT * FROM answers";
$result = $conn->query($sql);

$data = array();

// Проверка наличия данных и формирование массива с результатами
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Закрытие соединения с базой данных
$conn->close();

// Отправка данных в формате JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
