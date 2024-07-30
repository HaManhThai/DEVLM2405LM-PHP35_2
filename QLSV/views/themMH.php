<?php
    if(isset($_POST['btnSave'])){
        $mamon = $_POST['mamon'];
        $tenmon = $_POST['tenmon'];
        $sotiet = $_POST['sotiet'];

        $check = true;
        for($i =0; $i <= strlen($mamon)-1; $i++){
            if($mamon[$i] == '\'' || $mamon[$i] == "\""){
            $check = false; break;
            }
        }
    
        if($check == true){
            $sql_them = "INSERT INTO monhoc(MaMH,TenMH,Sotiet) VALUES('$mamon', '$tenmon', $sotiet)";
            mysqli_query($conn,$sql_them);
            header('Location: http://localhost:1122/index.php?view=xemMH');
        }else{
            header("Location: http://localhost:1122/index.php?view=themMH");
        }       
    }
?>

<div class="container">
    <h2 style="text-align: center">Thêm môn học</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="mamon">Mã môn học</label>
            <input type="text" name="mamon" id="mamon" placeholder="Nhập mã môn học" class="form-control">
        </div>
        <div class="form-group">
            <label for="tenmon">Tên môn học</label>
            <input type="text" name="tenmon" id="tenmon" placeholder="Nhập tên môn học" class="form-control">
        </div>
        <div class="form-group">
            <label for="sotiet">Số tiết</label>
            <input type="text" name="sotiet" id="sotiet" placeholder="Nhập số tiết" class="form-control">
        </div>
        <button type="submit" class="btn btn-success" name="btnSave">Thêm môn học</button>
    </form>
</div>