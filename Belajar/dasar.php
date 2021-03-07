<?php

$name = ["adib", "suryo", "ismayanto"];
var_dump($name);

$name[0] = "mohammad";
var_dump($name);

unset($name[1]);
var_dump($name);

$name[0] = "Baru";
$name[2] = "Belajar";
var_dump($name);

$Adib = array(
    "id" => 1,
    "Name" => "Adib suryo",
    "age" => 20
);
var_dump($Adib);