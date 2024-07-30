<?php
    $masv = $_GET['masv'];
    $masvmoi = $_POST['masvmoi'];
    $mamh = $_POST['mamh'];
    $diem =  $_POST['diem'];
    
    $check = true;
        for($i = 0; $i <= strlen($masvmoi); $i++){
            if($masvmoi[$i] == "\"" || $masvmoi[$i] == '\''){
                $check = false; break;
            }
        }

        if($check == true){
            $sql_sua = "UPDATE ketqua SET MaSV = '$masv', MaMH = '$mamh', Diem= '$diem' WHERE MaSV = '$masv'";
            mysqli_query($conn, $sql_sua);
            header('Location: http://localhost:1122/index.php?view=xemKQ');
        }else{
            header("Location: http://localhost:1122/index.php?view=giuKQ&masv=$masv");
        }


?>


