<?php

$a = array(
    0 => 50,
    1 => "40",
    2 => "80",
    3 => 45,
);

    foreach ($a as $key => $value) {
        echo"<br>key is $key and value is $value";
    }

    foreach ($a as $value) {
        echo"<br>value is $value";
    }
?>