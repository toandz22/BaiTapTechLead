2.4 Tổng các số chia hết cho 3 và 5 là : 
   <?php
$tatal = 0;
for($i = 1; $i <= $_POST["nb"]; $i ++) {
     if ($i % 5 == 0 and $i % 3 == 0) {
        $tatal += $i;
    }
}
echo  $tatal;
?> <br>