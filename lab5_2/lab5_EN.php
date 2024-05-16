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
        
        .selected1_1 {
            background: #792b90;
            color: #fff !important;
        }
        .selected2_1 {
            background: #792b90;
            color: #fff !important;
        }
        .selected3_1 {
            background: #792b90;
            color: #fff !important;
        }
        .selected4_1 {
            background: #792b90;
            color: #fff !important;
        }
        .selected5_1 {
            background: #792b90;
            color: #fff !important;
        }
        .selected6_1 {
            background: #792b90;
            color: #fff !important;
        }

    </style>
</head>

<body>


    <?php
         
         if( isset($_GET["view1_1"]) ){
             $selected1_1 = 'class="selected1_1"';
             $selected6_1 = 'class="selected6_1"';
         }elseif(isset($_GET["view2_1"])){
             $selected2_1 = 'class="selected2_1"';
             $selected6_1 = 'class="selected6_1"';
         }elseif(isset($_GET["view3_1"])){
             $selected3_1 = 'class="selected3_1"';
             $selected6_1 = 'class="selected6_1"';
         }elseif(isset($_GET["view4_1"])){
             $selected4_1 = 'class="selected4_1"';
             $selected6_1 = 'class="selected6_1"';
         }else{
             $selected5_1 = 'class="selected5_1"';
             $selected6_1 = 'class="selected6_1"';
         }
     ?>    


    <nav id="main">
        <ul>
            <li class="li" name="" ><a <?php if(isset($_GET["view1_1"])) echo $selected1_1?>  href="lab5_EN.php?view1_1=''" >Home</a></li>
            <li class="li" name=""><a <?php if(isset($_GET["view2_1"])) echo $selected2_1?>  href="lab5_EN.php?view2_1=''"  >About</a></li>
            <li class="li" name=""><a <?php if(isset($_GET["view3_1"])) echo $selected3_1?>  href="lab5_EN.php?view3_1=''" >Products</a></li>
            <li class="li" name=""><a <?php if(isset($_GET["view4_1"])) echo $selected4_1?>  href="lab5_EN.php?view4_1=''"  >Services</a></li>
            <li class="li" name=""><a <?php if(isset($_GET["view5_1"])) echo $selected5_1?>  href="lab5_EN.php?view5_1=''" >Contact</a></li>
            <li class="li1" name=""><a <?php echo $selected6_1 ?> >EN</a></li>
        </ul>
    </nav>            
  
         
</body>

</html>