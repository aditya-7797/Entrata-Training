<?php
// String
$name = "Aditya";
// Integer
$age = 22;
echo "My name is $name and I am $age years old.";
?>

<br><br>

<?php
// Concatenation
$first = "Aditya";
$last = "Shinde";

echo "My name is " . $first . " " . $last . ".";

$price = 99.99;
echo "The price is " . $price . ".";

$isAvailable = true;
echo "Is the product available? " . ($isAvailable ? "Yes" : "No") . ".";

$colors = ["Red", "Green", "Blue"];

$test = null;


// Displaying variable types and values
var_dump($name);
var_dump($age);
var_dump($price);
var_dump($isAvailable); 
var_dump($colors);
var_dump($test);

?>