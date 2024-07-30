<?php
    if(isset($_POST['btnSave1'])){
        $masv = $_GET['masv'];
        $masvmoi =$_POST["masvmoi"];
        $hosv =$_POST["hosv"];
        $tensv =$_POST["tensv"];
        $phai =$_POST["phai"];
        $ngaysinh =$_POST["ngaysinh"];
        $noisinh =$_POST["noisinh"];
        
        
        $check = true;
        for($i =0; $i <= strlen($masvmoi)-1; $i++){
          if($masvmoi[$i] == '\'' || $masvmoi[$i] == "\""){
            $check = false; break;
          }
          
        }
       
        if($check == true){
            $sql_sua = "UPDATE sinhvien SET MaSV = '$masvmoi', HoSV = '$hosv',TenSV='$tensv',Phai= '$phai', NgaySinh = '$ngaysinh', NoiSinh= '$noisinh' WHERE MaSV = '$masv'";
            mysqli_query($conn,$sql_sua);
            header('Location: http://localhost:1122/index.php?view=xemSV');
        }else{
            header("Location: http://localhost:1122/index.php?view=giuSV&masv=$masv");
        }       
    }
?>


