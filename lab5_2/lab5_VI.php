<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bài 5</title>

    <style>
        #main {
            margin: 0 auto;
            height: 35px;
            width: 800px;
            background: #ccc;

        }

        #main ul {
            margin: 0;
            padding: 0;
            list-style: none;
            display: flex;
            justify-content: center;
        }

        #main ul .li {
            float: left;
            border-right: solid 1px #fff;
        }
        
        #main ul .li1 {
            float: left;
        }

        #main ul li a {
            padding: 8px 15px;
            text-decoration: none;
            color: #000;
            display: block;
        }

        #main ul li a:hover,
        .selected{
            background: #792b90;
            color: #fff !important;
        }
        
        .selected1 {
            background: #792b90;
            color: #fff !important;
        }
        .selected2 {
            background: #792b90;
            color: #fff !important;
        }
        .selected3 {
            background: #792b90;
            color: #fff !important;
        }
        .selected4 {
            background: #792b90;
            color: #fff !important;
        }
        .selected5 {
            background: #792b90;
            color: #fff !important;
        }
        .selected6 {
            background: #792b90;
            color: #fff !important;
        }

    </style>
</head>

<body>
<?php
         
         if( isset($_GET["view1"]) ){
             $selected1 = 'class="selected1"';
             $selected6 = 'class="selected6"';
         }elseif(isset($_GET["view2"])){
             $selected2 = 'class="selected2"';
             $selected6 = 'class="selected6"';
         }elseif(isset($_GET["view3"])){
             $selected3 = 'class="selected3"';
             $selected6 = 'class="selected6"';
         }elseif(isset($_GET["view4"])){
             $selected4 = 'class="selected4"';
             $selected6 = 'class="selected6"';
         }else{
             $selected5 = 'class="selected5"';
             $selected6 = 'class="selected6"';
         }
     ?>    


<nav id="main">
        <ul>
            <li class="li" name="" ><a <?php if(isset($_GET["view1"])) echo $selected1?>  href="lab5_VI.php?view1=''" >Trang chủ</a></li>
            <li class="li" name=""><a <?php if(isset($_GET["view2"])) echo $selected2?> href="lab5_VI.php?view2=''"  >Giới thiệu</a></li>
            <li class="li" name=""><a <?php if(isset($_GET["view3"])) echo $selected3?> href="lab5_VI.php?view3=''"  >Sản phẩm</a></li>
            <li class="li" name=""><a <?php if(isset($_GET["view4"])) echo $selected4?>  href="lab5_VI.php?view4=''"  >Dịch vụ</a></li>
            <li class="li" name=""><a <?php if(isset($_GET["view5"])) echo $selected5?>  href="lab5_VI.php?view5=''" >Liên hệ</a></li>
            <li class="li1" name=""><a <?php echo $selected6 ?> >VI</a></li>
        </ul>
    </nav>          
  
         
</body>

</html>