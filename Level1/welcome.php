<html>
<body>
 1.1 Tổng của 2 số x và y là : 
 <?php

function array_has_duplicates($a, $b)
{
    $uniq = $a + $b;
    return $uniq;
}
echo array_has_duplicates(10,9)."<br>";
?>

 1.2 Độ dài của chuỗi là :
 <?php 
 echo strlen( $_POST["fstring"] ); //Write a program that takes a string as input and displays the length of the string
 ?> <br>

 1.2 Hình vuông có cạnh bằng a là : <br>
 <?php 
for ($i = 1; $i <= $_POST["a"]; $i++) {
    for ($j = $_POST["a"]; $j < $_POST["a"]; $j++) { //Write a program that takes a number as input and displays its square.
        echo "*";
    } 

    for ($j = 1; $j <= $_POST["a"]; $j++) {
        echo "*";
    }

    echo "<br>";
}
 ?> <br>

 1.4 Số lớn nhất trong mảng là :
 <?php
 echo (max($_POST["ma"],$_POST["mb"],$_POST["mc"],$_POST["md"],$_POST["me"],$_POST["mf"]))
 ?> <br>

 1.5 Chuỗi ngắn nhất trong mảng là :
 <?php
 echo (min(strlen($_POST["sa"]),strlen($_POST["sb"]),strlen($_POST["sc"]),strlen($_POST["sd"]),strlen($_POST["se"]),strlen($_POST["sf"])))
 ?> <br>

1.6 Sắp xếp theo bảng chữ cái tăng dần là :
<?php
$chucai = array($_POST["na"],$_POST["nb"],$_POST["nc"],$_POST["nd"],$_POST["ne"],$_POST["nf"]);
sort($chucai);

foreach($chucai as $c){
    echo"=>"."$c";
}
 ?> <br>

 1.7 Sắp xếp dãy số theo thứ tự tăng dần là : 
 <?php
$dayso = array($_POST["aa"],$_POST["bb"],$_POST["cc"],$_POST["dd"],$_POST["ee"],$_POST["ff"]);
sort($dayso);

foreach($dayso as $n){
    echo"=>"."$n";
}
 ?> <br>

 1.8 Trung bình cộng của dãy số là :
 <?php
$dayso = array($_POST["aa"],$_POST["bb"],$_POST["cc"],$_POST["dd"],$_POST["ee"],$_POST["ff"]);
echo (array_sum($dayso))/2;
 ?> <br>

 1.9 Số lượng từ trong chuỗi là :
 <?php 
 echo (str_word_count( $_POST["qa"] ));
 ?> <br>

1.10 Số lượng chữ "a" có trong chuỗi: 
<?php 
$string = $_POST["chua"];
$result = substr_count($string, "a"); 
echo $result;
    ?> <br>
1.10 C chuỗi có chữ "a" là: <br>
<?php 
 $arrray = array($_POST["ra"],$_POST["rb"],$_POST["rc"],$_POST["rd"],$_POST["re"],$_POST["rf"]);
 for($i = 0 ; $i < count($arrray); $i ++){
    $str = strpos($arrray[$i],'a');
    if($str == true ){
        echo $arrray[$i]. "<br>"; 
    }
    if($str == false ){
        echo "kí tự không tồn tại trong chuỗi"."<br>";
 }
}
?> 
</body>
</html>