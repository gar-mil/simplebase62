<?php

// Example page for using simplebase62

require_once('base62.php'); // Load base62.php to use functions

$base62 = new base62(); // Call the base62 class
$toconvert = 'a nice example!'; // The string to convert into base62

$encoded = $base62->encodebase62($toconvert); // Convert the string to base62
$decoded = $base62->decodebase62($encoded); // Convert the base62 output back into the original string

// Display our results
echo 'Encoded: ' . $encoded .'<br />' . 'Decoded: ' . $decoded;