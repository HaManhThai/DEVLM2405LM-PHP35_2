<?php
    $masv = $_GET['masv'];
    
    $xem_sql = "SELECT * FROM sinhvien WHERE MaSV = '$masv'";
    $result = mysqli_query($conn, $xem_sql);
    $row = mysqli_fetch_assoc($result); 
    
?>



<div class="container">
  <h2>Chỉnh sửa thông tin sinh viên</h2>
  <form action='index.php?view=suaSV&masv=<?php echo $row['MaSV']; ?>' method="POST">
    <div class="form-group">
      <label for="masvmoi">Mã sinh viên</label>
      <input type="text" class="form-control" id="masvmoi" placeholder="Nhập mã sinh viên" name="masvmoi"
        value="<?php echo $row['MaSV']; ?>">
    </div>
    <div class="form-group">
      <label for="hosv">Họ sinh viên</label>
      <input type="text" class="form-control" id="hosv" placeholder="Nhập họ của sinh viên" name="hosv"
      value="<?php echo $row['HoSV']; ?>">
    </div>
    <div class="form-group">
      <label for="tensv">Tên sinh viên</label>
      <input type="text" class="form-control" id="tensv" placeholder="Nhập tên của sinh viên" name="tensv"
      value="<?php echo $row['TenSV']; ?>">
    </div>
    <div class="form-group">
      <label for="">Giới tính</label>
      <br>
      <input type="radio" name="phai" class="" id="nam" value="Nam" <?php if(!empty($row['Phai']) && $row['Phai'] == "Nam") echo "checked='checked'"?> >
      <label for="nam">Nam</label>
      <input type="radio" name="phai" class="" id="nu"  value="Nữ" <?php if(!empty($row['Phai']) && $row['Phai'] == "Nữ") echo "checked='checked'"?> >
      <label for="nu">Nữ</label>
    </div>
    <div class="form-group">
      <label for="ngaysinh">Ngày sinh</label>
      <input type="text" class="form-control" id="ngaysinh" placeholder="Nhập ngày sinh của sinh viên theo mẫu yy-mm-dd" name="ngaysinh"
      value="<?php echo $row['NgaySinh']; ?>">
    </div>
    <div class="form-group">
      <label for="noisinh">Nơi sinh</label>
      <input type="text" class="form-control" id="noisinh" placeholder="Nhập nơi sinh của sinh viên" name="noisinh"
      value="<?php echo $row['NoiSinh']; ?>">
    </div>
    <button type="submit" class="btn btn-primary" name="btnSave1">Cập nhật</button>
  </form>
</div>