<?php
// (A) ECHO STRING OF HTML
$first = "foo";
$second = "bar";
echo "<p>$first $second</p>";

// (B) DUMMY ARRAY
$person = [
  "name" => "John Doe",
  "email" => "john@doe.com"
];

// (C) THIS WILL NOT WORK!
// echo "<p>$person['name'] - $person['email']</p>";

// (D) WRAP VARIABLES IN CURLY BRACES
echo "<p>{$person['name']} - {$person['email']}</p>";