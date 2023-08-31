<!DOCTYPE html>
<html>
<head>
    <title>Опрос</title>
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
    <h1>Опрос</h1>
    <a href="test_kaz.php" class="kazakh-button">Қазақша версиясы</a>
    <form action="save_answers.php" method="post">
        <label for="fullname">ФИО:</label>
        <input type="text" id="fullname" name="fullname" required>
        <br><br>
        <label for="phone">Номер телефона:</label>
        <input type="text" id="phone" name="phone" required>
        <br><br>
        <label for="age">Возраст:</label>
        <input type="number" id="age" name="age" required>
        <br><br>
        <label for="faculty">Факультет:</label>
        <select id="faculty" name="faculty" required>
            <option value="ОЖ">ОЖ</option>
            <option value="ФИиИТ">ФИиИТ</option>
            <option value="ГеоФак">ГеоФак</option>
        </select>
            <br><br>
                <label for="eating-frequency" class="question">1. Сколько раз вы едите за день?</label>
                <input type="radio" id="eating-frequency1" name="eating_frequency" value="1 раз">
                <label for="eating-frequency1">1 раз</label>
                <input type="radio" id="eating-frequency2" name="eating_frequency" value="2 раза">
                <label for="eating-frequency2">2 раза</label>
                <input type="radio" id="eating-frequency3" name="eating_frequency" value="3 и более раз">
                <label for="eating-frequency3">3 и более раз</label>
            <br><br>
                <label for="eating-habits" class="question">2. Чем вы питаетесь?</label>
                <input type="radio" id="eating-habits1" name="eating_habits" value="Фруктами">
                <label for="eating-habits1">Фруктами</label>
                <input type="radio" id="eating-habits2" name="eating_habits" value="Фастфудом">
                <label for="eating-habits2">Фастфудом</label>
                <input type="radio" id="eating-habits3" name="eating_habits" value="Готовой продукцией">
                <label for="eating-habits3">Готовой продукцией</label>
                <input type="radio" id="eating-habits4" name="eating_habits" value="Готовлю полезную еду">
                <label for="eating-habits4">Готовлю полезную еду</label>
            <br><br>
                <label for="food-preferences" class="question">3. Есть ли у вас особые предпочтения в еде?</label>
                <input type="radio" id="food-preferences1" name="food_preferences" value="Исключаю продукты животного происхождения">
                <label for="food-preferences1">Исключаю продукты животного происхождения</label>
                <input type="radio" id="food-preferences2" name="food_preferences" value="Исключаю молочные продукты">
                <label for="food-preferences2">Исключаю молочные продукты</label>
                <input type="radio" id="food-preferences3" name="food_preferences" value="Исключаю рыбу и рыбные продукты">
                <label for="food-preferences3">Исключаю рыбу и рыбные продукты</label>
                <input type="radio" id="food-preferences4" name="food_preferences" value="Исключаю мясо птицы">
                <label for="food-preferences4">Исключаю мясо птицы</label>
                <input type="radio" id="food-preferences5" name="food_preferences" value="Исключаю глютен">
                <label for="food-preferences5">Исключаю глютен</label>
                <input type="radio" id="food-preferences6" name="food_preferences" value="Нет, у меня нет особых предпочтений в рационе">
                <label for="food-preferences6">Нет, у меня нет особых предпочтений в рационе</label>
            <br><br>
                <label for="breakfast-frequency" class="question">4. Как часто вы завтракаете?</label>
                <input type="radio" id="breakfast-frequency1" name="breakfast_frequency" value="Я завтракаю каждый день">
                <label for="breakfast-frequency1">Я завтракаю каждый день</label>
                <input type="radio" id="breakfast-frequency2" name="breakfast_frequency" value="Я могу пропустить 1-2 дня завтрака в неделю">
                <label for="breakfast-frequency2">Я могу пропустить 1-2 дня завтрака в неделю</label>
                <input type="radio" id="breakfast-frequency3" name="breakfast_frequency" value="Завтракаю только по выходным">
                <label for="breakfast-frequency3">Завтракаю только по выходным</label>
                <input type="radio" id="breakfast-frequency4" name="breakfast_frequency" value="Я никогда не завтракаю">
                <label for="breakfast-frequency4">Я никогда не завтракаю</label>
            <br><br>
                <label for="breakfast-content" class="question">5. Что входит в ваш завтрак?</label>
                <input type="radio" id="breakfast-content1" name="breakfast_content" value="В основном белки (яйцо, творог, тофу, мясо, нут, курица и т.д.)">
                <label for="breakfast-content1">В основном белки (яйцо, творог, тофу, мясо, нут, курица и т.д.)</label>
                <input type="radio" id="breakfast-content2" name="breakfast_content" value="В основном углеводы (тост, варенье, печенье, хлопья, каша и т.д.)">
                <label for="breakfast-content2">В основном углеводы (тост, варенье, печенье, хлопья, каша и т.д.)</label>
                <input type="radio" id="breakfast-content3" name="breakfast_content" value="Только кофе">
                <label for="breakfast-content3">Только кофе</label>
                <input type="radio" id="breakfast-content4" name="breakfast_content" value="Только чай">
                <label for="breakfast-content4">Только чай</label>
            <br><br>
                <label for="lunch-frequency" class="question">6. Как часто вы обедаете?</label>
                <input type="radio" id="lunch-frequency1" name="lunch_frequency" value="Я обедаю каждый день">
                <label for="lunch-frequency1">Я обедаю каждый день</label>
                <input type="radio" id="lunch-frequency2" name="lunch_frequency" value="Я могу пропустить 1-2 дня обеда в неделю">
                <label for="lunch-frequency2">Я могу пропустить 1-2 дня обеда в неделю</label>
                <input type="radio" id="lunch-frequency3" name="lunch_frequency" value="Я обедаю только по выходным">
                <label for="lunch-frequency3">Я обедаю только по выходным</label>
                <input type="radio" id="lunch-frequency4" name="lunch_frequency" value="Я никогда не обедаю">
                <label for="lunch-frequency4">Я никогда не обедаю</label>
            <br><br>
                <label for="lunch-content" class="question">7. Что входит в ваш обед?</label>
                <input type="radio" id="lunch-content1" name="lunch_content" value="Полноценный обед - основное блюдо, супы и салаты">
                <label for="lunch-content1">Полноценный обед - основное блюдо, супы и салаты</label>
                <input type="radio" id="lunch-content2" name="lunch_content" value="В основном мой обед состоит из фастфуда (бургеры, фри)">
                <label for="lunch-content2">В основном мой обед состоит из фастфуда (бургеры, фри)</label>
                <input type="radio" id="lunch-content3" name="lunch_content" value="В основном мой обед состоит из пирожков, самс, донеров">
                <label for="lunch-content3">В основном мой обед состоит из пирожков, самс, донеров</label>
                <input type="radio" id="lunch-content4" name="lunch_content" value="Только супы">
                <label for="lunch-content4">Только супы</label>
                <input type="radio" id="lunch-content5" name="lunch_content" value="Только основные блюда (плов, манты, пельмени и др.)">
                <label for="lunch-content5">Только основные блюда (плов, манты, пельмени и др.)</label>
            <br><br>
                <label for="snack-frequency" class="question">8. Как часто в течение дня вы делаете перекусы?</label>
                <input type="radio" id="snack-frequency1" name="snack_frequency" value="1-2 раза">
                <label for="snack-frequency1">1-2 раза</label>
                <input type="radio" id="snack-frequency2" name="snack_frequency" value="3-4 раза">
                <label for="snack-frequency2">3-4 раза</label>
                <input type="radio" id="snack-frequency3" name="snack_frequency" value="Больше 4 раз">
                <label for="snack-frequency3">Больше 4 раз</label>
                <input type="radio" id="snack-frequency4" name="snack_frequency" value="Никогда">
                <label for="snack-frequency4">Никогда</label>
            <br><br>
                <label for="snack-content" class="question">9. Что входит в ваши перекусы?</label>
                <input type="radio" id="snack-content1" name="snack_content" value="Сладкое (шоколадные батончики, печенье, булочки и т.д.)">
                <label for="snack-content1">Сладкое (шоколадные батончики, печенье, булочки и т.д.)</label>
                <input type="radio" id="snack-content2" name="snack_content" value="Фрукты, овощи">
                <label for="snack-content2">Фрукты, овощи</label>
                <input type="radio" id="snack-content3" name="snack_content" value="Фастфуд (бургеры, донеры, самса, пирожки, круассаны, кексы)">
                <label for="snack-content3">Фастфуд (бургеры, донеры, самса, пирожки, круассаны, кексы)</label>
            <br><br>
                <label for="dinner-time" class="question">10. Во сколько вы ужинаете?</label>
                <input type="radio" id="dinner-time1" name="dinner_time" value="Между 6 или 8 ч вечера">
                <label for="dinner-time1">Между 6 или 8 ч вечера</label>
                <input type="radio" id="dinner-time2" name="dinner_time" value="С 8 до 10 вечера">
                <label for="dinner-time2">С 8 до 10 вечера</label>
                <input type="radio" id="dinner-time3" name="dinner_time" value="С 10 до 12 ночи">
                <label for="dinner-time3">С 10 до 12 ночи</label>
                <input type="radio" id="dinner-time4" name="dinner_time" value="Позже 12 ч ночи">
                <label for="dinner-time4">Позже 12 ч ночи</label>
                <input type="radio" id="dinner-time5" name="dinner_time" value="Не ужинаю">
                <label for="dinner-time5">Не ужинаю</label>
            <br><br>
                <label for="red-meat-consumption" class="question">11. Употребляете ли вы красное мясо (говядина, конина, баранина, телятина)?</label>
                <input type="radio" id="red-meat-consumption1" name="red_meat_consumption" value="Да, употребляю не меньше 3 раз в неделю">
                <label for="red-meat-consumption1">Да, употребляю не меньше 3 раз в неделю</label>
                <input type="radio" id="red-meat-consumption2" name="red_meat_consumption" value="Да, употребляю каждый день">
                <label for="red-meat-consumption2">Да, употребляю каждый день</label>
                <input type="radio" id="red-meat-consumption3" name="red_meat_consumption" value="Да, употребляю один раз в неделю">
                <label for="red-meat-consumption3">Да, употребляю один раз в неделю</label>
                <input type="radio" id="red-meat-consumption4" name="red_meat_consumption" value="Не употребляю красное мясо">
                <label for="red-meat-consumption4">Не употребляю красное мясо</label>
            <br><br>
                <label for="fish-consumption" class="question">12. Употребляете ли вы рыбу (тунец, треска, сельдь, окунь, карп, судак, форель, лосось, осётр)?</label>
                <input type="radio" id="fish-consumption1" name="fish_consumption" value="Да, употребляю не больше 1 раза в 2 месяца">
                <label for="fish-consumption1">Да, употребляю не больше 1 раза в 2 месяца</label>
                <input type="radio" id="fish-consumption2" name="fish_consumption" value="Да, употребляю каждый месяц">
                <label for="fish-consumption2">Да, употребляю каждый месяц</label>
                <input type="radio" id="fish-consumption3" name="fish_consumption" value="Да, употребляю один раз в неделю">
                <label for="fish-consumption3">Да, употребляю один раз в неделю</label>
                <input type="radio" id="fish-consumption4" name="fish_consumption" value="Не употребляю рыбу">
                <label for="fish-consumption4">Не употребляю рыбу</label>
            <br><br>
                <label for="fruit-frequency" class="question">13. Сколько дней в типичную неделю Вы обычно употребляете свежие фрукты?</label>
                <input type="radio" id="fruit-frequency1" name="fruit_frequency" value="Каждый день">
                <label for="fruit-frequency1">Каждый день</label>
                <input type="radio" id="fruit-frequency2" name="fruit_frequency" value="2-3 раза в неделю">
                <label for="fruit-frequency2">2-3 раза в неделю</label>
                <input type="radio" id="fruit-frequency3" name="fruit_frequency" value="Меньше одного дня в неделю">
                <label for="fruit-frequency3">Меньше одного дня в неделю</label>
                <input type="radio" id="fruit-frequency4" name="fruit_frequency" value="Не употребляю">
                <label for="fruit-frequency4">Не употребляю</label>
            <br><br>
                <label for="vegetable-frequency" class="question">14. Сколько дней в типичную неделю Вы обычно употребляете свежие овощи и зелень?</label>
                <input type="radio" id="vegetable-frequency1" name="vegetable_frequency" value="Каждый день">
                <label for="vegetable-frequency1">Каждый день</label>
                <input type="radio" id="vegetable-frequency2" name="vegetable_frequency" value="2-3 раза в неделю">
                <label for="vegetable-frequency2">2-3 раза в неделю</label>
                <input type="radio" id="vegetable-frequency3" name="vegetable_frequency" value="Меньше одного дня в неделю">
                <label for="vegetable-frequency3">Меньше одного дня в неделю</label>
                <input type="radio" id="vegetable-frequency4" name="vegetable_frequency" value="Не употребляю">
                <label for="vegetable-frequency4">Не употребляю</label>
            <br><br>
                <label for="waterConsumption" class="question">15. Сколько литров чистой воды вы употребляете в течение дня (без учета супов, чая, кофе, сладких напитков)?</label>
                <input type="radio" id="waterConsumption1" name="water_consumption" value="0,5-1 литра">
                <label for="waterConsumption1">0,5-1 литра</label>
                <input type="radio" id="waterConsumption2" name="water_consumption" value="1-1,5 литра">
                <label for="water-consumption2">1-1,5 литра</label>
                <input type="radio" id="waterConsumption3" name="water_consumption" value="1,5-2 литра">
                <label for="water-consumption3">1,5-2 литра</label>
                <input type="radio" id="water-consumption4" name="water_consumption" value="Больше 2 литров">
                <label for="water-consumption4">Больше 2 литров</label>
            <br><br>
                <label for="soft-drink-consumption" class="question">16. Сколько мл сладких газированных напитков вы употребляете в течение дня?</label>
                <input type="radio" id="soft-drink-consumption1" name="soft_drink_consumption" value="250-300 мл (одна маленькая стеклянная бутылка)">
                <label for="soft-drink-consumption1">250-300 мл (одна маленькая стеклянная бутылка)</label>
                <input type="radio" id="soft-drink-consumption2" name="soft_drink_consumption" value="500 мл (одна обычная маленькая бутылка)">
                <label for="soft-drink-consumption2">500 мл (одна обычная маленькая бутылка)</label>
                <input type="radio" id="soft-drink-consumption3" name="soft_drink_consumption" value="1000 мл (одна большая бутылка)">
                <label for="soft-drink-consumption3">1000 мл (одна большая бутылка)</label>
                <input type="radio" id="soft-drink-consumption4" name="soft_drink_consumption" value="Больше 1000 мл (больше одной большой бутылки)">
                <label for="soft-drink-consumption4">Больше 1000 мл (больше одной большой бутылки)</label>
                <input type="radio" id="soft-drink-consumption5" name="soft_drink_consumption" value="Не пью газированных напитков">
                <label for="soft-drink-consumption5">Не пью газированных напитков</label>
            <br><br>
                <label for="abdominal-pain" class="question">17. Испытываете ли вы боли в верхней части живота?</label>
                <input type="radio" id="abdominal-pain1" name="abdominal_pain" value="Нет, я не испытываю болей в животе.">
                <label for="abdominal-pain1">Нет, я не испытываю болей в животе.</label>
                <input type="radio" id="abdominal-pain2" name="abdominal_pain" value="Да, бывают боли в животе если я за один раз съел очень много еды.">
                <label for="abdominal-pain2">Да, бывают боли в животе если я за один раз съел очень много еды.</label>
                <input type="radio" id="abdominal-pain3" name="abdominal_pain" value="Да, бывают боли в животе когда я голоден. Если я поем то боль утихает.">
                <label for="abdominal-pain3">Да, бывают боли в животе когда я голоден. Если я поем то боль утихает.</label>
                <input type="radio" id="abdominal-pain4" name="abdominal_pain" value="Да, бывают боли в животе после еды, поэтому мне приходится есть маленькими порциями и почаще.">
                <label for="abdominal-pain4">Да, бывают боли в животе после еды, поэтому мне приходится есть маленькими порциями и почаще.</label>
            <br><br>
                <label for="heartburn" class="question">18. Испытываете ли вы изжогу?</label>
                <input type="radio" id="heartburn1" name="heartburn" value="Нет, я не испытываю изжогу.">
                <label for="heartburn1">Нет, я не испытываю изжогу.</label>
                <input type="radio" id="heartburn2" name="heartburn" value="Да, бывает изжога если я за один раз съел очень много еды.">
                <label for="heartburn2">Да, бывает изжога если я за один раз съел очень много еды.</label>
                <input type="radio" id="heartburn3" name="heartburn" value="Да, бывает изжога когда я кушаю и ложусь спать или просто принимаю горизонтальное положение.">
                <label for="heartburn3">Да, бывает изжога когда я кушаю и ложусь спать или просто принимаю горизонтальное положение.</label>
                <input type="radio" id="heartburn4" name="heartburn" value="Да, бывает изжога всегда после еды, поэтому мне приходится есть маленькими порциями и почаще.">
                <label for="heartburn4">Да, бывает изжога всегда после еды, поэтому мне приходится есть маленькими порциями и почаще.</label>
            <br><br>
                <label for="food-poisoning" class="question">19. Бывали ли у вас случаи пищевого отравления?</label>
                <input type="radio" id="food-poisoning1" name="food_poisoning" value="Не было никогда.">
                <label for="food-poisoning1">Не было никогда.</label>
                <input type="radio" id="food-poisoning2" name="food_poisoning" value="Было, в прошлом месяце.">
                <label for="food-poisoning2">Было, в прошлом месяце.</label>
                <input type="radio" id="food-poisoning3" name="food_poisoning" value="Было, в течение последних 6 месяцев.">
                <label for="food-poisoning3">Было, в течение последних 6 месяцев.</label>
                <input type="radio" id="food-poisoning4" name="food_poisoning" value="Было, в течение последнего года.">
                <label for="food-poisoning4">Было, в течение последнего года.</label>
            <br><br>
                <label for="alcohol" class="question">20. Как вы относитесь к алкоголю?</label>
                <input type="radio" id="alcohol1" name="alcohol" value="Резко отрицательно, сам не употребляю и не поощряю употребление алкоголя в моем окружении.">
                <label for="alcohol1">Резко отрицательно, сам не употребляю и не поощряю употребление алкоголя в моем окружении.</label>
                <input type="radio" id="alcohol2" name="alcohol" value="Нейтральное отношение – сам не употребляю, но не упрекаю тех, кто употребляет алкоголь.">
                <label for="alcohol2">Нейтральное отношение – сам не употребляю, но не упрекаю тех, кто употребляет алкоголь.</label>
                <input type="radio" id="alcohol3" name="alcohol" value="Могу выпить в компании, при застольях слабо-алкогольные (пиво, вино, сладкие напитки с низким содержанием алкоголя в 3-5%) 1 раз в месяц.">
                <label for="alcohol3">Могу выпить в компании, при застольях слабо-алкогольные (пиво, вино, сладкие напитки с низким содержанием алкоголя в 3-5%) 1 раз в месяц.</label>
                <input type="radio" id="alcohol4" name="alcohol" value="Могу выпить слабо-алкогольные (пиво) несколько раз в неделю.">
                <label for="alcohol4">Могу выпить слабо-алкогольные (пиво) несколько раз в неделю.</label>
                <input type="radio" id="alcohol5" name="alcohol" value="Могу выпить в компании, при застольях крепкие алкогольные напитки (водка, виски) 1 раз в месяц.">
                <label for="alcohol5">Могу выпить в компании, при застольях крепкие алкогольные напитки (водка, виски) 1 раз в месяц.</label>
            <br><br>
                <label for="smoking" class="question">21. Как вы относитесь к курению?</label>
                <input type="radio" id="smoking1" name="smoking" value="Резко отрицательно, сам не курю и не поощряю любое курение в моем окружении.">
                <label for="smoking1">Резко отрицательно, сам не курю и не поощряю любое курение в моем окружении.</label>
                <input type="radio" id="smoking2" name="smoking" value="Нейтральное отношение – сам не курю, но не упрекаю тех, кто курит.">
                <label for="smoking2">Нейтральное отношение – сам не курю, но не упрекаю тех, кто курит.</label>
                <input type="radio" id="smoking3" name="smoking" value="Считаю, что электронные сигареты безопаснее обычных.">
                <label for="smoking3">Считаю, что электронные сигареты безопаснее обычных.</label>
                <input type="radio" id="smoking4" name="smoking" value="Считаю, что вейпы безопаснее обычных сигарет.">
                <label for="smoking4">Не курю</label>
                <input type="radio" id="smoking5" name="smoking" value="Считаю, что курить кальян в компании на тусовках не повредит здоровью.">
                <label for="smoking5">Курю</label>
            <br><br>

        <input type="submit" value="Отправить">
    </form>
</div>
</body>
</html>