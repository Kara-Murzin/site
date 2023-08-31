<?php
// Подключение к базе данных
$db = new PDO('mysql:host=localhost;dbname=test', 'root', 'mysql');

// Запрос на получение данных о возрасте
$query = "SELECT age FROM users";
$stmt = $db->prepare($query);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Возвращение данных в формате JSON
echo json_encode($data);
?>
