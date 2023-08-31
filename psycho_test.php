<!DOCTYPE html>
<html>
<head>
    <title>Психологический опрос</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        .question1 + .question2 + .question3 + .question4 + .question5 + .question6 + .question7 + .question8 + .question9 + .question10
        + .question11 + .question12 + .question13 + .question14 + .question15 + .question16 + .question17 + .question18 + .question19 + .question20 + .question21 + .question22 + .question23 +{
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 10px;
            font-size: 20px;
            color: darkgreen;
        }

        .kazakh-button {
            display: block;
            width: 200px;
            margin-top: 10px;
            margin-right: 10px;
            background-color: khaki;
            color: #333;
            border: none;
            border-radius: 4px;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Психологический опрос</h1>
    <a href="psy_test_kaz.php" class="kazakh-button">Қазақша версиясы</a>
    <form action="test_answers.php" method="POST">
        <label for="name">Имя:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="phone">Телефон:</label>
        <input type="text" name="phone" id="phone" required><br>

        <label for="age">Возраст:</label>
        <input type="number" name="age" id="age" required><br>

        <label for="faculty">Факультет:</label>
        <input type="text" name="faculty" id="faculty" required><br>

        <h2>Оцените следующие утверждения от 0 до 3, где:</h2>
        <ul>
            <li>0 - Нет</li>
            <li>1 - Иногда</li>
            <li>2 - Часто</li>
            <li>3 - Постоянно</li>
        </ul>

        <div class="question1">
            <label for="upset">Я огорчен(а) или расстроен(а).</label>
            <input type="number" name="upset" id="upset" min="0" max="3" required>
        </div>
        <br>
        <div class="question2">
            <label for="future">Мне страшно или я ожидаю негативные события в будущем.</label>
            <input type="number" name="future" id="future" min="0" max="3" required>
        </div>
        <br>
        <div class="question3">
            <label for="unlucky">Я чувствую себя неудачником или думаю, что у меня всё идет не так, как должно.</label>
            <input type="number" name="unlucky" id="unlucky" min="0" max="3" required>
        </div>
        <br>
        <div class="question4">
            <label for="pleasure">Мне трудно находить удовольствие от обычных вещей, которые раньше меня радовали.</label>
            <input type="number" name="pleasure" id="pleasure" min="0" max="3" required>
        </div>
        <br>
        <div class="question5">
            <label for="guilty">Я чувствую себя виноватым(ой) без веской причины или испытываю чувство вины за всё плохое, что происходит.</label>
            <input type="number" name="guilty" id="guilty" min="0" max="3" required>
        </div>
        <br>
        <div class="question6">
            <label for="sleep">Мне трудно заснуть или я сплю непрерывно и долго.</label>
            <input type="number" name="sleep" id="sleep" min="0" max="3" required>
        </div>
        <br>
        <div class="question7">
            <label for="appetite">У меня пропал аппетит или я ем слишком много.</label>
            <input type="number" name="appetite" id="appetite" min="0" max="3" required>
        </div>
        <br>
        <div class="question8">
            <label for="weight">Я потерял(а) вес или набрал(а) вес без видимых причин.</label>
            <input type="number" name="weight" id="weight" min="0" max="3" required>
        </div>
        <br>
        <div class="question9">
            <label for="fatigue">Я чувствую себя уставшим(ей) или без энергии.</label>
            <input type="number" name="fatigue" id="fatigue" min="0" max="3" required>
        </div>
        <br>
        <div class="question10">
            <label for="concentration">Мне трудно сосредоточиться или я легко теряю концентрацию внимания.</label>
            <input type="number" name="concentration" id="concentration" min="0" max="3" required>
        </div>
        <br>
        <div class="question11">
            <label for="decision">Мне трудно принимать решения или я сомневаюсь в принятых решениях.</label>
            <input type="number" name="decision" id="decision" min="0" max="3" required>
        </div>
        <br>
        <div class="question12">
            <label for="worthless">Я чувствую себя никчемным(ой) или безнадежным(ой).</label>
            <input type="number" name="worthless" id="worthless" min="0" max="3" required>
        </div>
        <br>
        <div class="question13">
            <label for="suicide">Мне приходят в голову мысли о суициде или я думаю о том, чтобы причинить себе вред.</label>
            <input type="number" name="suicide" id="suicide" min="0" max="3" required>
        </div>
        <br>
        <div class="question14">
            <label for="crying">Я плачу или чувствую себя пустым(ой) внутри.</label>
            <input type="number" name="crying" id="crying" min="0" max="3" required>
        </div>
        <br>
        <div class="question15">
            <label for="irritability">Я раздражительный(ая) или я легко взрываюсь.</label>
            <input type="number" name="irritability" id="irritability" min="0" max="3" required>
        </div>
        <br>
        <div class="question16">
            <label for="social">Мне трудно себя чувствовать комфортно в обществе или с другими людьми.</label>
            <input type="number" name="social" id="social" min="0" max="3" required>
        </div>
        <br>
        <div class="question17">
            <label for="loss_interest">Я потерял(а) интерес к тому, что раньше меня интересовало.</form>
            <input type="number" name="loss_interest" id="loss_interest" min="0" max="3" required>
        </div>
        <br>
        <div class="question18">
            <label for="energy">У меня уменьшилась активность или я чувствую себя замедленным(ой).</label>
            <input type="number" name="energy" id="energy" min="0" max="3" required>
        </div>
        <br>
        <div class="question19">
            <label for="initiative">Мне трудно начинать или заканчивать дела.</label>
            <input type="number" name="initiative" id="initiative" min="0" max="3" required>
        </div>
        <br>
        <div class="question20">
            <label for="work">Я теряю интерес к работе или учебе.</label>
            <input type="number" name="work" id="work" min="0" max="3" required>
        </div>
        <br>
        <div class="question21">
            <label for="tiredness">Мне трудно держать в голове мысли или я чувствую себя усталым(ой) от всего.</label>
            <input type="number" name="tiredness" id="tiredness" min="0" max="3" required>
        </div>
        <br>
        <div class="question22">
            <label for="failure">Я чувствую себя неудачником или думаю, что никогда не буду добиваться успеха.</label>
            <input type="number" name="failure" id="failure" min="0" max="3" required>
        </div>
        <br>
        <div class="question23">
            <label for="nervous">Я нервничаю или испытываю напряжение.</label>
            <input type="number" name="nervous" id="nervous" min="0" max="3" required>
        </div>
        <br>
        <input type="submit" value="Отправить">

</body>
</html>
