<?php

 function isFirstLetterUpperCase($str) {
     $regex = '/^[A-Z]/';
     if (preg_match($regex, $str)) {
         echo "String's first character is uppercase";
     } else {
         echo "String's first character isn't uppercase";
     }
 }
 print_r(isFirstLetterUpperCase("Codegym"));
 print_r(isFirstLetterUpperCase("DOAN PHI HUG"));
 print_r(isFirstLetterUpperCase("dOAN PHI HUG"));

