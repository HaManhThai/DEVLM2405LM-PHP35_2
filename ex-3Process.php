<?php
// dùng phương thức GET để lấy dữ liệu qua form
    $name = isset($_GET['ten']) ?  $_GET['ten']  : "" ;
    $email = isset($_GET['email']) ?  $_GET['email']  : "" ;
    echo $name . " " .$email;
?>


<?php
// dùng phương thức GET để lấy dữ liệu qua url
    $a = isset($_GET['a']) ?  $_GET['a']  : "" ;
    $b = isset($_GET['b']) ?  $_GET['b']  : "" ;
    echo $a . " " .$b;
?>


<?php
 // dùng phương thức POST để lấy dữ liệU qua form
    echo "<pre>";
    print_r($_POST);
    echo "<pre>";
    $name = isset($_POST['ten']) ?  $_POST['ten']  : "" ;
    $email = isset($_POST['email']) ?  $_POST['email']  : "" ;
    echo $name . " " .$email;
 ?>

