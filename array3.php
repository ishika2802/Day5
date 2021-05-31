<?php
//count
$a = array(10,20,30,40,50,10,20);
echo "count of array is ".count($a);

//count values in array
$b = array_count_values($a);
foreach ($b as $key => $value) {
    echo"<br> key - $key value - $value";
}
echo"<br>";
//reverse array
$c = array("abc", "def", "ghi", "jkl");
$reverse = array_reverse($c);
print_r($reverse);

//in_array
$arr = array("php","python","java");
$temparr = in_array("php", $arr);
echo "<br>".$temparr;

//array_rand
$arr1 = array("php","python","java");
$indexofarray = array_rand($arr1);
echo"<br>".$arr1[$indexofarray];

echo"<br>";
//array_unique
$arr2 = array("php","python","java","java");
print_r(array_unique($arr2));

echo"<br>";

//array_merge
$arr3 = array(10,20,30);
$arr4 = array("php","python","java");
$arr5 = array_merge($arr3, $arr4);
print_r($arr5);

//array_search
$arr6 = array("php","python","java");
$search = array_search("java", $arr6);
echo"<br>".$search;

echo"<br>";
//range
$number = range(1, 10);
echo"<select>";
foreach ($number as $value) {
    echo"<option>$value</option>";
}
echo"</select>";

echo"<br>";
//rsort and asort
$arr7 = array(1,5,6,8,2,3);
rsort($arr7);
asort($arr7);
print_r($arr7);

echo"<br>";

//ksort and krsort
$arr8 = array(
    1 => "one",
    2 => "two",
    3 => "three"
);
ksort($arr8);
krsort($arr8);
foreach ($arr8 as $key => $value) {
    echo"<br> $key - $value";
}

echo"<br>";

//shuffle
$arr9 = array("php","python","java");
shuffle($arr9);
foreach ($arr9 as $value) {
    echo"<br>$value";
}

echo"<br>";
//array_key_exist
$arr10 = array(1 => "php", 2 => "python", 3 => "java");
echo "<br>".array_key_exists(3, $arr10);

echo"<br>";
//array_change_key_case
$arr11 = array("a" => "php", "b" => "python", "c" => "java");
$uppercase = array_change_key_case($arr11, CASE_UPPER);
print_r($uppercase);

echo"<br>";

//array_combine
$arr12 = array(1,2,3);
$arr13 = array("a", "b", "c");
$a1 = array_combine($arr12, $arr13);
print_r($a1);

echo"<br>";

//end
$arr14 = array("php","python","java");
echo "<br>".end($arr14);

echo"<br>";
//compact
$name = "ishika";
$sname = "patel";
$arr15 = compact("name", "sname");
print_r($arr15);

echo"<br>";

//array_flip

$arr16 = array(1 => "php", 2 => "python", 3 => "java");
$a2 = array_flip($arr16);
print_r($a2);

echo"<br>";

//array_diff

$arr17 = array(1,2,3);
$arr18 = array("a", "b", "c");
$a3 = array_diff($arr17, $arr18);
print_r($a3);

echo"<br>";

//array_intersect
$arr19 = array(1,2,3);
$arr20 = array("a", "b", "c");
$a4 = array_diff($arr19, $arr20);
print_r($a4);

echo"<br>";
//array_values
$arr21 = array(1 => "php", 2 => "python", 3 => "java");
$a5 = array_values($arr21);
foreach ($a5 as $key => $value) {
    echo"<br> $key - $value";
}

echo"<br>";
//array_push and array_pop
$arr22 = array("4", "html");
array_push($a, "js", "css");
print_r($arr22);

$arr23 = array(1 => "php", 2 => "python", 3 => "java");
array_pop($arr23);
print_r($arr23);


echo"<br>";
//explode
$a6 = "ishika patel";
$arr24 = explode(" " , $a6);
print_r($arr24);

echo"<br>";
//implode
$arr25 = array("ishika", "patel");
$a7 = implode(" ", $arr25);
echo"<br>".$a7;
?>