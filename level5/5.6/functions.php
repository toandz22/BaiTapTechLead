<?php
function cleanString($string) {
        // Loại bỏ khoảng trắng đầu và cuối chuỗi
        $trimmedString = '';
        $len = strlen($string);
        if ($len > 0) {
            $start = 0;
            while ($start < $len && ctype_space($string[$start])) {
                ++$start;
            }
            $end = $len - 1;
            while ($end >= 0 && ctype_space($string[$end])) {
                --$end;
            }
            $trimmedString = ($start <= $end) ? substr($string, $start, $end-$start+1) : '';
        }
        
        // Thay thế các khoảng trắng liên tiếp bằng một khoảng trắng duy nhất
        $reducedString = preg_replace('/\s+/', ' ', $trimmedString);
        
        return $reducedString;
    }
    ?>