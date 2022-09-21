<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        if($_SESSION['role']=='a'){
            $index=$_GET['id'];
            echo"ลบกระทู้หมายเลข $index";
        }
        else{
            header("location:index.php");
            die();
        }
    ?>
</body>
</html>