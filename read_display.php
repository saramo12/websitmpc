<?php
$displayFile = 'display.txt';

// Initialize the display file if not exists
if (!file_exists($displayFile)) {
    file_put_contents($displayFile, 0);
}

// Read the current display count
echo file_get_contents($displayFile);
?>