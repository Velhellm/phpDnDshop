<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./index.css">
</head>
<body class="info">
<div class="background_back">
    <img src="./char.jpg">
</div>
    <div class="mainInfo">
        <?php
        require_once ('functions.php');
        if(isset($_GET['playerName'],$_GET['charName'], $_GET['charLvl'], $_GET['charRace'] ,$_GET['gender'], $_GET["charClass"])) {
            base_info([
                        "Имя игрока"=>$_GET["playerName"],
                        "Имя персонажа"=>$_GET["charName"],
                        "Раса"=>$_GET["charRace"],
                        "Пол"=>$_GET["gender"],
                        "Класс"=>$_GET["charClass"],
                        "Уровень"=>$_GET["charLvl"],
            ]);

        }
        else {
            echo "Заполните все поля";
        }
        ?>
    </div>

    <div class="specInfo">
        <div class="specInfo_spec">
            <?php
            require_once ('functions.php');
            if(isset($_GET["str"],$_GET["endur"],$_GET["agil"],$_GET["intg"],$_GET["wis"],$_GET["char"])){
                spec_info([
                    "Сила"=>$_GET["str"],
                    "Выносливость"=>$_GET["endur"],
                    "Ловкость"=>$_GET["agil"],
                    "Интеллект"=>$_GET["intg"],
                    "Мудрость"=>$_GET["wis"],
                    "Харизма"=>$_GET["char"],
                ]);

            }
            else {
                echo "Выберите характеристики";
            }
            ?>
        </div>
        <div class="specInfo_skills">
            <?php
                $checkSkill = $_GET['checkedSkills'];
                if(empty($checkSkill)){
                    echo "Выберите навыки";
                }
                else{
                    $arr = count($checkSkill);
                    for($key = 0; $key < $arr; $key++){
                      echo "<div> $checkSkill[$key] </div>";
                    };
                }
            ?>
        </div>
    </div>

    <div class="weaponInfo">
        <div>
            <?php
                if(isset($_GET["weapon"],$_GET["armor"]) && $_GET["weapon2"]){
                    arm_info([
                        "Оружие 1"=>$_GET["weapon"],
                        "Оружие 2"=>$_GET["weapon2"],
                        "Доспех"=>$_GET["armor"],
                    ]);
                }
                else {
                    echo "Выберите оружие и броню";
                }
            ?>
        </div>
    </div>

    <div class="inventory_Info">
        <?php
            if(isset($_GET["inventory"])){
                inventory_info([
                    "Инвентарь"=>$_GET["inventory"],
                ]);
            }
        ?>
    </div>
    <div class="currencyInfo">
        <?php
        if(isset($_GET["copper"],$_GET["silver"],$_GET["gold"])){
            currensy_info([
                "Медных монет"=> $_GET["copper"],
                "Серебряных монет" => $_GET["silver"],
                "Золотых монет" => $_GET["gold"],
            ]);
        }
        ?>
    </div>

    <div class="about_info">
        <?php
        if(isset($_GET["about"])){
            about_info([
                  "О персонаже"  =>  $_GET["about"],
            ]);
        }
        ?>
    </div>
</body>
</html>

