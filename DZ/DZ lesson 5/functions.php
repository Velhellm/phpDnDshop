<?php

    $genderArray = [
        "Мужской",
        "Женский",
    ];

    $raceArray = [
        "Аасимар",
        "Гном",
        "Гоблин",
        "Голиаф",
        "Дварф",
        "Драконорожденный",
        "Полуорк",
        "Полурослик",
        "Полуэльф",
        "Табакси",
        "Темный эльф",
        "Тифлинг",
        "Халфлинг",
        "Человек",
        "Эльф",
    ];

    $classArray = [
        "Бард",
        "Варвар",
        "Воин",
        "Волшебник",
        "Друид",
        "Жрец",
        "Колдун",
        "Маг",
        "Монах",
        "Паладин",
        "Плут",
        "Следопыт",
        "Стрелок",
    ];

    $weaponArr = [
        "Алебарда",
        "Арбалет",
        "Боевой посох",
        "Булава",
        "Глефа",
        "Двуручный меч",
        "Кинжал",
        "Копьё",
        "Молот",
        "Одноручный меч",
        "Ручной топор",
        "Секира",
        "Серп",
        "Цеп",
        "Щит",
    ];

    $armorArr = [
        "Стёганый",
        "Кожаный",
        "Кольчужный",
        "Чешуйчатый",
        "Кираса",
        "Латы",
    ];

    $skillsArray = [
      "Атлетика",
      "Запугивание",
      "Акробатика",
      "Ловкость рук",
      "Скрытность",
      "Магия",
      "История",
      "Анализ",
      "Природа",
      "Религия",
      "Проницательность",
      "Внимательность",
      "Уход за животными",
      "Медицина",
      "Выживание",
      "Обман",
      "Выступление",
      "Убеждение",
    ];


    function select_fnc($arr){
        echo "<option value='none'></option>";
        foreach ($arr as $item) {
            echo "<option value='$item'>$item</option>";
        }
    };

    function base_info($array){
        foreach ($array as $key => $item){
            echo "<div>$key</div>";
            echo "<div>$item</div>";
        }
    };

    function spec_info($array){
        foreach ($array as $key => $item){
            echo "<div>$key</div>";
            echo "<div>$item</div>";
        }
    };

    function arm_info($array){
        foreach ($array as $key => $item){
            echo "<div>$key</div>";
            echo "<div>$item</div>";
        }
    };

    function inventory_info($array){
        foreach ($array as $key => $item){
            echo "<div>$key</div>";
            echo "<div class='inventoryInfo_list'>$item</div>";
        }
    };

    function currensy_info($array){
        foreach ($array as $key => $item){
            echo "<div>$key</div>";
            echo "<div>$item</div>";
        }
    };

    function about_info($array){
        foreach ($array as $key => $item){
            echo "<div>$key</div>";
            echo "<div class='about_info_wrap'>$item</div>";
        }
    };

    function skills_fnc($arr){;
        foreach ($arr as $item) {
            echo "<input type='checkbox' name='checkedSkills[]' value='$item'>$item";

        }
    };




