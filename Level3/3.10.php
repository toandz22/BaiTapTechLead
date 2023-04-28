Với chuỗi ["apaaaaaa", "apple", "zoo", "pie", "elephant", "ban", "picnic", "eye"] :</br>
<?php
$random_words = ["apaaaaaa", "apple", "zoo", "pie", "elephant", "ban", "picnic", "eye"];
function custom_sort($word_a, $word_b) {
    if (strlen($word_a) < strlen($word_b)) {
        return -1;
    }
    if (strlen($word_a) == strlen($word_b)) {
        return strcmp($word_a, $word_b);
    }
    if (strlen($word_a) > strlen($word_b)) {
        return 1;
    }
}
usort($random_words, "custom_sort");
echo "\nSắp xếp theo số phần tử của chuỗi là : \n";
foreach($random_words as $element) {
    echo str_pad($element, 9)." ";
}

?>