<!DOCTYPE html>
<html>
<head>
    <title>Психологиялық сауалнама</title>
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

        .question {
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 10px;
            font-size: 20px;
            color: darkgreen;
        }
        .russian-button {
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
    <h1>Психологиялық сауалнама</h1>
    <a href="psycho_test.php" class="russian-button">Русская версия</a>
    <form action="test_answers.php" method="POST">
        <label for="name">Аты:</label>
        <input type="text" name="name" id="name" required><br>

        <label for="phone">Номері:</label>
        <input type="text" name="phone" id="phone" required><br>

        <label for="age">Жасы:</label>
        <input type="number" name="age" id="age" required><br>

        <label for="faculty">Факультет:</label>
        <input type="text" name="faculty" id="faculty" required><br>

        <h2>0-ден 3-ке дейінгі келесі мәлімдемелерді бағалаңыз, мұнда:</h2>
        <ul>
            <li>0 - Жоқ</li>
            <li>1 - Кейде</li>
            <li>2 - Жиі</li>
            <li>3 - Тұрақты</li>
        </ul>

        <div class="question">
            <label for="upset">Мен көңілсізбін немесе ренжулімін.</label>
            <input type="number" name="upset" id="upset" min="0" max="3" required>
        </div>
        <br>
        <div class="question">
            <label for="future">Мен қорқыныш сезіп тұрмын немесе болашақта жағымсыз оқиғаларды күтемін.</label>
            <input type="number" name="future" id="future" min="0" max="3" required>
        </div>
        <br>
        <div class="question">
            <label for="unlucky">Мен өзімді сәтсіздікке ұшырағандай сезінемін немесе Менде бәрі дұрыс емес деп ойлаймын.</label>
            <input type="number" name="unlucky" id="unlucky" min="0" max="3" required>
        </div>
        <br>
        <div class="question">
            <label for="pleasure">Маған бұрын ұнаған қарапайым нәрселерден ләззат алу қиын.</label>
            <input type="number" name="pleasure" id="pleasure" min="0" max="3" required>
        </div>
        <br>
        <div class="question">
            <label for="guilty">Мен себепсіз өзімді кінәлі сезінемін немесе болып жатқан барлық жаман нәрселер үшін өзімді кінәлі сезінемін.</label>
            <input type="number" name="guilty" id="guilty" min="0" max="3" required>
        </div>
        <br>
        <div class="question">
            <label for="sleep">Маған ұйықтау қиын немесе үздіксіз және ұзақ ұйықтау қиын.</label>
            <input type="number" name="sleep" id="sleep" min="0" max="3" required>
        </div>
        <br>
        <div class="question">
            <label for="appetite">Мен тәбетімді жоғалттым немесе тым көп жеймін.</label>
            <input type="number" name="appetite" id="appetite" min="0" max="3" required>
        </div>
        <br>
        <div class="question">
            <label for="weight">Мен ешқандай себепсіз салмақ жоғалттым немесе салмақ қостым.</label>
            <input type="number" name="weight" id="weight" min="0" max="3" required>
        </div>
        <br>
        <div class="question">
            <label for="fatigue">Мен өзімді шаршағандай сезінемін немесе энергиясыз.</label>
            <input type="number" name="fatigue" id="fatigue" min="0" max="3" required>
        </div>
        <br>
        <div class="question">
            <label for="concentration">Маған зейін қою қиын немесе зейінімді оңай жоғалтамын.</label>
            <input type="number" name="concentration" id="concentration" min="0" max="3" required>
        </div>
        <br>
        <div class="question">
            <label for="decision">Маған шешім қабылдау қиын немесе қабылданған шешімдерге күмәнданамын.</label>
            <input type="number" name="decision" id="decision" min="0" max="3" required>
        </div>
        <br>
        <div class="question">
            <label for="worthless">Мен өзімді түкке тұрғысыз немесе үмітсіз сезінемін.</label>
            <input type="number" name="worthless" id="worthless" min="0" max="3" required>
        </div>
        <br>
        <div class="question">
            <label for="suicide">Менің ойыма суицид туралы ойлар келеді немесе өзіме зиян келтіру туралы ойлаймын.</label>
            <input type="number" name="suicide" id="suicide" min="0" max="3" required>
        </div>
        <br>
        <div class="question">
            <label for="crying">Мен жылаймын немесе ішімде бос сезінемін.</label>
            <input type="number" name="crying" id="crying" min="0" max="3" required>
        </div>
        <br>
        <div class="question">
            <label for="irritability">Мен ашуланшақпын немесе мен тез ашуға батамын.</label>
            <input type="number" name="irritability" id="irritability" min="0" max="3" required>
        </div>
        <br>
        <div class="question">
            <label for="social">Маған қоғамда немесе басқа адамдармен ыңғайлы болу қиын.</label>
            <input type="number" name="social" id="social" min="0" max="3" required>
        </div>
        <br>
        <div class="question">
            <label for="loss_interest">Мен бұрын мені қызықтырған нәрсеге деген қызығушылығымды жоғалттым.</label>
            <input type="number" name="loss_interest" id="loss_interest" min="0" max="3" required>
        </div>
        <br>
        <div class="question">
            <label for="energy">Менің белсенділігім төмендеді немесе өзімді баяу сезінемін.</label>
            <input type="number" name="energy" id="energy" min="0" max="3" required>
        </div>
        <br>
        <div class="question">
            <label for="initiative">Маған жұмысты бастау немесе аяқтау қиын.</label>
            <input type="number" name="initiative" id="initiative" min="0" max="3" required>
        </div>
        <br>
        <div class="question">
            <label for="work">Мен жұмысқа немесе оқуға деген қызығушылығымды жоғалтамын.</label>
            <input type="number" name="work" id="work" min="0" max="3" required>
        </div>
        <br>
        <div class="question">
            <label for="tiredness">Менің ойымды ойымда ұстау қиын немесе мен бәрінен шаршағандай сезінемін.</label>
            <input type="number" name="tiredness" id="tiredness" min="0" max="3" required>
        </div>
        <br>
        <div class="question">
            <label for="failure">Мен өзімді сәтсіз сезінемін немесе ешқашан жетістікке жете алмаймын деп ойлаймын.</label>
            <input type="number" name="failure" id="failure" min="0" max="3" required>
        </div>
        <br>
        <div class="question">
            <label for="nervous">Мен қобалжыдым немесе шиеленісті сезінемін.</label>
            <input type="number" name="nervous" id="nervous" min="0" max="3" required>
        </div>
        <br>
        <input type="submit" value="Отправить">
    </form>
</div>
</body>
</html>
