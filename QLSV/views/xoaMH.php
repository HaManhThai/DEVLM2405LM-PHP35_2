<?php
    $mamh = $_GET['mamh'];
    $sql = "DELETE FROM monhoc WHERE MaMH = '$mamh'";
    // echo "$sql" ; exit;
    mysqli_query($conn, $sql);
    header('Location: http://localhost:1122/index.php?view=xemMH');
?>