<?php
    
    if(isset($_POST['s']) && $_POST['s'] != ""){
        $sql_view = "SELECT * FROM ketqua WHERE MaSV LIKE '%".$_POST['s'] ."%'";
    }else{
        $sql_view = "SELECT * FROM ketqua WHERE 1=1";
    }
    $result = mysqli_query($conn , $sql_view);
?>



<div class="container">
  <h1 style="text-align:center;">Danh sách kết quả</h1>
  <form  action="" method="POST" style="display: flex; margin-bottom:15px;">
    <input style="margin-right:15px;" class="form-control" type="text" name="s" id="" placeholder="Tìm kiếm theo mã sinh viên">
    <button class="btn btn-primary" name="btnSave">Search</button>
  </form>
  <a style="margin-bottom:15px;" class="btn btn-success" href="index.php?view=themKQ">Thêm kết quả</a>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th style="text-align:center;"> Số thứ tự</th>
        <th style="text-align:center;">Mã sinh viên</th>
        <th style="text-align:center;">Mã môn học</th>
        <th style="text-align:center;">Điểm</th>
        <th style="text-align:center;">Thao tác</th>
      </tr>
    </thead>
    <tbody>
        <?php
            $stt =0;
            while($row = mysqli_fetch_assoc($result)){
                $stt++;
            
        ?>
            <tr>
                <td style="text-align:center;"> <?php echo $stt; ?></td>
                <td style="text-align:center;"><?php echo $row['MaSV']; ?></td>
                <td style="text-align:center;"><?php echo $row['MaMH']; ?></td>
                <td style="text-align:center;"><?php echo $row['Diem']; ?></td>
                <td style="text-align:center;">
                    <a class="btn btn-primary" href="index.php?view=giuKQ&masv=<?php echo $row['MaSV']; ?>">Edit</a> <a class="btn btn-primary" onclick="return confirm('Bạn có chắc chắc muốn xoá?')" href="index.php?view=xoaKQ&masv=<?php echo $row['MaSV']; ?>">Delete</a>
                </td>
            </tr>
            <?php
            }
        ?>
      
    </tbody>
  </table>
 
</div>