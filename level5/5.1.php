<?php
function reverse_string($str1)
{
 $n = strlen($str1); // dùng h strlen để gán độ dài của $str1 vào $n. 
 if($n == 1)
   {
    return $str1;
   }
 else
   {
   $n--;
   return reverse_string(substr($str1,1, $n)) . substr($str1, 0, 1); 
   }
}
print_r(reverse_string('abcdefg')."\n");
?>