<?php
class Field_calculate {
    const PATTERN = '/(?:\-?\d+(?:\.?\d+)?[\+\-\*\/])+\-?\d+(?:\.?\d+)?/'; // các kí tự toán tử 

    const PARENTHESIS_DEPTH = 10; //gán độ dài của ngoặc là hằng số ;

    public function calculate($input){
        if(strpos($input, '+') != null || strpos($input, '-') != null || strpos($input, '/') != null || strpos($input, '*') != null){ // Nếu các toán tử tồn tại 
            $input = preg_replace('[\.\+\-\*\/\(\)]', ' ', $input); // loại bỏ các kí tự toán tử và dấu ngoặc từ chuỗi đầu vào, sau đó sử dụng regular expression để tìm kiếm các phép tính trong chuỗi.
            $i = 0;
            while(strpos($input, '(') || strpos($input, ')')){ // dùng vòng lặp while tìm dấu ngoặc mở hoặc kí tự đầu tiên là dấu ngoặc đóng 
                $input = preg_replace_callback('/\(([^\(\)]+)\)/', 'self::callback', $input); //Trả về hàm callback . và return kết quả .

                $i++;
                if($i > self::PARENTHESIS_DEPTH){ 
                    break;
                }
            }
            if(preg_match(self::PATTERN, $input, $match)){  // so sánh hằng số PATTERN và biến $input
                return $this->compute($match[0]); // trả về kết quả tính toán 
            }
            if(is_numeric($input)){ // nếu input là số hoặc chữ số .
                return $input; // trả về dãy số
            }

            return 0;
        }

        return $input;
    }

    private function compute($input){ 
        $compute = create_function('', 'return'.$input.';');

        return 0 + $compute();
    }

    private function callback($input){ // Tạo hàm callback 
        if(is_numeric($input[1])){ // Nếu input(vị trí i =1 ) là số hoặc chuỗi số 
            return $input[1]; // thì trả về phần tử đó trong input
        }
        elseif(preg_match(self::PATTERN, $input[1], $match)){ // so sánh phần tử [1] với hằng số Pattern và return ra match
            return $this->compute($match[0]); // tính toán phần tử bằng cách gọi compute
        }

        return 0;
    }
}
$Cal = new Field_calculate(); // khởi tạo 1 class Field_calculate . 
$result = $Cal->calculate((1+2)*3+(2+2)); // output ra kết quả = 13
echo "Kết quả là :".$result;
?> //
 

