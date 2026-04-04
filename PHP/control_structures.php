<?php

$age = 20;

if($age >= 18){
    echo "Adult";
}

echo "<br><br>";

if($age >= 18){
    echo "Adult";
} else {
    echo "Minor";
}

echo "<br><br>";

if($age >= 18 && $age < 65){
    echo "Adult";
} elseif ($age >= 65) {
    echo "Senior";
} else {
    echo "Minor";
}

echo "<br><br>";

switch ($age) {
    case 0:
        echo "Newborn";
        break;
    case 1:
        echo "Infant";
        break;
    case 2:
        echo "Toddler";
        break;
    default:
        echo "Child";
}

echo "<br><br>";

for ($i = 0; $i < 5; $i++) {
    echo "Iteration: $i<br>";
}

echo "<br><br>";

$numbers = [1, 2, 3, 4, 5];
foreach ($numbers as $number) {
    echo "Number: $number<br>";
}

$count = 0;
while ($count < 5) {
    echo "Count: $count<br>";
    $count++;
}

echo "<br><br>";

$count = 0;
do {
    echo "Count: $count<br>";
    $count++;
} while ($count < 5);

?>

