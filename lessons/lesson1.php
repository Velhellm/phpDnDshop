<input style="text : name"><br>
<input style="text : name">

<?php
//$x = "10";
//$y = "10.6";
//$summ = $x + $y;
//echo "$x + $y = $summ";
//echo "<br>", "<span style='color : red'>$summ</span>";
// if($x < 0 && $y < 0){
//     $summ = $x + $y;
// }else{
//     $summ = $x-$y;
// }

$array = [1, 2, 3, 4];
$arr2 = ["name"=> "Velhelm", "last_NAME" => "Storlusson"];
echo $array[3];
echo "<br>";
echo $arr2["name"];

$array = [1,7,34,3,8,16];
sort($array);
//rsort($array); реверс массива
//ksort($array); по ключам

foreach ($array as $item){
    echo "<br>", $item;
};

$x = 0;
while ($x!=10){
    $x+=1;
    echo "<br>", $x;
}


$y = 10;
echo $y**$y;


$z = array(1,2,3,4,5);
for($i=0;$i<count($z);$i++){
    echo "<br>", $z[$i];
}


function add_numbers_color($n1,$n2,$color){
}

foreach ($arr2 as $item => $value){
    echo  "<br>";
    echo "$item : $value";
}


//$role = user;
//$admins = 0;
//switch($role){
//    case "user";
//    break;
//}


