<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
<div class="background">
    <img src="https://www.worldanvil.com/media/cache/cover/uploads/images/fd2b8e217848258a73c1c9e1d6c2a4e5.jpg" alt="">
</div>
<?php
include_once ('functions.php');
?>
    <form action="back-page.php" method="get" name="form" style="width: 50%; display: flex; flex-direction: column; justify-content: center; align-content: center;">
        
        <div class="logoImg">
            <img src="https://flyclipart.com/thumbs/dnd-logo-5th-edition-dungeons-and-dragons-logo-1145229.png" alt="logo">
        </div>
        <h2>Карточка игрока</h2>
        <div class="container">
            <div class="playerInfo">
                <div class="playerName playerSelect">
                    <span>Имя игрока</span>
                    <input class="input name" name="playerName" type="text" placeholder="Игрок">
                </div>
                <div class="characterName playerSelect">
                    <span>Имя персонажа</span>
                    <input class="input name" type="text" name="charName" placeholder="Персонаж">
                </div>
            </div>
            <div class="charSelect">
                <div>
                    <div class="select level">
                        <span>Уровень</span>
                        <input type="number" placeholder="1" class="lvl" name="charLvl">
                    </div>
                    <div class="select level">
                        <span>Пол</span>
                        <select name="gender" style="width: 100px" >
                            <?php
                                select_fnc($genderArray);
                            ?>
                        </select>
                    </div>
                </div>
                <div>
                    <div class="charLists">
                        <div class="speciesList playerSelect">
                            <span>Раса</span>
                            <select name="charRace">
                                <?php
                                    select_fnc($raceArray);
                                ?>
                            </select>
                        </div>
                        <div class="classList playerSelect">
                            <span>Класс</span>
                            <select name="charClass">
                                <?php
                                select_fnc($classArray);
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <h2>Характеристики</h2>
            <div class="specifications" >
                <div class="spec">
                    <input class="lvl" name="str" type="number" placeholder="8">
                    <span>Сила</span>
                </div>
                <div class="spec">
                    <input class="lvl" name="endur" type="number" placeholder="8">
                    <span>Выносливость</span>
                </div>
                <div class="spec">
                    <input type="number" name="agil" class="lvl" placeholder="8">
                    <span>Ловкость</span>
                </div>
                <div class="spec">
                    <input type="number" name="intg" class="lvl" placeholder="8">
                    <span>Интеллект</span>
                </div>
                <div class="spec">
                    <input type="number" name="wis" class="lvl" placeholder="8">
                    <span>Мудрость</span>
                </div>
                <div class="spec">
                    <input type="number" name="char" class="lvl" placeholder="8">
                    <span>Харизма</span>
                </div>
            </div>
            <div class="skills">
                <div class="skillsList">
                    <?php
                        skills_fnc($skillsArray);
                    ?>
                </div>
            </div>
            <div class="inventory">
                <h2>Инвентарь</h2>
                <div class="armament">
                    <div>
                        <span>Оружие 1</span>
                        <select name="weapon">
                            <?php
                                select_fnc($weaponArr);
                            ?>
                        </select>
                    </div>
                    <div>
                        <span>Оружие 2</span>
                        <select name="weapon2">
                            <?php
                                select_fnc($weaponArr);
                            ?>
                        </select>
                    </div>
                    <div>
                        <span>Доспех</span>
                        <select name="armor">
                            <?php
                                select_fnc($armorArr);
                            ?>
                        </select>
                    </div>
                </div>
                <div class="inventory">
                    <span>Предметы</span>
                    <textarea cols="30" rows="5" class="inventoryList" name="inventory" placeholder="Введите список предметов"></textarea>
                </div>
                <div class="currency">
                    <span>Валюта:</span>
                    <div style="color: saddlebrown " >
                        <input class="coin" style="background-color: saddlebrown" name="copper" type="number" placeholder="0">
                        <span>Медных монет</span>
                    </div>
                    <div style="color: silver">
                        <input class="coin" style="background-color: silver" name="silver" type="number" placeholder="0">
                        <span>Серебряных монет</span>
                    </div>
                    <div style="color: goldenrod">
                        <input class="coin" style="background-color: goldenrod" name="gold" type="number" placeholder="0">
                        <span>Золотых монет</span>
                    </div>
                </div>
                </div>
            <div class="about">
                <h2>Описание</h2>
                <textarea cols="30" rows="5" name="about" class="aboutChar" placeholder="О персонаже"></textarea>
            </div>
        </div>

            
        <div class="subWrap">
            <button class="btn" type="submit">Отправить</button>
        </div>


    </form>

</body>
</html>









