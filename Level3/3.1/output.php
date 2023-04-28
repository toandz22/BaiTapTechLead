3.1Số nhỏ thứ 2 là: 
<?php
$my_array = array($_POST["a"],$_POST["b"],$_POST["c"],$_POST["d"],$_POST["e"]);
sort($my_array);
list($a, $b, $c, $d, $e ) = $my_array;
echo "$b";
?> <br>
