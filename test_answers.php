<?php /** @noinspection ALL */
// Установите соединение с базой данных
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "psycho";

// Создайте соединение
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверьте соединение на ошибки
if ($conn->connect_error) {
    die("Ошибка соединения: " . $conn->connect_error);
}

// Получите данные из POST-запроса
$name = $_POST['name'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$faculty = $_POST['faculty'];
$upset = $_POST['upset'];
$future = $_POST['future'];
$unlucky = $_POST['unlucky'];
$pleasure = $_POST['pleasure'];
$guilty = $_POST['guilty'];
$sleep = $_POST['sleep'];
$appetite = $_POST['appetite'];
$weight = $_POST['weight'];
$fatigue = $_POST['fatigue'];
$concentration = $_POST['concentration'];
$decision = $_POST['decision'];
$worthless = $_POST['worthless'];
$suicide = $_POST['suicide'];
$crying = $_POST['crying'];
$irritability = $_POST['irritability'];
$social = $_POST['social'];
$loss_interest = $_POST['loss_interest'];
$energy = $_POST['energy'];
$initiative = $_POST['initiative'];
$work = $_POST['work'];
$tiredness = $_POST['tiredness'];
$failure = $_POST['failure'];
$nervous = $_POST['nervous'];

// Подготовьте SQL-запрос для вставки данных в таблицу Data
$sql = "INSERT INTO psy (name, phone, age, faculty, upset, future, unlucky, pleasure, guilty, sleep, appetite, weight, fatigue, concentration, decision, worthless, suicide, crying, irritability, social, loss_interest, energy, initiative, work, tiredness, failure, nervous) 
VALUES ('$name', '$phone', '$age', '$faculty', '$upset', '$future', '$unlucky', '$pleasure', '$guilty', '$sleep', '$appetite', '$weight', '$fatigue', '$concentration', '$decision', '$worthless', '$suicide', '$crying', '$irritability', '$social', '$loss_interest', '$energy', '$initiative', '$work', '$tiredness', '$failure', '$nervous')";

// выполнить запрос
if ($conn->query($sql) === TRUE) {
    echo "Данные успешно добавлены в таблицу.";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}
// Рассчитываем сумму баллов
$score = $_POST['upset'] + $_POST['future'] + $_POST['unlucky'] + $_POST['pleasure'] + $_POST['guilty'] + $_POST['sleep'] + $_POST['appetite'] + $_POST['weight'] + $_POST['fatigue'] + $_POST['concentration'] + $_POST['decision'] + $_POST['worthless'] + $_POST['suicide'] + $_POST['crying'] + $_POST['irritability'] + $_POST['social'] + $_POST['loss_interest'] + $_POST['energy'] + $_POST['initiative'] + $_POST['work'] + $_POST['tiredness'] + $_POST['failure'] + $_POST['nervous'];

// Определение категории депрессии в зависимости от суммы баллов
$category = '';
if ($score >= 0 && $score <= 13) {
    $category = 'норма';
} elseif ($score >= 14 && $score <= 19) {
    $category = 'легкая депрессия';
} elseif ($score >= 20 && $score <= 28) {
    $category = 'умеренная депрессия';
} elseif ($score >= 29 && $score <= 63) {
    $category = 'тяжёлая депрессия';
}

// Вывод статьи в зависимости от категории
$article = '';
switch ($category) {
    case 'норма':
        $article =  header('Location: posts/norm.php');
        break;
    case 'легкая депрессия':
        $article = header('Location: posts/easy.php');
        break;
    case 'умеренная депрессия':
        $article = header('Location: posts/hard.php');
        break;
    case 'тяжёлая депрессия':
        $article = header('Location: posts/insane.php');
        break;
}

// Сохранение ответов и результатов в базу данных

// Ваш код для сохранения данных в базу данных 'psycho' и таблицу 'Data'

// Вывод статьи
echo $article;


// Закройте соединение с базой данных
$conn->close();
