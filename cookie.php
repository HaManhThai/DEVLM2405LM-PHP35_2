<?php
    $key = "hmtt@gmail11.com";
    $value = "12312.12";
    $expire = time() + 3600;
    setcookie($key,$value,$expire);
    $key = str_replace(".","_",$key);
    $value = str_replace(".","_",$value);
    print_r($_COOKIE) ;
?>