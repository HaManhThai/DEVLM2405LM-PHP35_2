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
       

    </style>
</head>

<body>
   

    <nav id="main">
        <ul>
            <li class="li" name=""><a  >Trang chủ</a></li>
            <li class="li" name=""><a  >Giới thiệu</a></li>
            <li class="li" name=""><a >Sản phẩm</a></li>
            <li class="li" name=""><a >Dịch vụ</a></li>
            <li class="li" name=""><a  >Liên hệ</a></li>
            <li class="li" name=""><a  href="lab5_VI.php?view6=''">VI</a></li>
            <li class="li1" name=""><a  href="lab5_EN.php?view6_1=''">EN</a></li>

           
        </ul>
    </nav>     

</body>

</html>