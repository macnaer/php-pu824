<?php

// function Sum(...$a)
// {
//     $res = 0;
//     foreach ($a as $value) {
//         $res += $value;
//     }
//     return $res;
// }

// $res = Sum(4, 5, 5, 9);
// echo "Sum = " . $res;

// $str_en = "To be or not to be";
// $str_ua = "Бути чи не бути";

// echo strlen($str_en);
// echo "<hr>";
// echo strlen($str_ua);
// echo "<hr>";
// echo mb_strlen($str_ua);

// $str_pos = "New string != test string !=";
// echo strpos($str_pos, "!=");
// $var1 = "Hello";
// $var2 = "Нello";  // Перша буква укр. Н
// if (strcmp($var1, $var2) !== 0) {
//     echo '$var1 не равно $var2 при регистрозависимом сравнении';
// }


// $pass = "test123 ";
// echo strlen($pass);
// $pass = trim($pass);
// echo strlen($pass);
// $pass = md5($pass);
// echo $pass;

// $array = array('имя', 'почта', 'телефон');
// $comma_separated = join(",", $array);

// echo $comma_separated; // имя,почта,телефон

// // Пустая строка при использовании пустого массива:
// var_dump(implode('hello', array())); // string(0) ""

// $var = 'ABCDEFGH:/MNRPQR/';
// echo "Оригинал: $var<hr />\n";

// echo substr_replace($var, 'bob', 5) . "<br />\n";
// echo substr_replace($var, 'bob', 0, strlen($var)) . "<br />\n";
// $phrase  = "You should eat fruits, vegetables, and fiber every day.";
// $healthy = array("fruits", "vegetables", "fiber");
// $yummy   = array("pizza", "beer", "ice cream");

// // echo $phrase;
// $newphrase = str_replace($healthy, $yummy, $phrase);
// echo $newphrase;

// copy('example.txt', 'D:\\test.txt');

// $file = fopen('example.txt', "r") or die("Can't open file");
// $file_read = fread($file, 9);
// fclose($path);

// $write_str = "To be or no to be ";
// $fwrite = fopen('example.txt', 'a') or die("Can't open file");
// fwrite($fwrite, $write_str);
// fclose($fwrite);
