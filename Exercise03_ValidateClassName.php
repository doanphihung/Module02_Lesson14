<?php
function validateClassName($className) {
    $regex = "/^[CAP][0-9]{4}[A-Za-z]{0,}[G-M]$/";

    if (preg_match($regex, $className)) {
        echo "Tên lớp hợp lệ";
    } else echo "Tên lớp không hợp lệ";
}
$className = 'P9994K';
 print_r(validateClassName($className));