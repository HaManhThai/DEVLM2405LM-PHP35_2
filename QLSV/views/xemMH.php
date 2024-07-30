<?php
    if(isset($_POST['s']) &&  $_POST['s'] != ''){   
         $sql_xem = 'SELECT * FROM monhoc WHERE TenMH LIKE "%'.$_POST['s'].'%"';
    }else{
        $sql_xem = "SELECT * FROM monhoc WHERE 1=1";
    }
   
    $result = mysqli_query($conn , $sql_xem);
?>

<div class="container">
  <h1 style="text-align:center;">Danh sách môn học</h1>
  <form   style="margin-bottom: 15px;display:flex"  action="" method="POST">
        <input style="margin-right: 15px" class="form-control" type="text" name="s" placeholder="Tìm kiếm môn học theo tên">
        <button class="btn btn-primary">Search</button>
  </form>

  <a style="margin-bottom: 15px;" href="index.php?view=themMH" class="btn btn-success" >Thêm môn học</a>

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th style="text-align: center;">Số thứ tự</th>
        <th style="text-align: center;">Mã môn</th>
        <th style="text-align: center;">Tên môn</th>
        <th style="text-align: center;">Số tiết</th>
        <th style="text-align: center;">Thao tác</th>
        </tr>
    </thead>
    <tbody>
       
            <?php
            $stt = 0;  
                while($row = mysqli_fetch_assoc($result)){
                    $stt ++;
            ?>
            <tr>
                <td style="text-align: center;"> <?php echo $stt; ?> </td>
                <td style="text-align: center;"> <?php echo $row['MaMH']; ?> </td>
                <td style="text-align: center;"> <?php echo $row['TenMH']; ?> </td>
                <td style="text-align: center;"> <?php echo $row['Sotiet']; ?> </td>
                <td style="text-align: center;"> 
                        <a class="btn btn-primary" href="index.php?view=giuMH&mamh=<?php echo $row['MaMH']; ?>">Edit</a> <a onclick="return confirm('Bạn có chắc chắn muốn xoá môn học này?')" class="btn btn-danger" href="index.php?view=xoaMH&mamh=<?php echo $row['MaMH']; ?>">Delete</a>
                </td>
            </tr> 
            <?php
                }
            ?>

           
        </tr>      
    </tbody>
  </table>

</div>