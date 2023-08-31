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
    <h1>Сауалнама</h1>
    <a href="test.php" class="russian-button">Русская версия</a>
    <form action="save_answers.php" method="post">
        <label for="fullname">ФИО:</label>
        <input type="text" id="fullname" name="fullname" required>
        <br><br>
        <label for="phone">Телефон номері:</label>
        <input type="text" id="phone" name="phone" required>
        <br><br>
        <label for="age">Жасыныз:</label>
        <input type="number" id="age" name="age" required>
        <br><br>
        <label for="faculty">Факультет:</label>
        <select id="faculty" name="faculty" required>
            <option value="Факультет 1">ОЖ</option>
            <option value="Факультет 2">ФИиИТ</option>
            <option value="Факультет 3">ГеоФак</option>
        </select>
        <br><br>
        <label for="eating-frequency" class="question">1. Сіз күніне қанша рет тамақтанасыз?</label>
        <input type="radio" id="eating-frequency1" name="eating_frequency" value="1 раз">
        <label for="eating-frequency1">1 рет</label>
        <input type="radio" id="eating-frequency2" name="eating_frequency" value="2 раза">
        <label for="eating-frequency2">2 рет</label>
        <input type="radio" id="eating-frequency3" name="eating_frequency" value="3 и более раз">
        <label for="eating-frequency3">3 немесе одан да көп</label>
        <br><br>
        <label for="eating-habits" class="question">2. Сіз не жейсіз?</label>
        <input type="radio" id="eating-habits1" name="eating_habits" value="Фруктами">
        <label for="eating-habits1">Жемістер</label>
        <input type="radio" id="eating-habits2" name="eating_habits" value="Фастфудом">
        <label for="eating-habits2">Фастфуд</label>
        <input type="radio" id="eating-habits3" name="eating_habits" value="Готовой продукцией">
        <label for="eating-habits3">Дайын тамақ</label>
        <input type="radio" id="eating-habits4" name="eating_habits" value="Готовлю полезную еду">
        <label for="eating-habits4">Пайдалы тағамдарды</label>
        <br><br>
        <label for="food-preferences" class="question">3. Сізде ерекше тағам таңдауыңыз бар ма?</label>
        <input type="radio" id="food-preferences1" name="food_preferences" value="Исключаю продукты животного происхождения">
        <label for="food-preferences1">Мен жануарлардан алынатын өнімдерді алып тастаймын</label>
        <input type="radio" id="food-preferences2" name="food_preferences" value="Исключаю молочные продукты">
        <label for="food-preferences2">Мен сүт өнімдерін қоспаймын</label>
        <input type="radio" id="food-preferences3" name="food_preferences" value="Исключаю рыбу и рыбные продукты">
        <label for="food-preferences3">Мен балық пен балық өнімдерін қоспаймын</label>
        <input type="radio" id="food-preferences4" name="food_preferences" value="Исключаю мясо птицы">
        <label for="food-preferences4">Мен құс етін қоспаймын</label>
        <input type="radio" id="food-preferences5" name="food_preferences" value="Исключаю глютен">
        <label for="food-preferences5">Мен глютенді алып тастаймын</label>
        <input type="radio" id="food-preferences6" name="food_preferences" value="Нет, у меня нет особых предпочтений в рационе">
        <label for="food-preferences6">Жоқ, менің диетада ерекше қалауым жоқ</label>
        <br><br>
        <label for="breakfast-frequency" class="question">4. Сіз таңғы асты қаншалықты жиі ішесіз?</label>
        <input type="radio" id="breakfast-frequency1" name="breakfast_frequency" value="Я завтракаю каждый день">
        <label for="breakfast-frequency1">Мен күн сайын таңғы ас ішемін</label>
        <input type="radio" id="breakfast-frequency2" name="breakfast_frequency" value="Я могу пропустить 1-2 дня завтрака в неделю">
        <label for="breakfast-frequency2">Мен аптасына 1-2 күн таңғы асты өткізіп жібере аламын</label>
        <input type="radio" id="breakfast-frequency3" name="breakfast_frequency" value="Завтракаю только по выходным">
        <label for="breakfast-frequency3">Мен тек демалыс күндері таңғы ас ішемін</label>
        <input type="radio" id="breakfast-frequency4" name="breakfast_frequency" value="Я никогда не завтракаю">
        <label for="breakfast-frequency4">Мен ешқашан таңғы ас ішпеймін</label>
        <br><br>
        <label for="breakfast-content" class="question">5. Сіздің таңғы асыңызға не кіреді?</label>
        <input type="radio" id="breakfast-content1" name="breakfast_content" value="В основном белки (яйцо, творог, тофу, мясо, нут, курица и т.д.)">
        <label for="breakfast-content1">Негізінен ақуыздар (жұмыртқа, сүзбе, тофу, ет, ноқат, тауық және т. б.)</label>
        <input type="radio" id="breakfast-content2" name="breakfast_content" value="В основном углеводы (тост, варенье, печенье, хлопья, каша и т.д.)">
        <label for="breakfast-content2">Негізінен көмірсулар (тост, Джем, печенье, жарма, жарма және т. б.)</label>
        <input type="radio" id="breakfast-content3" name="breakfast_content" value="Только кофе">
        <label for="breakfast-content3">Тек кофе</label>
        <input type="radio" id="breakfast-content4" name="breakfast_content" value="Только чай">
        <label for="breakfast-content4">Тек шай</label>
        <br><br>
        <label for="lunch-frequency" class="question">6. Сіз қаншалықты жиі түскі ас ішесіз?</label>
        <input type="radio" id="lunch-frequency1" name="lunch_frequency" value="Я обедаю каждый день">
        <label for="lunch-frequency1">Мен күн сайын түскі ас ішемін</label>
        <input type="radio" id="lunch-frequency2" name="lunch_frequency" value="Я могу пропустить 1-2 дня обеда в неделю">
        <label for="lunch-frequency2">Мен аптасына 1-2 күндік түскі асты өткізіп жібере аламын</label>
        <input type="radio" id="lunch-frequency3" name="lunch_frequency" value="Я обедаю только по выходным">
        <label for="lunch-frequency3">Мен тек демалыс күндері түскі ас ішемін</label>
        <input type="radio" id="lunch-frequency4" name="lunch_frequency" value="Я никогда не обедаю">
        <label for="lunch-frequency4">Мен ешқашан түскі ас ішпеймін</label>
        <br><br>
        <label for="lunch-content" class="question">7. Сіздің түскі асыңызға не кіреді?</label>
        <input type="radio" id="lunch-content1" name="lunch_content" value="Полноценный обед - основное блюдо, супы и салаты">
        <label for="lunch-content1">Толық түскі ас-негізгі тағам, сорпалар мен салаттар</label>
        <input type="radio" id="lunch-content2" name="lunch_content" value="В основном мой обед состоит из фастфуда (бургеры, фри)">
        <label for="lunch-content2">Менің түскі асым негізінен фаст-фудтан тұрады (гамбургерлер, фри)</label>
        <input type="radio" id="lunch-content3" name="lunch_content" value="В основном мой обед состоит из пирожков, самс, донеров">
        <label for="lunch-content3">Негізінен менің түскі асым пирогтардан тұрады, с өзі, донорлар</label>
        <input type="radio" id="lunch-content4" name="lunch_content" value="Только супы">
        <label for="lunch-content4">Тек сорпалар</label>
        <input type="radio" id="lunch-content5" name="lunch_content" value="Только основные блюда (плов, манты, пельмени и др.)">
        <label for="lunch-content5">Тек негізгі тағамдар (Палау, манты, тұшпара және т. б.)</label>
        <br><br>
        <label for="snack-frequency" class="question">8. Күні бойы сіз тіскебасарларды қаншалықты жиі жасайсыз?</label>
        <input type="radio" id="snack-frequency1" name="snack_frequency" value="1-2 раза">
        <label for="snack-frequency1">1-2 рет</label>
        <input type="radio" id="snack-frequency2" name="snack_frequency" value="3-4 раза">
        <label for="snack-frequency2">3-4 рет</label>
        <input type="radio" id="snack-frequency3" name="snack_frequency" value="Больше 4 раз">
        <label for="snack-frequency3">4 реттен көп</label>
        <input type="radio" id="snack-frequency4" name="snack_frequency" value="Никогда">
        <label for="snack-frequency4">Ешқашан</label>
        <br><br>
        <label for="snack-content" class="question">9. Сіздің тағамдарыңызға не кіреді?</label>
        <input type="radio" id="snack-content1" name="snack_content" value="Сладкое (шоколадные батончики, печенье, булочки и т.д.)">
        <label for="snack-content1">Тәттілер (шоколадные батончики, печенье, булочки и т.д.)</label>
        <input type="radio" id="snack-content2" name="snack_content" value="Фрукты, овощи">
        <label for="snack-content2">Жеміс көкөністер</label>
        <input type="radio" id="snack-content3" name="snack_content" value="Фастфуд (бургеры, донеры, самса, пирожки, круассаны, кексы)">
        <label for="snack-content3">Фастфуд (бургеры, донеры, самса, пирожки, круассаны, кексы)</label>
        <br><br>
        <label for="dinner-time" class="question">10. Сіз қашан кешкі ас ішесіз?</label>
        <input type="radio" id="dinner-time1" name="dinner_time" value="Между 6 или 8 ч вечера">
        <label for="dinner-time1">Кешкі 6 немесе 8 арасында</label>
        <input type="radio" id="dinner-time2" name="dinner_time" value="С 8 до 10 вечера">
        <label for="dinner-time2">Кешкі 8 ден 10 ға дейін</label>
        <input type="radio" id="dinner-time3" name="dinner_time" value="С 10 до 12 ночи">
        <label for="dinner-time3">Түнгі 10 дан 12 ге дейін</label>
        <input type="radio" id="dinner-time4" name="dinner_time" value="Позже 12 ч ночи">
        <label for="dinner-time4">Түнгі 12-ден кейін</label>
        <input type="radio" id="dinner-time5" name="dinner_time" value="Не ужинаю">
        <label for="dinner-time5">Мен кешкі ас ішпеймін</label>
        <br><br>
        <label for="red-meat-consumption" class="question">11. Сіз қызыл ет (сиыр еті, жылқы еті, қой еті, бұзау еті) жейсіз бе?</label>
        <input type="radio" id="red-meat-consumption1" name="red_meat_consumption" value="Да, употребляю не меньше 3 раз в неделю">
        <label for="red-meat-consumption1">Ия, мен оны аптасына кемінде 3 рет қолданамын</label>
        <input type="radio" id="red-meat-consumption2" name="red_meat_consumption" value="Да, употребляю каждый день">
        <label for="red-meat-consumption2">Ия, мен оны күн сайын қолданамын</label>
        <input type="radio" id="red-meat-consumption3" name="red_meat_consumption" value="Да, употребляю один раз в неделю">
        <label for="red-meat-consumption3">Ия, мен оны аптасына бір рет қолданамын</label>
        <input type="radio" id="red-meat-consumption4" name="red_meat_consumption" value="Не употребляю красное мясо">
        <label for="red-meat-consumption4">Мен қызыл ет жемеймін</label>
        <br><br>
        <label for="fish-consumption" class="question">12. Сіз балықты (тунец, треска, майшабақ, алабұға, форель, лосось, бекіре) тұтынасыз ба?</label>
        <input type="radio" id="fish-consumption1" name="fish_consumption" value="Да, употребляю не больше 1 раза в 2 месяца">
        <label for="fish-consumption1">Ия, мен 2 айда 1 реттен көп емес қолданамын</label>
        <input type="radio" id="fish-consumption2" name="fish_consumption" value="Да, употребляю каждый месяц">
        <label for="fish-consumption2">Ия, мен оны ай сайын қолданамын</label>
        <input type="radio" id="fish-consumption3" name="fish_consumption" value="Да, употребляю один раз в неделю">
        <label for="fish-consumption3">Ия, мен оны аптасына бір рет қолданамын</label>
        <input type="radio" id="fish-consumption4" name="fish_consumption" value="Не употребляю рыбу">
        <label for="fish-consumption4">Мен балықты тұтынбаймын</label>
        <br><br>
        <label for="fruit-frequency" class="question">13. Әдеттегі аптада сіз әдетте жаңа піскен жемістерді қанша күн тұтынасыз?</label>
        <input type="radio" id="fruit-frequency1" name="fruit_frequency" value="Каждый день">
        <label for="fruit-frequency1">Күн сайын</label>
        <input type="radio" id="fruit-frequency2" name="fruit_frequency" value="2-3 раза в неделю">
        <label for="fruit-frequency2">Аптасына 2-3 рет</label>
        <input type="radio" id="fruit-frequency3" name="fruit_frequency" value="Меньше одного дня в неделю">
        <label for="fruit-frequency3">Аптасына бір күннен аз</label>
        <input type="radio" id="fruit-frequency4" name="fruit_frequency" value="Не употребляю">
        <label for="fruit-frequency4">Мен оны қолданбаймын</label>
        <br><br>
        <label for="vegetable-frequency" class="question">14. Әдеттегі аптада сіз әдетте жаңа піскен көкөністер мен шөптерді қанша күн тұтынасыз?</label>
        <input type="radio" id="vegetable-frequency1" name="vegetable_frequency" value="Каждый день">
        <label for="vegetable-frequency1">Күн сайын</label>
        <input type="radio" id="vegetable-frequency2" name="vegetable_frequency" value="2-3 раза в неделю">
        <label for="vegetable-frequency2">Аптасына 2-3 рет</label>
        <input type="radio" id="vegetable-frequency3" name="vegetable_frequency" value="Меньше одного дня в неделю">
        <label for="vegetable-frequency3">Аптасына бір күннен аз</label>
        <input type="radio" id="vegetable-frequency4" name="vegetable_frequency" value="Не употребляю">
        <label for="vegetable-frequency4">Мен оны қолданбаймын</label>
        <br><br>
        <label for="waterConsumption" class="question">15. Күні бойы қанша литр таза су ішесіз (сорпа, шай, кофе, қантты сусындарды қоспағанда)?</label>
        <input type="radio" id="waterConsumption1" name="water_consumption" value="0,5-1 литра">
        <label for="waterConsumption1">0,5-1 литр</label>
        <input type="radio" id="waterConsumption2" name="water_consumption" value="1-1,5 литра">
        <label for="water-consumption2">1-1,5 литр</label>
        <input type="radio" id="waterConsumption3" name="water_consumption" value="1,5-2 литра">
        <label for="water-consumption3">1,5-2 литр</label>
        <input type="radio" id="water-consumption4" name="water_consumption" value="Больше 2 литров">
        <label for="water-consumption4">2 литрден көп</label>
        <br><br>
        <label for="soft-drink-consumption" class="question">16. Күні бойы қанша мл қантты сода ішесіз?</label>
        <input type="radio" id="soft-drink-consumption1" name="soft_drink_consumption" value="250-300 мл (одна маленькая стеклянная бутылка)">
        <label for="soft-drink-consumption1">250-300 мл</label>
        <input type="radio" id="soft-drink-consumption2" name="soft_drink_consumption" value="500 мл (одна обычная маленькая бутылка)">
        <label for="soft-drink-consumption2">500 мл</label>
        <input type="radio" id="soft-drink-consumption3" name="soft_drink_consumption" value="1000 мл (одна большая бутылка)">
        <label for="soft-drink-consumption3">1000 мл</label>
        <input type="radio" id="soft-drink-consumption4" name="soft_drink_consumption" value="Больше 1000 мл (больше одной большой бутылки)">
        <label for="soft-drink-consumption4">1000 млден көп</label>
        <input type="radio" id="soft-drink-consumption5" name="soft_drink_consumption" value="Не пью газированных напитков">
        <label for="soft-drink-consumption5">мен сода ішпеймін</label>
        <br><br>
        <label for="energy-drink-consumption" class="question">17. Күні бойы қанша энергетикалық сусындарды (Red Bull, Dizzy, Adrenalin, Gorilla және т. б.) тұтынасыз?</label>
        <input type="radio" id="energy-drink-consumption1" name="energy_drink_consumption" value="250 мл (одна маленькая банка)">
        <label for="energy-drink-consumption1">250 мл</label>
        <input type="radio" id="energy-drink-consumption2" name="energy_drink_consumption" value="350 мл (одна средняя банка)">
        <label for="energy-drink-consumption2">350 мл</label>
        <input type="radio" id="energy-drink-consumption3" name="energy_drink_consumption" value="500 мл (одна большая банка)">
        <label for="energy-drink-consumption3">500 мл</label>
        <input type="radio" id="energy-drink-consumption4" name="energy_drink_consumption" value="Больше 1000 мл">
        <label for="energy-drink-consumption4">1000 мл</label>
        <input type="radio" id="energy-drink-consumption5" name="energy_drink_consumption" value="Не пью энергетических напитков">
        <label for="energy-drink-consumption5">Энергетик ішпеймін</label>
        <br><br>
        <label for="salty-food-intake" class="question">18. Сіздің әдеттегі тағамыңыз қаншалықты тұзды?</label>
        <input type="radio" id="salty-food-intake1" name="salty_food_intake" value="Я вообще не солю еду">
        <label for="salty-food-intake1">Тұз қоспаймын</label>
        <input type="radio" id="salty-food-intake2" name="salty_food_intake" value="Я мало солю еду">
        <label for="salty-food-intake2">Тұз аз қосамын</label>
        <input type="radio" id="salty-food-intake3" name="salty_food_intake" value="Я солю еду умеренно">
        <label for="salty-food-intake3">Тұзды тамақтың дәміне қарай қосамын</label>
        <input type="radio" id="salty-food-intake4" name="salty_food_intake" value="Я люблю соленую пищу и не жалею соли в еду">
        <label for="salty-food-intake4">Тұзы көп тамақты ұнатамын</label>
        <input type="radio" id="salty-food-intake5" name="salty_food_intake" value="Не обращал внимания насколько моя пища соленая">
        <label for="salty-food-intake5">Мән бермей жей беремін</label>
        <br><br>
        <label for="iodized-salt-usage" class="question">19. Үйде тамақ дайындау кезінде йодталған тұзды қолданасыз ба?</label>
        <input type="radio" id="iodized-salt-usage1" name="iodized_salt_usage" value="Да, всегда покупаю только йодированную соль">
        <label for="iodized-salt-usage1">Иә, Мен әрқашан тек йодталған тұзды сатып аламын</label>
        <input type="radio" id="iodized-salt-usage2" name="iodized_salt_usage" value="Не обращал внимания, покупаю любую соль">
        <label for="iodized-salt-usage2">Мен назар аудармадым, кез-келген тұзды сатып аламын</label>
        <br><br>
        <label for="outside-food-consumption" class="question">20. Үйден тыс жерде дайындалған тағамды қаншалықты жиі жейсіз?</label>
        <input type="radio" id="outside-food-consumption1" name="outside_food_consumption" value="Редко, по выходным, в основном это кафе, столовые или рестораны">
        <label for="outside-food-consumption1">Демалыс күндері көбінесе кафелер, асханалар немесе мейрамханалар сирек кездеседі</label>
        <input type="radio" id="outside-food-consumption2" name="outside_food_consumption" value="Редко, по выходным, в основном это бургеры, фри, пицца, донеры, пирожки, самса">
        <label for="outside-food-consumption2">Сирек, демалыс күндері, негізінен гамбургерлер, фри, пицца, донерлер, пирожныйлар, самса</label>
        <input type="radio" id="outside-food-consumption3" name="outside_food_consumption" value="Часто, каждый день, в основном это кафе, столовые или рестораны">
        <label for="outside-food-consumption3">Көбінесе, күн сайын, негізінен кафелер, асханалар немесе мейрамханалар</label>
        <input type="radio" id="outside-food-consumption4" name="outside_food_consumption" value="Часто, каждый день, в основном это бургеры, фри, пицца, донеры, пирожки, самса">
        <label for="outside-food-consumption4">Көбінесе, күн сайын, негізінен гамбургерлер, фри, пицца, донерлер, пирожныйлар, самса</label>
        <br><br>
        <label for="tooth-brushing-frequency" class="question">21. Күніне қанша рет тістеріңізді тазалайсыз?</label>
        <input type="radio" id="tooth-brushing-frequency1" name="tooth_brushing_frequency" value="Утром перед завтраком">
        <label for="tooth-brushing-frequency1">Таңертен тамақ алдында</label>
        <input type="radio" id="tooth-brushing-frequency2" name="tooth_brushing_frequency" value="Утром после завтрака">
        <label for="tooth-brushing-frequency2">Таңертен тамақтан кейін</label>
        <input type="radio" id="tooth-brushing-frequency3" name="tooth_brushing_frequency" value="Вечером перед сном">
        <label for="tooth-brushing-frequency3">Кешке жатар алдында</label>
        <input type="radio" id="tooth-brushing-frequency4" name="tooth_brushing_frequency" value="После каждого приема пищи">
        <label for="tooth-brushing-frequency4">Әр тамақ жеген сайын</label>
        <br><br>
        <label for="toothbrush-replacement-frequency" class="question">22. Тіс щеткасын қаншалықты жиі ауыстырасыз?</label>
        <input type="radio" id="toothbrush-replacement-frequency1" name="toothbrush_replacement_frequency" value="Раз в месяц">
        <label for="toothbrush-replacement-frequency1">Айына бір рет</label>
        <input type="radio" id="toothbrush-replacement-frequency2" name="toothbrush_replacement_frequency" value="Раз в 3 месяца">
        <label for="toothbrush-replacement-frequency2">Үш айда бір рет</label>
        <input type="radio" id="toothbrush-replacement-frequency3" name="toothbrush_replacement_frequency" value="Раз в полгода">
        <label for="toothbrush-replacement-frequency3">Жарты жылда бір рет</label>
        <input type="radio" id="toothbrush-replacement-frequency4" name="toothbrush_replacement_frequency" value="Раз в год">
        <label for="toothbrush-replacement-frequency4">Жылына бір рет</label>
        <br><br>
        <label for="dental-checkup-frequency" class="question">23. Профилактикалық тексеру үшін тіс дәрігеріне қаншалықты жиі барасыз?</label>
        <input type="radio" id="dental-checkup-frequency1" name="dental_checkup_frequency" value="Один раз в полгода">
        <label for="dental-checkup-frequency1">Жарты жылда бір рет</label>
        <input type="radio" id="dental-checkup-frequency2" name="dental_checkup_frequency" value="Один раз в год">
        <label for="dental-checkup-frequency2">Жылына бір рет</label>
        <input type="radio" id="dental-checkup-frequency3" name="dental_checkup_frequency" value="Менее раза в год">
        <label for="dental-checkup-frequency3">Жылына бір реттен кем</label>
        <input type="radio" id="dental-checkup-frequency4" name="dental_checkup_frequency" value="Никогда не посещала">
        <label for="dental-checkup-frequency4">Ешқашан бармадым</label>
        <br><br>
        <label for="abdominal-pain" class="question">24. Сіз іштің жоғарғы бөлігінде ауырсынуды сезінесіз бе?</label>
        <input type="radio" id="abdominal-pain1" name="abdominal_pain" value="Нет, я не испытываю болей в животе.">
        <label for="abdominal-pain1">Жоқ, мен іштің ауырсынуын сезінбеймін.</label>
        <input type="radio" id="abdominal-pain2" name="abdominal_pain" value="Да, бывают боли в животе если я за один раз съел очень много еды.">
        <label for="abdominal-pain2">Иә, іштің ауыруы бар егер Мен бір уақытта көп тамақ жесем.</label>
        <input type="radio" id="abdominal-pain3" name="abdominal_pain" value="Да, бывают боли в животе когда я голоден. Если я поем то боль утихает.">
        <label for="abdominal-pain3">Иә, бар іштің ауыруы мен аш болған кезде. Егер мен ән айтсам, ауырсыну басылады.</label>
        <input type="radio" id="abdominal-pain4" name="abdominal_pain" value="Да, бывают боли в животе после еды, поэтому мне приходится есть маленькими порциями и почаще.">
        <label for="abdominal-pain4">ИЯ, тамақ ішкеннен кейін іштің ауыруы бар, сондықтан мен кішкене бөліктерде және жиі тамақтануым керек.</label>
        <br><br>
        <label for="heartburn" class="question">25. Сіз қыжыл сезінесіз бе?</label>
        <input type="radio" id="heartburn1" name="heartburn" value="Нет, я не испытываю изжогу.">
        <label for="heartburn1">Жоқ, менде қыжыл жоқ.</label>
        <input type="radio" id="heartburn2" name="heartburn" value="Да, бывает изжога если я за один раз съел очень много еды.">
        <label for="heartburn2">Иә, бар күйдіргі егер Мен бір уақытта көп тамақ жесем.</label>
        <input type="radio" id="heartburn3" name="heartburn" value="Да, бывает изжога когда я кушаю и ложусь спать или просто принимаю горизонтальное положение.">
        <label for="heartburn3">Иә, бар күйдіргі мен тамақ ішіп, төсекке жатқанда немесе жай ғана көлденең позицияны қабылдағанда.</label>
        <input type="radio" id="heartburn4" name="heartburn" value="Да, бывает изжога всегда после еды, поэтому мне приходится есть маленькими порциями и почаще.">
        <label for="heartburn4">ИЯ, тамақ ішкеннен кейін әрдайым күйдіргі болады, сондықтан мен кішкене бөліктерде және жиі тамақтануым керек.</label>
        <br><br>
        <label for="food-poisoning" class="question">26. Сізде тамақтан улану жағдайлары болды ма?</label>
        <input type="radio" id="food-poisoning1" name="food_poisoning" value="Не было никогда.">
        <label for="food-poisoning1">Ешқашан болған емес.</label>
        <input type="radio" id="food-poisoning2" name="food_poisoning" value="Было, в прошлом месяце.">
        <label for="food-poisoning2">Өткен айда болды.</label>
        <input type="radio" id="food-poisoning3" name="food_poisoning" value="Было, в течение последних 6 месяцев.">
        <label for="food-poisoning3">Соңғы 6 айда болды.</label>
        <input type="radio" id="food-poisoning4" name="food_poisoning" value="Было, в течение последнего года.">
        <label for="food-poisoning4">Соңғы жылы болды.</label>
        <br><br>
        <label for="alcohol" class="question">27. Алкогольге қалай қарайсыз?</label>
        <input type="radio" id="alcohol1" name="alcohol" value="Резко отрицательно, сам не употребляю и не поощряю употребление алкоголя в моем окружении.">
        <label for="alcohol1">Күрт теріс, мен өзім ішпеймін және қоршаған ортада алкогольді ішуді ынталандырмаймын.</label>
        <input type="radio" id="alcohol2" name="alcohol" value="Нейтральное отношение – сам не употребляю, но не упрекаю тех, кто употребляет алкоголь.">
        <label for="alcohol2">Бейтарап көзқарас - мен өзім ішпеймін, бірақ алкогольді ішетіндерді сөгбеймін.</label>
        <input type="radio" id="alcohol3" name="alcohol" value="Могу выпить в компании, при застольях слабо-алкогольные (пиво, вино, сладкие напитки с низким содержанием алкоголя в 3-5%) 1 раз в месяц.">
        <label for="alcohol3">Мен компанияда айына 1 рет алкогольсіз алкогольді (сыра, шарап, алкогольі аз қантты сусындар 3-5%) іше аламын.</label>
        <input type="radio" id="alcohol4" name="alcohol" value="Могу выпить слабо-алкогольные (пиво) несколько раз в неделю.">
        <label for="alcohol4">Мен аптасына бірнеше рет алкогольсіз (сыра) іше аламын.</label>
        <input type="radio" id="alcohol5" name="alcohol" value="Могу выпить в компании, при застольях крепкие алкогольные напитки (водка, виски) 1 раз в месяц.">
        <label for="alcohol5">Мен компанияда, мереке кезінде айына 1 рет күшті алкогольдік сусындарды (арақ, виски) іше аламын.</label>
        <br><br>
        <label for="smoking" class="question">28. Сіз темекі шегуге қалай қарайсыз?</label>
        <input type="radio" id="smoking1" name="smoking" value="Резко отрицательно, сам не курю и не поощряю любое курение в моем окружении.">
        <label for="smoking1">Күрт теріс, мен өзім темекі шекпеймін және айналамдағы кез-келген темекі шегуді ынталандырмаймын.</label>
        <input type="radio" id="smoking2" name="smoking" value="Нейтральное отношение – сам не курю, но не упрекаю тех, кто курит.">
        <label for="smoking2">Бейтарап көзқарас-мен өзім темекі шекпеймін, бірақ темекі шегетіндерді сөгбеймін.</label>
        <input type="radio" id="smoking3" name="smoking" value="Считаю, что электронные сигареты безопаснее обычных.">
        <label for="smoking3">Менің ойымша, электронды темекі әдеттегіден гөрі қауіпсіз.</label>
        <input type="radio" id="smoking4" name="smoking" value="Считаю, что вейпы безопаснее обычных сигарет.">
        <label for="smoking4">Менің ойымша, вапалар қарапайым темекіге қарағанда қауіпсіз.</label>
        <input type="radio" id="smoking5" name="smoking" value="Считаю, что курить кальян в компании на тусовках не повредит здоровью.">
        <label for="smoking5">Компанияда кальян шегу денсаулыққа зиян тигізбейді деп санаймын.</label>
        <br><br>

        <input type="submit" value="Отправить">
    </form>
</div>
</body>
</html>