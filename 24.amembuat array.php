<?php
// membuat array
$user = [
    "dian",
    "muhar",
    "halima"
];

// mengisi array pada indek ke-1 ("muhar")
$user[1] = "halima";

// mencetak isi array
echo "<pre>";
print_r($user);
echo "</pre>";
?>
Array
(
    [0] => dian
    [1] => halima
    [2] => halima
)
