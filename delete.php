<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- icon -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
    <h1 style="text-align: center;">NIRVXSH</h1>
    <?php include "nav.php" ?>
    <br>
    <?php
        if($_SESSION['role']=='a'){
            $index=$_GET['id'];
            echo"<center>ลบกระทู้หมายเลข $index </center>";
            $conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
            $query=$conn->query("DELETE FROM post WHERE id= '$index' ");
            $conn=null;
        }
        else{
            header("location:index.php");
            die();
        }
    ?>
    </div>
</body>
</html>