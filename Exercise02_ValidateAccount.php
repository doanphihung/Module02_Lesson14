<?php
function validateAccount ($account) {
    $regexAccount = '/^[_a-z0-9]{6,}$/';
    if (preg_match($regexAccount, $account)) {
        echo "Account hợp lệ";
    } else echo "Account không hợp lệ";
}
$account = "123233_";
print_r(validateAccount($account));
