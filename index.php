<?php
include "path.php";
include "app/controllers/topics.php";

$page = isset($_GET['page']) ? $_GET['page']: 1;
$limit = 2;
$offset = $limit * ($page - 1);
$total_pages = round(countRow('posts') / $limit, 0);

$posts = selectAllFromPostsWithUsersOnIndex('posts', 'users', $limit, $offset);
$topTopic = selectTopTopicFromPostsOnIndex('posts');


?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>My blog</title>
</head>
<body>

<?php include("app/include/header.php"); ?>

<!-- блок карусели START-->
<div class="container">
    <div class="row">
        <h2 class="slider-title">Үздік басылымдар</h2>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php foreach ($topTopic as $key => $post): ?>
            <?php if($key == 0):?>
            <div class="carousel-item active">
                <?php else: ?>
                <div class="carousel-item">
                    <?php endif; ?>
                    <img src="<?=BASE_URL . 'assets/images/posts/' . $post['img'] ?>" alt="<?=$post['title']?>" class="d-block w-100">
                    <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                        <h5><a href="<?=BASE_URL . 'single.php?post=' . $post['id'];?>"><?=substr($post['title'], 0, 120) . '...'  ?></a></h5>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- блок карусели END-->

    <!-- блок main-->
    <div class="container">
        <div class="content row">
            <!-- Main Content -->
            <div class="main-content col-md-9 col-12">
                <h2>Соңғы басылымдар</h2>
                <?php foreach ($posts as $post): ?>
                    <div class="post row">
                        <div class="img col-12 col-md-4">
                            <img src="<?=BASE_URL . 'assets/images/posts/' . $post['img'] ?>" alt="<?=$post['title']?>" class="img-thumbnail">
                        </div>
                        <div class="post_text col-12 col-md-8">
                            <h3>
                                <a href="<?=BASE_URL . 'single.php?post=' . $post['id'];?>"><?=substr($post['title'], 0, 80) . '...'  ?></a>
                            </h3>
                            <i class="far fa-user"> <?=$post['username'];?></i>
                            <i class="far fa-calendar"> <?=$post['created_date'];?></i>
                            <p class="preview-text">

                                <?=mb_substr($post['content'], 0, 55, 'UTF-8'). '...'  ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php include("app/include/pagination.php"); ?>
            </div>
            <!-- sidebar Content -->
            <div class="sidebar col-md-3 col-12">

                <div class="section search">
                    <h3>Іздеу</h3>
                    <form action="search.php" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Қажетті сөзді енгізіңіз...">
                    </form>
                </div>


                <div class="section topics">
                    <h3>Санаттар</h3>
                    <ul>
                        <?php foreach ($topics as $key => $topic): ?>
                            <li>
                                <a href="<?=BASE_URL . 'category.php?id=' . $topic['id']; ?>"><?=$topic['name']; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

            </div>

        </div>

    </div>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Динамическая диаграмма</title>
        <style>
            .chart-container {
                width: 400px;
                height: 400px;
                margin: 0 auto;
            }
        </style>
    </head>
    <body>
    <div class="chart-container">
        <canvas id="myChart"></canvas>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Функция для получения данных из базы данных
        function getChartData() {
            // Создание объекта XMLHttpRequest
            var xhr = new XMLHttpRequest();

            // Определение обработчика события для успешного выполнения запроса
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // Преобразование полученных данных в объект JavaScript
                    var data = JSON.parse(xhr.responseText);

                    // Получение уникальных значений факультетов
                    var faculties = [...new Set(data.map(item => item.faculty))];

                    // Подсчет количества студентов для каждого факультета
                    var counts = faculties.map(faculty => data.filter(item => item.faculty === faculty).length);

                    // Создание диаграммы
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: faculties,
                            datasets: [{
                                label: 'Количество студентов',
                                data: counts,
                                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                borderColor: 'rgba(75, 192, 192, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    precision: 0
                                }
                            }
                        }
                    });
                }
            };

            // Отправка GET-запроса на сервер для получения данных
            xhr.open('GET', 'get_chart_data.php', true);
            xhr.send();
        }

        // Вызов функции для получения данных при загрузке страницы
        window.onload = getChartData;
    </script>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <h1>Статистика по курению</h1>

    <div class="chart-container">
        <canvas id="ageChart"></canvas>
    </div>

    <div class="chart-container">
        <canvas id="smokingChart"></canvas>
    </div>

    <script>
        // Функция для получения данных о возрасте из базы данных
        function getAgeData() {
            // Создание объекта XMLHttpRequest
            var xhr = new XMLHttpRequest();

            // Определение обработчика события для успешного выполнения запроса
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // Преобразование полученных данных в объект JavaScript
                    var data = JSON.parse(xhr.responseText);

                    // Подсчет количества людей в каждой возрастной группе
                    var ageGroups = {
                        '18-25': 0,
                        '26-35': 0,
                        '36-45': 0,
                        '46-55': 0,
                        '56+': 0
                    };

                    data.forEach(function(item) {
                        if (item.age >= 18 && item.age <= 25) {
                            ageGroups['18-25']++;
                        } else if (item.age >= 26 && item.age <= 35) {
                            ageGroups['26-35']++;
                        } else if (item.age >= 36 && item.age <= 45) {
                            ageGroups['36-45']++;
                        } else if (item.age >= 46 && item.age <= 55) {
                            ageGroups['46-55']++;
                        } else if (item.age >= 56) {
                            ageGroups['56+']++;
                        }
                    });

                    // Создание диаграммы
                    var ctx = document.getElementById('ageChart').getContext('2d');
                    var ageChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: Object.keys(ageGroups),
                            datasets: [{
                                label: 'Количество',
                                data: Object.values(ageGroups),
                                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                borderColor: 'rgba(75, 192, 192, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                }
            };

            // Отправка GET-запроса на сервер для получения данных
            xhr.open('GET', 'get_age_data.php', true);
            xhr.send();
        }

        // Функция для получения данных о курении из базы данных
        function getSmokingData() {
            // Создание объекта XMLHttpRequest
            var xhr = new XMLHttpRequest();

            // Определение обработчика события для успешного выполнения запроса
            xhr.onload = function() {
                if (xhr.status === 200) {
                    // Преобразование полученных данных в объект JavaScript
                    var data = JSON.parse(xhr.responseText);

                    // Подсчет количества курящих и некурящих людей
                    var smokingData = {
                        'Курящие': 0,
                        'Некурящие': 0
                    };

                    data.forEach(function(item) {
                        if (item.smoking === 'Да') {
                            smokingData['Курящие']++;
                        } else {
                            smokingData['Некурящие']++;
                        }
                    });

                    // Создание диаграммы
                    var ctx = document.getElementById('smokingChart').getContext('2d');
                    var smokingChart = new Chart(ctx, {
                        type: 'pie',
                        data: {
                            labels: Object.keys(smokingData),
                            datasets: [{
                                data: Object.values(smokingData),
                                backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)'],
                                borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)'],
                                borderWidth: 1
                            }]
                        }
                    });
                }
            };

            // Отправка GET-запроса на сервер для получения данных
            xhr.open('GET', 'get_smoking_data.php', true);
            xhr.send();
        }

        // Вызов функций для получения данных и отображения диаграмм
        getAgeData();
        getSmokingData();
    </script>
    </div>
    </body>
    </html>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include("app/include/footer.php"); ?>