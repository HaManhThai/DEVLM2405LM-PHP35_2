<?php
if(isset($_POST['btnSave'])){
    $mamh = $_GET['mamh'];
    $mamonmoi = $_POST['mamonmoi'];
    $tenmon = $_POST['tenmon'];
    $sotiet = $_POST['sotiet'];
    

    $check = true;
    for($i =0; $i <= strlen($mamonmoi)-1; $i++){
        if($mamonmoi[$i] == '\'' || $mamonmoi[$i] == "\""){
        $check = false; break;
        }
    }
    
    if($check == true){
        $sql_sua = "UPDATE monhoc SET MaMH = '$mamonmoi', TenMH = '$tenmon',Sotiet= $sotiet WHERE MaMH= '$mamh'";
        mysqli_query($conn,$sql_sua);
        header('Location: http://localhost:1122/index.php?view=xemMH');
    }else{
        header("Location: http://localhost:1122/index.php?view=giuMH&mamh=$mamh");
    }       
}
   
?>

