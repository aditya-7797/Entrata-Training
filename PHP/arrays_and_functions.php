<?php

$fruits = ["Apple", "Banana", "Mango"];
$user = [
    "name" => "Kiran",
    "age" => 28,
    "city" => "Pune",
];

function printList(array $items): void
{
    foreach ($items as $index => $item) {
        echo ($index + 1) . ". " . $item . PHP_EOL;
    }
}

function calculateAverage(array $numbers): float
{
    if (count($numbers) === 0) {
        return 0.0;
    }

    return array_sum($numbers) / count($numbers);
}

echo "Indexed array:" . PHP_EOL;
printList($fruits);

echo PHP_EOL . "Associative array:" . PHP_EOL;
foreach ($user as $key => $value) {
    echo ucfirst($key) . ": " . $value . PHP_EOL;
}

$marks = [80, 75, 92, 88];
echo PHP_EOL . "Average marks: " . number_format(calculateAverage($marks), 2) . PHP_EOL;
