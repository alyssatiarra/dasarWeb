<?php
$myArray = array();
if (empty($myArray)){
    echo "Array tidak terdefinisi atau kosong";
} else {
    echo "Array terdefinisi dan tidak kosong";
}

echo "<hr>";
if (empty($nonExistentVar)){
    echo "Variable tidak terdefinisi atau kosong";
} else {
    echo "Variable terdefinisi dan tidak kosong";
}