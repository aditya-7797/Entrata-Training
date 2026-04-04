<?php

$name = "Aman";
$score = 92.4567;

// Plain echo output
echo "Name: " . $name;

echo "<br><br>";

// Formatted output using printf
printf("Name: %s, Score: %.2f", $name, $score);
echo "<br><br>";

// Formatted output using sprintf
$formattedString = sprintf("Name: %s, Score: %.2f", $name, $score);
echo $formattedString;


