<?php
$counterFile = 'counter.txt';
$displayFile = 'display.txt';

// Initialize the counter file if not exists
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, 0);
}

// Increment the counter
$counter = (int)file_get_contents($counterFile) + 1;
file_put_contents($counterFile, $counter);

// Update the display file
file_put_contents($displayFile, $counter);
?>