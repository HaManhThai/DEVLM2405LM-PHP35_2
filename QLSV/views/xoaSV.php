<?php
    $masv = $_GET['masv'];
    // include_once('ketnoi/ketnoi.php');
    $xoa_sql= "DELETE FROM sinhvien WHERE MaSV = '$masv'";
    mysqli_query($conn, $xoa_sql);
    header('Location: http://localhost:1122/index.php?view=xemSV'); 
?>
  
