1.2 Hình vuông có cạnh bằng a là : <br>
 <?php 
for ($i = 1; $i <= $_POST["a"]; $i++) {
    for ($j = $_POST["a"]; $j < $_POST["a"]; $j++) { //Write a program that takes a number as input and displays its square.
        echo "*";
    } 

    for ($j = 1; $j <= $_POST["a"]; $j++) {
        echo " "."*"." ";
    }

    echo "<br>";
}
 ?> <br>