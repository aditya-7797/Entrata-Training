<?php

$filePath = __DIR__ . '/sample_note.txt';
$content = "This file was created by PHP on " . date('Y-m-d H:i:s') . PHP_EOL;

// Write to file
file_put_contents($filePath, $content);
echo "File written: " . $filePath . PHP_EOL;

// Append to file
file_put_contents($filePath, "Second line added." . PHP_EOL, FILE_APPEND);

// Read from file
$readContent = file_get_contents($filePath);
echo "File content:" . PHP_EOL;
echo $readContent . PHP_EOL;

// Date and time examples
date_default_timezone_set('Asia/Kolkata');
echo "Current date: " . date('Y-m-d') . PHP_EOL;
echo "Current time: " . date('H:i:s') . PHP_EOL;

$future = strtotime('+7 days');
echo "Date after 7 days: " . date('Y-m-d', $future) . PHP_EOL;
