<?php
// ############# example 1
// $variable = true;
// $str = "Bill";
// echo $variable;
// echo "<br />";
// echo $str;

// $second = $variable;

// echo "Second " . $second;

// unset($str);

// if (isset($str)) {
//     echo "$str exists";
// } else {
//     echo "Does not exists";
// }

// ############# example 2
// $variable = true;
// echo gettype($variable);

// $num1 = 10;
// $num2 = &$num1;

// echo $num2;

// $num2 = 30;
// echo "=============================" . "<br />";
// echo $num1 . "\t";
// echo $num2;

// ############# example 3
// define('PI', 3.14);

// echo "Pi = " . PI;

// $arr = array(
//     '1' => "One",
//     '2' => 'Two',
//     '3' => 'Three',
//     '4' => 4
// );

// // print_r($arr);
// var_dump($arr);

// $arr = [3, 4, 5, 34, 643, "Bill", ["Test", 45, true]];
// print_r($arr);

// $arr[6][0] = "Best";
// print_r($arr);

$a = 10;
$b = 5;
$c = 4;

if ($a > $b && $a >  $c) {
    echo "Variable $a  > B and";
}
