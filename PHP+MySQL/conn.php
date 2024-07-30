<?php
    $conn = new mysqLi("localhost", "root", "", "qlsinhvien");
    $class_methods = get_class_methods($conn);
    // print_r($class_methods);
    // print_r($conn->connect_error);
    // echo "<pre>";
    // var_dump($conn);
    class car{
        public $color = "red";
        public $banhNum = 4;
        public $dai = 3;
        public $rong = 2;
        function run(){
            echo "xe co the chạy";
        }
    };
    
    echo (new car())->color;
?>