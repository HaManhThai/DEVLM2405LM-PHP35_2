<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CÁC THỂ LOẠI KIỂU DỮ LIỆU</title>
</head>
<body>
    <?php
        /* có 5 kiểu dữ liệu chính: 
        number, 
        string, 
        boolean, 
        null(khai báo biến mà chưa gán giá trị HOẶC cho nó giá trị NULL), 
        array hoặc object
        */
        
        // 1,kiểu NULL: chưa có giá trị:
            $a = NULL;
            echo '<p> kiểu dữ liệu của $a là: '. gettype($a);

        // 2,kiểu boolean: đúng sai;
        echo "<hr>";
            // số 0, NULL, FALSE,"": có ý nghĩa là false
            // còn lại sẽ là true
            $a = 0; $b = ""; $c = false; $d = NULL;
            echo '<p> kiểu dữ liệu của $a $b $c $d và giá trị của chúng lần lượt là: ' . gettype($a). " ".gettype($b)." ".gettype($c)." ".gettype($d) . " ". $a. " ".$b. " ".$c." ".$d;
            settype($a,'boolean');
            echo '<p> kiểu dữ liệu của $a và giá trị của $a sau khi sửa lần lượt là: ' . gettype($a) . " ". $a;
        
        // 3, kiểu integer
        // 4, kiểu string
            /* 4 dấu: 
            
            nháy đơn.
            nháy kép: biến tất cả thành chuỗi,
            kí tự thoát \: vô hiệu hoá nháy,
            dấu bọc biến {$a}
            */
             
            // nháy đơn: biến tất cả thành chuỗi:
            $a = 1;
            echo '<p> $a';
            
            // nháy kép: chứa dc biến:
            echo "<p> $a";

            // dấu thoát \: vô hiệu hoá dấu "
            echo "<p> anh ta nói: \"Hello Wolrd\"";

            // dấu bọc biến: {$a}: đỡ nhầm biến với chuỗi khi viết gần nhau:
            $b = "He";
            echo "<p> {$b}llo";



    // toán tử:
        // toán tử số học:

        // toán tử tăng giảm:

        // toán tử so sánh:

        // toán tử điều kiện:

        // toán tử gán:

        // toán tử logic:
    ?>

</body>
</html>