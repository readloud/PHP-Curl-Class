<?php
// (A) DUMMY ARRAY
$person = [
  "name" => "John Doe",
  "email" => "john@doe.com"
];

// (B) FORMATTED PRINT
foreach ($person as $k=>$v) {
  printf("<div><strong>%s:</strong> %s</div>", $k, $v);
}

// (C) THE USEFUL PARTS...
$val = 123.45678;
printf("<p>ROUND OFF 2 DECIMAL PLACES %0.2f</p>", $val);

$val = 0.432;
printf("<p>PAD UP TO 5 ZEROS, 2 DECIMAL PLACES %08.2f</p>", $val);

$val = "123";
printf("<p>PAD WITH DOTS %'.10d</p>", $val);