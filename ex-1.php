<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biến và hằng trong php</title>
</head>
<body>
    <?php
        // khai báo biến:
        echo '<p> khai báo biến';
        $a = 2;
        $b  =5.5;
        echo '<p> $a = '.$a;
        echo '<p> $b = '.$b;
        echo '<hr>';
        // xem và đổi kiểu dữ liệu: 
        echo '<p> xem và đổi kiểu dữ liệu';
        echo '<p> kiểu dữ liệu của $a là ' . gettype($a);
        echo '<p> kiểu dữ liệu của $b là '. gettype($b);

        settype($a,"string"); // đổi datatype cho $a từ integer thành string
        echo '<p>  kiểu dữ liệu của $a sau khi đổi: '.gettype($a); 

        $b = (string)$b; //cũng là 1 cách để đổi kiểu dữ liệu 
        echo '<p>  kiểu dữ liệu của $b sau khi đổi: '.gettype($b); 

        // xem biến có giá trị chưa và huỷ biến:
        echo '<p> xem biến có giá trị chưa và huỷ biến';
        echo "<hr>";
        echo '<p> $a có giá trị hay chưa '. isset($a);

        $c = $a.$b;
        echo '<p> $c = '.$c;
        unset($c); // huỷ biến $c => sẽ không có biến $c nữa
        


        // khai báo hằng:
        echo '<p> khai báo hằng';
        define("PI",3.1444444);
        echo '<p> PI = '.PI;
        echo '<P> PI = '.constant("PI");
        // hàm có sẵn: 
        echo '<hr>';
        echo '<p> Một số hàm có sẵn';
        echo '<p> tên file này + địa chỉ trên máy là: ' . __FILE__;
        echo '<p> dòng này là dòng thứ: ' . __LINE__;
        echo '<p> còn vài cái _FUNCTION_ , _CLASS_ , _METHOD_ tính sau';
    ?>  
</body>
</html> 