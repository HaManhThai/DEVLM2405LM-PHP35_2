<?php

    if(isset($_POST['btnSave'])){
        $masv =$_POST["masv"];
        $hosv =$_POST["hosv"];
        $tensv =$_POST["tensv"];
        $phai = $_POST["phai"];
        $ngaysinh =$_POST["ngaysinh"];
        $noisinh =$_POST["noisinh"];

        // kh cho ng dùng nhập kí tự nháy (không xoá đƯợc )
        $check = true;
        for($i =0; $i <= strlen($masv)-1; $i++){
          if($masv[$i] == '\'' || $masv[$i] == "\""){
            $check = false; break;
          }
          
        }
       
        if($check == true){
          $sqlthem = "INSERT INTO sinhvien(MaSV,HoSV,TenSV,Phai,NgaySinh,NoiSinh) VALUES('$masv','$hosv','$tensv','$phai','$ngaysinh','$noisinh')";
          mysqli_query($conn,$sqlthem);
          header('Location: http://localhost:1122/index.php?view=xemSV');
        }else{
          header('Location: http://localhost:1122/index.php?view=themSV');
        }       
      }
?>

<div class="container">
  <h2 style="text-align: center">Thêm sinh viên mới</h2>
  <form action="" method="post">
    <div class="form-group">
      <label for="masv">Mã sinh viên</label>
      <input type="text" class="form-control" id="masv" placeholder="Nhập mã sinh viên" name="masv">
    </div>
    <div class="form-group">
      <label for="hosv">Họ sinh viên</label>
      <input type="text" class="form-control" id="hosv" placeholder="Nhập họ của sinh viên" name="hosv">
    </div>
    <div class="form-group">
      <label for="tensv">Tên sinh viên</label>
      <input type="text" class="form-control" id="tensv" placeholder="Nhập tên của sinh viên" name="tensv">
    </div>

    <div class="form-group">
      <label for="">Giới tính</label>
      </br>
      
      <input type="radio" class="" id="nam" name="phai" value="Nam">
      <label for="nam">Nam</label>
      <input type="radio" class="" id="nu" name="phai" value="Nữ">
      <label for="nu">Nữ</label>
    </div>

  
    <div class="form-group">
      <label for="ngaysinh">Ngày sinh</label> 

      <input type="text" class="form-control" id="ngaysinh" placeholder="Nhập ngày sinh của sinh viên theo mẫu yy-mm-dd" name="ngaysinh">
    </div>
    <div class="form-group">
      <label for="noisinh">Nơi sinh</label>
      <input type="text" class="form-control" id="noisinh" placeholder="Nhập nơi sinh của sinh viên" name="noisinh">
    </div>
    <button type="submit" class="btn btn-success" name="btnSave">Thêm sinh viên</button>
  </form>
</div>
      