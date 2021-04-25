<?php
function validateEmail($email) {
    $regexEmail = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if (preg_match($regexEmail, $email)) {
        echo "Email hợp lệ";
    } else echo "Email không hợp lệ";
}

print_r(validateEmail('hung@gmail.com'). "<br>");
print_r(validateEmail('@gmail.com'));
