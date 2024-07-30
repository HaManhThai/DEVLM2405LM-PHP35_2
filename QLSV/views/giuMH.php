<?php
    $mamh = $_GET['mamh']; 
    $sql_xem = "SELECT * FROM monhoc WHERE MaMH= '$mamh'";
    $result = mysqli_query($conn, $sql_xem);
    $row = mysqli_fetch_assoc($result);
?>

<div class="container">
    <h2 style="text-align: center">Chỉnh sửa thông tin môn học</h2>
    <form action="index.php?view=suaMH&mamh=<?php echo $row['MaMH']; ?>" method="POST">
        <div class="form-group">
            <label for="mamon">Mã môn học</label>
            <input type="text" name="mamonmoi" id="mamon" class="form-control" placeholder="Nhập mã môn học" 
            value="<?php echo $row['MaMH']  ?>">
        </div>
        <div class="form-group">
            <label for="tenmon">Tên môn học</label>
            <input type="text" name="tenmon" id="tenmon" class="form-control" placeholder="Nhập tên môn học"
            value="<?php echo $row['TenMH']  ?>">
        </div>
        <div class="form-group">
            <label for="sotiet">Sô tiết</label>
            <input type="text" name="sotiet" id="sotiet" class="form-control" placeholder="Nhập số tiết"
            value="<?php echo $row['Sotiet']  ?>">
        </div>
        <button name="btnSave" class="btn btn-primary">Cập nhật</button>
    </form>
</div>