<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <h1>BÀI TẬP BUỔI 2 - PHP</h1>
<?php

/*1.Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen().*/
function countCharacters($word){
     return strlen($word);
}
     echo countCharacters("Thuong Mai");             //KẾT QUẢ: 10




//2. Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count()
function countWords($word){
    return str_word_count($word);
}
    echo countWords("Thuong Mai");                   //KQ: 2



//3. Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
function reverseString($word){
    return strrev($word);
}
    echo reverseString("Thuong Mai");




//4. Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
function searchWord($word){
    return strpos($word, "c", 1);
}
    echo searchWord("abc");                  //KQ: 2



/*5. Viết một chương trình PHP để thay thế một chuỗi con 
trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
CÚ PHÁP: str_replace($search, $replace, $subject)*/
function replaceStr($word){
    return str_replace('không thích', 'thích', 'Tôi không thích học TT');
}
    echo replaceStr("Tôi không thích học TT");




/*6. Viết một chương trình PHP để kiểm tra xem một chuỗi 
có bắt đầu bằng một chuỗi con khác không? sử dụng hàm strncmp()*/
function checkStr($word1, $word2){
    return strncmp($word1, $word2, 5);
}
    echo checkStr("Toi dang an", "Toi dang ngu");    //KQ: 0



/*7Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().*/
function capitalizeLetter($word){
    return strtoupper($word);
}
    echo capitalizeLetter('khong thich');




//8. Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
function lowercaseLetter($word){
    return strtolower($word);
}
    echo lowercaseLetter('Thích Ăn Gà');



//9. Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords()
function capitalizeTheFirstLetter($word){
    return ucwords($word);
}
    echo("an gi khong?");



//10. Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim()
function removeSpace($word){
    return trim($word);
}
    echo removeSpace("   Di an khong m ơi?   ");




//11. Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
function removeTheFirstCharacter($word){
    return ltrim($word, "m");
}
    echo removeTheFirstCharacter("mmPHP");



//12. Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
function removeTheLastCharacter($word){
    return rtrim($word, "-");
}
    echo removeTheLastCharacter("An ga de----------------");



//13. Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
function stringToArray($word){
    return explode(" ", $word, 3);
}
    print_r (stringToArray("HAIZZZ DI AN GI DE"));    //KQ: Array ( [0] => HAIZZZ [1] => DI [2] => AN GI DE )



//14. Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
function arrayToString($word){
    return implode("+", $word);
}
    echo arrayToString(array("An", "Ngu"));



//15. Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
function addString($word){
    return str_pad($word, 20, "????", STR_PAD_BOTH);
}
    echo addString("Hoi lam gi");                        //KQ: ?????Hoi lam gi?????



/*16. Viết một chương trình PHP để kiểm tra xem một chuỗi có 
kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr()*/
function checkTheEndString($word){
    if($word == false){
        return "Không kết thúc bằng chuỗi này";
    }else{
        return $word;
    }
}
   echo checkTheEndString(strrchr("Sang nay an gi", "g" ));           //gi
   echo checkTheEndString(strrchr("Sang nay an gi", "k" ));           //kho



//17. Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
function checkAnyString($word){
    if($word == false){
        return "Không tồn tại chuỗi này";
    }else{
        return $word;
    }
}
   echo checkAnyString(strrchr("Sang nay an gi", "gi" ));
   echo"<br>";          
   echo checkAnyString(strrchr("Sang nay an gi", "khong" ));  



/*18. Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi 
không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace()*/
function replaceCharacter($word){
         return preg_replace("/@@@/", "Hanoi", "$word");
}
    echo replaceCharacter("Trung học Cơ sở số 1 @@@");       //KQ: Trung học Cơ sở số 1 Hanoi



//19. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
function isInt($word){
    if($word==false){
       return "Không là số nguyên";
    }else{
        return "Đây là số nguyên: ".$word;
    }
}
    echo isInt(is_int(32));
    echo "<br>";
    echo isInt(is_int(32.5));


    
/*20. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là 
một email hợp lệ hay không sử dụng hàm filter_var()*/
function isEmail($word){
    if($word==false){
        return "Emial không hợp lệ";
    }else{
        return $word . "<br>". "Đây là email hợp lệ";
    }
}
    echo isEmail(filter_var("lanluundu@gmail.com", FILTER_VALIDATE_EMAIL));
    echo "<br>";
    echo isEmail(filter_var("lanluu^nsmsls.com", FILTER_VALIDATE_EMAIL));
?>
</body>
</html>