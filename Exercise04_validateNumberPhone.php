<?php
function validateNumberPhone($numberPhone) {
    $regex = '/^\([0-9]{2}\)\-\([0][1-9][0-9]{8}\)$/';

    if (preg_match($regex, $numberPhone)) {
        echo "Number phone hợp lệ";
    } else echo "Number phone không hợp lệ";
}
$numberPhone = "(84)-(0912365099)";
print_r(validateNumberPhone($numberPhone));
