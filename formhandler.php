<?php

if($_POST['test'] !== '12345') {

    die();
}

$file = 'people.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file

$current .= $_POST['email'] . PHP_EOL;
// Write the contents back to the file
file_put_contents($file, $current);

http_response_code(200);

?>