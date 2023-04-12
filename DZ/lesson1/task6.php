<!--//6. Разработать страницу с переменными:-->
<!--//a) tag, background_color, color, width, height;-->
<!--//b) Значение в этих переменных — это значение соответствующего property тега, который описан в переменной tag;-->
<!--//c) Вывести тег, записанный в переменной tag со стилями, которые записаны в переменных.-->


<?php
    $tag = "div";
    $background_color = "red";
    $color = "green";
    $width = "200px";
    $height = "200px";
    $text = "WaAAAaaaGGGHHhhh!";

    echo "<$tag style='background-color: $background_color;color: $color; width: $width; height: $height'>$text</$tag>";
