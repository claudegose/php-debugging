<?php
//1
function new_exercise() {
    $block = "<br><br>Exercise 1 starts here";
    echo $block;
}
new_exercise();

echo "<br>";
//2
$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo "<br>Exercise 2";
echo "<br>$monday";


echo "<br>";


//3
echo "<br>Exercise 3";
$str = "<br>Debugged!";
echo substr($str, 0, 13);

echo "<br>";
echo "<br>";

//4


foreach($week as $day) {
    $day = substr($day, 0, -3);
}

echo "Exercise 4";
echo "<br>";
print_r($week);


echo "<br>";
echo "<br>";

// 5

echo "Exercise 5";
echo "<br>";
$arr = [];
for ($letter = 'a'; $letter <= 'z'; $letter++) {
    if($letter == "aa") {
        break;
    }

    array_push($arr, $letter);
}

print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alphabetical array












?>
