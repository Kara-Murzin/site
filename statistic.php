<!DOCTYPE html>
<html>
<head>
    <title>Статистика</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<table id="statistics-table">
    <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Phone</th>
        <th>Age</th>
        <th>Faculty</th>
        <th>Eating Frequency</th>
        <th>Eating Habits</th>
        <th>Food Preferences</th>
        <th>Breakfast Frequency</th>
        <th>Breakfast Content</th>
        <th>Lunch Frequency</th>
        <th>Lunch Content</th>
        <th>Snack Frequency</th>
        <th>Snack Content</th>
        <th>Dinner Time</th>
        <th>Red Meat Consumption</th>
        <th>Fish Consumption</th>
        <th>Fruit Frequency</th>
        <th>Vegetable Frequency</th>
        <th>Water Intake</th>
        <th>Soda Intake</th>
        <th>Abdominal Pain</th>
        <th>Heartburn</th>
        <th>Food Poisoning</th>
        <th>Alcohol</th>
        <th>Smoking</th>
    </tr>
</table>

<script>
    // Функция для получения данных из базы данных
    function getStatistics() {
        // Создание объекта XMLHttpRequest
        var xhr = new XMLHttpRequest();

        // Определение обработчика события для успешного выполнения запроса
        xhr.onload = function() {
            if (xhr.status === 200) {
                // Преобразование полученных данных в объект JavaScript
                var data = JSON.parse(xhr.responseText);

                // Генерация строк таблицы на основе данных
                var table = document.getElementById('statistics-table');
                for (var i = 0; i < data.length; i++) {
                    var row = table.insertRow();
                    row.insertCell().textContent = data[i].id;
                    row.insertCell().textContent = data[i].fullname;
                    row.insertCell().textContent = data[i].phone;
                    row.insertCell().textContent = data[i].age;
                    row.insertCell().textContent = data[i].faculty;
                    row.insertCell().textContent = data[i].eating_frequency;
                    row.insertCell().textContent = data[i].eating_habits;
                    row.insertCell().textContent = data[i].food_preferences;
                    row.insertCell().textContent = data[i].breakfast_frequency;
                    row.insertCell().textContent = data[i].breakfast_content;
                    row.insertCell().textContent = data[i].lunch_frequency;
                    row.insertCell().textContent = data[i].lunch_content;
                    row.insertCell().textContent = data[i].snack_frequency;
                    row.insertCell().textContent = data[i].snack_content;
                    row.insertCell().textContent = data[i].dinner_time;
                    row.insertCell().textContent = data[i].red_meat_consumption;
                    row.insertCell().textContent = data[i].fish_consumption;
                    row.insertCell().textContent = data[i].fruit_frequency;
                    row.insertCell().textContent = data[i].vegetable_frequency;
                    row.insertCell().textContent = data[i].water_intake;
                    row.insertCell().textContent = data[i].soda_intake;
                    row.insertCell().textContent = data[i].abdominal_pain;
                    row.insertCell().textContent = data[i].heartburn;
                    row.insertCell().textContent = data[i].food_poisoning;
                    row.insertCell().textContent = data[i].alcohol;
                    row.insertCell().textContent = data[i].smoking;
                }
            }
        };

        // Отправка GET-запроса на сервер для получения данных
        xhr.open('GET', 'get_statistics.php', true);
        xhr.send();
    }

    // Вызов функции для получения данных при загрузке страницы
    window.onload = getStatistics;
</script>
</body>
</html>
