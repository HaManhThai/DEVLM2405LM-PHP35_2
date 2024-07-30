<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang roof</title>

    <style>
        header{
            display: flex;
        }
        #img {
            margin: 0 auto;
            height: 35px;
            width: 50%;
           
        }
        
        img{
            margin: 0 auto;
           height: 100%;
            width: 50px;
            background: #ccc;
        }

        #main {
            margin: 0 auto;
            height: 50px;
            width: 50%;
            background: #ccc;
            
        }

        #main ul {
            margin: 0;
            padding: 1px;
            list-style: none;
            display: flex;
            justify-content: center;
        }

        #main ul .li {
            padding: 8px 8px;
            float: left;
            border-right: solid 1px #fff;
        }
        
        #main ul .li1 {
            padding: 8px 8px;
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

        .container{
            margin: 50px 50px; 
            width: 100%;
            height: 500px;
            border: 1px solid black;
        }
    </style>

</head>
<body>
     <!--b1: include de tao trang chu 
        b2: ngoai trang chu tao them cac trang gioi thieu, san pham, dich vu, lien he (dung cach GET/view)
        b3: them 1 trang login
        b4: --> 
    <header>
        <?php
            include("module/header.php");
        ?>
    </header>

    <section>
        
        <?php
           if(isset($_GET["view"])){
                $view = $_GET["view"];
                include("module/" .$view .".php");
           }else{
                include("module/home.php");
           }
        ?>
    </section>

    <footer>
        <?php
            include("module/footer.php");
        ?>
    </footer>
</body>
</html>