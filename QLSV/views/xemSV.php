
<?php

    if(isset($_POST['s']) && $_POST['s'] != ''){
      $lietke_sql = 'SELECT * FROM sinhvien WHERE TenSV LIKE "%'.$_POST['s'].'%" ';// tin kiem theo ten thoi
    }else{
      $lietke_sql = "SELECT * FROM sinhvien WHERE 1=1";
    }
    $result = mysqli_query($conn,$lietke_sql);   
?>

<div class="container">
  <h1 style="text-align:center">Danh sách sinh viên</h1>
  
  <form action="" method='post' style="display:flex; margin-bottom: 15px ">
    
      <input style="margin-right:10px; " class="form-control" type="text" name='s' placeholder="Tìm kiếm sinh viên theo tên" style='margin-bottom :15px; margin-top:15px'>
      <button class="btn btn-primary" name="btnSearch">Search</button>
    
   
  </form>
  <a style="margin-bottom: 15px;" href="index.php?view=themSV" class="btn btn-success" >Thêm sinh viên</a>
  <!-- <p>The .table-dark class adds a black background to the table:</p>             -->
  <table class="table">
    <thead class=" thead-dark">
      <tr>
        <th style="text-align:center">Số thứ tự</th>
        <th style="text-align:center">Mã sinh viên</th>
        <th style="text-align:center">Họ sinh viên</th>
        <th style="text-align:center">Tên sinh viên</th>
        <th style="text-align:center">Giới tính</th>
        <th style="text-align:center">Ngày sinh</th>
        <th style="text-align:center">Nơi sinh</th>
        <th style="text-align:center">Thao tác</th>
      </tr>
    </thead>

    <tbody>

        <?php
            $stt =0;
            while($row = mysqli_fetch_assoc($result)){
                $stt++;
               
            ?>
                <tr>
                    <td style="text-align:center"><?php echo $stt; ?></td>
                    <td style="text-align:center"><?php echo $row['MaSV']; ?></td>
                    <td style="text-align:center"><?php echo $row['HoSV']; ?></td>
                    <td style="text-align:center"><?php echo $row['TenSV'];?></td>
                    <td style="text-align:center"><?php if($row['Phai'] == "Nam") echo "Nam"; elseif($row['Phai'] == "Nữ") echo "Nữ"; else ""?></td>
                    <td style="text-align:center"><?php echo $row['NgaySinh'] ?></td>
                    <td style="text-align:center"><?php echo $row['NoiSinh'] ?></td>
                    <td style="display: flex; justify-content:center">
                      <a href="index.php?view=giuSV&masv=<?php echo $row['MaSV']; ?>" class="btn btn-primary">Edit</a> <a onclick="return confirm('Bạn có chắc chắn muốn xoá sinh viên này?')" href="index.php?view=xoaSV&masv=<?php echo $row['MaSV']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                      
                </tr>
            <?php
            }
        ?>
          
       
   
    </tbody>
  </table>
</div>
