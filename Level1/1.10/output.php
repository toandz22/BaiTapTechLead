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