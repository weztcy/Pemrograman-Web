<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP Test Get</title>
</head>
<body>
    <form metod="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <div>
            <label for="">Nama</label>
            <input type="text" name="fnama">
        </div>
        <div>
            <label for="">Email</label>
            <input type="text" name="femail">
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
    <div>
        <?php
            if(isset($_POST['fnama'])){
                $nama = $_POST['fnama'];
                $email = $_POST['femail'];
                echo "Nama: $nama, email: $email";
            }
        ?>
    </div>
</body>
</html>