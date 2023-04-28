1.6 Sắp xếp theo bảng chữ cái tăng dần là :
<?php
$chucai = array($_POST["aa"],$_POST["bb"],$_POST["cc"],$_POST["dd"],$_POST["ee"],$_POST["ff"]);
sort($chucai);

foreach($chucai as $c){
    echo"=>"."$c";
}
 ?> <br>
 1.8 Trung bình cộng của dãy số là :
 <?php
$dayso = array($_POST["aa"],$_POST["bb"],$_POST["cc"],$_POST["dd"],$_POST["ee"],$_POST["ff"]);
echo (array_sum($dayso))/2;
 ?> <br>
