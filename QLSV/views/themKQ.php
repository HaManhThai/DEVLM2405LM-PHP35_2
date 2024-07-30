<?php
    if(isset($_POST['btnSave'])){

        // $masv = $_POST['masv'];
        $masvmoi = $_POST['masvmoi'];

        $mamh = $_POST['mamh'];
        $diem = $_POST['diem'];

       

        $check = true;
        for($i = 0; $i <= strlen($masvmoi)-1 ;$i++ ){
            if($masvmoi[$i] == "\"" || $masvmoi[$i] == '\''){
                $check = false; break;
            }
        }

        if($check == true){
            $sql_them ="INSERT INTO ketqua VALUES('$masvmoi', '$mamh', $diem)";
            mysqli_query($conn, $sql_them);
            header('Location: http://localhost:1122/index.php?view=xemKQ');
        }else{
            header('Location: http://localhost:1122/index.php?view=themKQ');
        }
    }
?>

<div class="container">
    <h2 style="text-align:center;">Thêm Kết Quả</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="masv">Mã sinh viên</label>
            <input class="form-control" type="text" name="masvmoi" id="masv" placeholder="Nhập mã sinh viên">
        </div>

        <div class="form-group">
            <label for="mamh">Mã môn học</label>
            <input class="form-control" type="text" name="mamh" id="mamh" placeholder="Nhập mã môn học">
        </div>

        <div class="form-group">
            <label for="diem">Điểm</label>
            <input class="form-control" type="text" name="diem" id="diem" placeholder="Nhập điểm">
        </div>
        <button class="btn btn-success" name="btnSave">Thêm kết quả</button>
    </form>
</div>