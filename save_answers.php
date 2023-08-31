<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "test";

// Создание подключения к базе данных
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения на ошибки
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получение значений из POST-запроса
$fullname = $_POST['fullname'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$faculty = $_POST['faculty'];
$eatingFrequency = $_POST['eating_frequency'];
$eatingHabits = $_POST['eating_habits'];
$foodPreferences = $_POST['food_preferences'];
$breakfastFrequency = $_POST['breakfast_frequency'];
$breakfastContent = $_POST['breakfast_content'];
$lunchFrequency = $_POST['lunch_frequency'];
$lunchContent = $_POST['lunch_content'];
$snackFrequency = $_POST['snack_frequency'];
$snackContent = $_POST['snack_content'];
$dinnerTime = $_POST['dinner_time'];
$redMeatConsumption = $_POST['red_meat_consumption'];
$fishConsumption = $_POST['fish_consumption'];
$fruitFrequency = $_POST['fruit_frequency'];
$vegetableFrequency = $_POST['vegetable_frequency'];
$waterIntake = $_POST['water_consumption'];
$sodaIntake = $_POST['soft_drink_consumption'];
$abdominalPain = $_POST['abdominal_pain'];
$heartburn = $_POST['heartburn'];
$foodPoisoning = $_POST['food_poisoning'];
$alcohol = $_POST['alcohol'];
$smoking = $_POST['smoking'];

// Подготовка данных для сохранения в базу данных
$fullname = $conn->real_escape_string($fullname);
$phone = $conn->real_escape_string($phone);
$age = $conn->real_escape_string($age);
$faculty = $conn->real_escape_string($faculty);
$eatingFrequency = $conn->real_escape_string($eatingFrequency);
$eatingHabits = $conn->real_escape_string($eatingHabits);
$foodPreferences = $conn->real_escape_string($foodPreferences);
$breakfastFrequency = $conn->real_escape_string($breakfastFrequency);
$breakfastContent = $conn->real_escape_string($breakfastContent);
$lunchFrequency = $conn->real_escape_string($lunchFrequency);
$lunchContent = $conn->real_escape_string($lunchContent);
$snackFrequency = $conn->real_escape_string($snackFrequency);
$snackContent = $conn->real_escape_string($snackContent);
$dinnerTime = $conn->real_escape_string($dinnerTime);
$redMeatConsumption = $conn->real_escape_string($redMeatConsumption);
$fishConsumption = $conn->real_escape_string($fishConsumption);
$fruitFrequency = $conn->real_escape_string($fruitFrequency);
$vegetableFrequency = $conn->real_escape_string($vegetableFrequency);
$waterIntake = $conn->real_escape_string($waterIntake);
$sodaIntake = $conn->real_escape_string($sodaIntake);
$abdominalPain = $conn->real_escape_string($abdominalPain);
$heartburn = $conn->real_escape_string($heartburn);
$foodPoisoning = $conn->real_escape_string($foodPoisoning);
$alcohol = $conn->real_escape_string($alcohol);
$smoking = $conn->real_escape_string($smoking);


// Вставка данных в таблицу "answers"
$sql = "INSERT INTO answers (fullname, phone, age, faculty, eating_frequency, eating_habits, food_preferences, breakfast_frequency, breakfast_content, lunch_frequency, lunch_content, snack_frequency, snack_content, dinner_time, red_meat_consumption, fish_consumption, fruit_frequency, vegetable_frequency, water_intake, soda_intake, abdominal_pain, heartburn, food_poisoning, alcohol, smoking)
        VALUES ('$fullname', '$phone', '$age', '$faculty', '$eatingFrequency', '$eatingHabits', '$foodPreferences', '$breakfastFrequency', '$breakfastContent', '$lunchFrequency', '$lunchContent', '$snackFrequency', '$snackContent', '$dinnerTime', '$redMeatConsumption', '$fishConsumption', '$fruitFrequency', '$vegetableFrequency', '$waterIntake', '$sodaIntake', '$abdominalPain', '$heartburn', '$foodPoisoning', '$alcohol', '$smoking')";

// Подготовка запроса
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssiissssssssssssssssssss", $fullname, $phone, $age, $faculty, $eatingFrequency, $eatingHabits, $foodPreferences, $breakfastFrequency, $breakfastContent, $lunchFrequency, $lunchContent, $snackFrequency, $snackContent, $dinnerTime, $redMeatConsumption, $fishConsumption, $fruitFrequency, $vegetableFrequency, $waterIntake, $sodaIntake, $abdominalPain, $heartburn, $foodPoisoning, $alcohol, $smoking);

// Выполнение подготовленного запроса
$stmt->execute();

// Проверка условий для предоставления статьи о вреде плохого питания на здоровье
if ($eatingFrequency == '1 раз' && $eatingHabits == 'Фастфудом' && $breakfastFrequency == 'Я никогда не завтракаю'){
    // Если ответы пользователя соответствуют условиям, перенаправление на страницу со статьей
    header('Location: posts/eat.php');
    exit();
} elseif ($waterIntake == '0,5-1 литра' && $sodaIntake == '500 мл (одна обычная маленькая бутылка)' && $alcohol == 'Могу выпить в компании, при застольях крепкие алкогольные напитки (водка, виски) 1 раз в месяц.'){
    header('Location: posts/drink.php');
}else{
    // Если условия не выполнены, отобразить другую страницу или сообщение
    header('Location: posts/neutral.php') ;
}

// Закрытие соединения с базой данных
$stmt->close();
$conn->close();
?>
