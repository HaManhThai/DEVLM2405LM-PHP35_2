<?php
    $masv= $_GET['masv'];
    $sql_xoa = "DELETE FROM ketqua WHERE MaSV = '$masv'";
    mysqli_query($conn, $sql_xoa);
    header('Location: http://localhost:1122/index.php?view=xemKQ');
?>