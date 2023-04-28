2.2 Chuỗi có từ dài nhất là :
<?php 
   $string = array($_POST["stra"],$_POST["strb"],$_POST["strc"],$_POST["strd"],$_POST["stre"]);

   
   $longestWordLength = 0;
   $longestWord = '';
   
   foreach ($string as $word) {
      if (strlen($word) > $longestWordLength) {
         $longestWordLength = strlen($word);
         $longestWord = $word;
      }
   }
   
   echo $longestWord;
   
   ?> <br>
