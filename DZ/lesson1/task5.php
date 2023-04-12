<!--//5. Разработать php-страницу, в которой выбрать правильные html-элементы и вывести 3 вопроса в следующем формате:-->
<!--//a) 1 — вопрос с 4 вариантами ответа и только 1 из них правильный;-->
<!--//b) 2 — вопрос с 4 вариантами ответа и может быть несколько правильных;-->
<!--//c) 3 — вопрос с развернутым ответом;-->
<link rel="stylesheet" href="./DZ%20lesson%201.css">
<body>

<form class="container" method="get">
    <div class="question">
        <div class="img">
            <img src="https://a.d-cd.net/47a13des-960.jpg" alt="img">
        </div>
        <h2>"Что с сосисками, Чарли?"</h2>
        <div class="answer">
            <div>
                <input type="radio" name="radio" value=2>
                <span>"5 минут, Турецкий"</span>
            </div>
            <div>
                <input type="radio" name="radio" value=-2>
                <span>"Какие сосиски?"</span>
            </div>
            <div>
                <input type="radio" name="radio" value=-2>
                <span>"Я не Чарли, я Микки!"</span>
            </div>
            <div>
                <input type="radio" name="radio" value=-2>
                <span>"Давно готовы!"</span>
            </div>
        </div>
    </div>

    <div class="question">
        <div class="img">
            <img src="https://i.ytimg.com/vi/txwhu1gAiXY/maxresdefault.jpg" alt="img">
        </div>
        <h2>"Пёсыки, любишь пёсыков"</h2>
        <div class="answer">
            <div>
                <input type="checkbox" name="check[]" value=-2>
                <span>"Я котов больше люблю"</span>
            </div>
            <div>
                <input type="checkbox" name="check[]" value=2>
                <span>"Аааа, собаки!"</span>
            </div>
            <div>
                <input type="checkbox" name="check[]" value= 2>
                <span>"Собак я люблю"</span>
            </div>
            <div>
                <input type="checkbox" name="check[]" value=-2>
                <span>"Ничего не понимаю"</span>
            </div>
        </div>
    </div>
    <div class="question">
        <div class="img">
            <img src="https://avatars.dzeninfra.ru/get-zen_doc/1368767/pub_5d56e060f73d9d00addea45e_5d56ea69027a1500adf86117/scale_1200" alt="img">
        </div>
        <h2>"А почему его зовут "Хрен попадёшь"?</h2>
        <div class="answer">
            <input type="text" class="text" name="text">
        </div>
        <button type="submit">Далее</button>
    </div>
</form>
</body>

<?php


if(isset($_GET ["radio"],$_GET["check"],$_GET["text"])){
    $radio = $_GET ["radio"];
    $answer = $_GET["check"];
    $text = $_GET["text"];
    $counter =0;
    //    Проверка правильного ответа 1 вопроса
    if($radio == 2){
        $counter += $radio;
    }
    //    Проверка правильных ответов 2 вопроса
    foreach($answer as $item){
        $counter += $item;
    }
    if($counter == 6){
        echo "Всё привильно!";
    } else {
        echo "Попробуй ещё раз";
    }
    if($text){
        echo "<br>$text";
    }
}
?>

<!--$_GET ["radio"]) && isset($_GET["dags"]) && isset($_GET["likeDags"])-->