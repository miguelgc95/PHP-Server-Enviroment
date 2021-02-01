<?php

foreach ($_SERVER as $key => $value) {
    echo "<br>";
    print_r ($key);
    echo " => ";
    print_r ($value);
}

echo "<br>";
echo "<br>";

// foreach ($_SERVER as $key => $value) {
//     echo "<pre>";
//     print_r ("$key:  $value);
// }
echo "<pre>";
print_r($_SERVER);

?>