<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Registration</title>
    <style>
        body{
            background-image: url("image/Geometry\ Aorus.JPG");
            color: rgb(255, 255, 255);
        }
        .judul{
            text-align: center;
        }
        .logo_aorus{
            width: 300px;
            padding: 35px 0px 10px 0px;
        }
        .navigation{
            padding: 20px;
            text-align: center;
            font-size: 20px;
            background-color:#333333;
            margin-bottom:100px;
        }
        .isibody{
            margin: 0px 200px;
            text-align: left;
        }
        a{
            padding: 20px 20px 0px 20px;
            font-size: 20px;
            text-decoration: none;
            color: rgb(255, 255, 255);
        }
        a:hover{
            text-shadow:rgb(255, 72, 0) 0px 0px 20px;
        }
        .zoom{
            padding: 0px 40px 0px 40px;
        }
        .zoom:hover{
            transition: 100ms;
            transform: scale(1.3); 
        }   
        .footer{
            padding: 20px;
            font-size: 20px;
            background-color:#333333;
            margin-top:100px;
        }
        .topfontpos{
            vertical-align: top;
        }
        #backtotop{
            display: none;
            position: fixed;
            bottom: 50px;
            right: 250px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: red;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
            scroll-behavior: smooth;
        }
        #backtotop:hover{
            background-color: #555;
        }
        .form{
            background-color: #ff6a00;
            border-radius: 0px 30px 0px 30px;
            text-align:left;
            margin: 0px 750px;
            padding: 20px 50px;
        }
        .table, .table td, .table th{
            padding: 0px 20px;
            border: solid 2px white;
            border-collapse: collapse;
        }
        label{
            text-align:left;
        }
        input{
            text-align:center;
            margin-bottom: -5px
        }
        .subjudul{
            font-size:20px;
            margin-bottom:10px;
        }
    </style>
</head>
<body>
    <!-- button back to top -->
    <div>
        <button onclick="topFunction()" id="backtotop" title="Go to top">Up</button>
        <script src="../script/Back To Top.js"></script>
    </div>
    <!-- button back to top -->
    <div class="judul">
        <img class="logo_aorus" src="image/Aorus Logo + Font (White).png" alt="logo_aorus">
        <p style="margin-bottom: 40px">THE NEW KING OF GAMING</p>
    </div>
    <div class="navigation">
        <nav>
            <a href="index.html">Home</a>
            <a href="about.html">About</a>
            <a href="product.html">Product</a>
            <a href="Product Registration.php">Product Registration</a>
        </nav>
    </div>
    <div>
        <form class="form" method="POST" action="<?=$_SERVER['PHP_SELF'];?>">
            <h1>REGISTER YOUR PRODUCT</h1>
            <div>
                <p class="subjudul">Product Type</p>
                <input type="text" name="prodtype" placeholder="Insert your product type..." size=38>
                <br>
            </div>
            <div>
                <p class="subjudul">Product Name</p>
                <input type="text" name="prodname" placeholder="Insert your product name..." size=38>
                <br>
            </div>
            <div>
                <p class="subjudul">Serial Number</p>
                <input type="text" name="sernum" placeholder="Insert your serial number..." size=38>
                <br>
            </div>
            <div>
                <p class="subjudul">Purchase Date</p>
                <input type="text" name="purdate" placeholder="Insert your purchase date..." size=38>
                <br>
            </div>
            <div>
                <p class="subjudul">Purchase Region</p>
                <input type="text" name="purreg" placeholder="Insert your purchase region..." size=38>
                <br>
            </div>
            <div style="margin-top: 25px; padding-bottom:20px;" align=right>
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    <div>
        <?php
            if(isset($_POST['prodname'])){
                $prodtype=$_POST['prodtype'];
                $prodname=$_POST['prodname'];
                $sernum=$_POST['sernum'];
                $purdate=$_POST['purdate'];
                $purreg=$_POST['purreg'];

                echo "<center>Product Registered!</center>";
                echo "<center>Thanks for your purchase :)</center>";
                echo "<table class='table' align='center'>";
                echo "<tr><th>Product Type</th><th>Product Name</th><th>Serial Number</th><th>Purchase Date</th><th>Purchase Region</th></tr>";
                echo "<tr><td>$prodtype</td><td>$prodname</td><td>$sernum</td><td>$purdate</td><td>$purreg</td></tr>";
            }
        ?>
    </div>
</body>
</html>