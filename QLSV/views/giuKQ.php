
<?php
    $masv = $_GET['masv'];
    $sql_giu = "SELECT * FROM ketqua WHERE MaSV = '$masv'";
    $result = mysqli_query($conn, $sql_giu);
    $row = mysqli_fetch_assoc($result);
?>






<div class="container">
    <h2 style="text-align:center;">Chỉnh sửa Kết Quả</h2>
    <form action="index.php?view=suaKQ&masv=<? echo $masv ?>" method="POST">
        <div class="form-group">
            <label for="masv">Mã sinh viên</label>
            <input class="form-control" type="text" name="masvmoi" id="masv" placeholder="Nhập mã sinh viên"
            value="<?php echo $row['MaSV'] ?>">
        </div>

        <div class="form-group">
            <label for="mamh">Mã môn học</label>
            <input class="form-control" type="text" name="mamh" id="mamh" placeholder="Nhập mã môn học"
            value="<?php echo $row['MaMH'] ?>">
        </div>

        <div class="form-group">
            <label for="diem">Điểm</label>
            <input class="form-control" type="text" name="diem" id="diem" placeholder="Nhập điểm"
            value="<?php echo $row['Diem'] ?>">
        </div>
        <button class="btn btn-primary" name="btnSave">Update</button>
    </form>
</div>