<?php

$data = new DateTime();

print_r($data);
echo "<br>";

$data->setDate(1999, 10, 02);

print_r($data);
echo "<br>";

$data->setTime(05, 12, 10);

print_r($data);
echo "<br>";

echo $data->format('d/m/y') . "<br>";
