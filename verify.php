<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
        if(isset($_SESSION['id'])){
            header("location:index.php");
            die();
        }
        else{
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style="text-align: center;">NIRVXSH</h1><hr>
    <center>
        <?php 
           
            $login=$_POST['login'];
            $passwordlogin=$_POST['passwordlogin'];
    
            if($login=="admin"&&$passwordlogin=="ad1234"){
                echo"ยินดีต้อนรับคุณ ADMIN<BR>";
                $_SESSION['username']='admin';
                $_SESSION['role']='a';
                $_SESSION['id']=session_id();
            }
            elseif($login=="member"&&$passwordlogin=="mem1234"){
                echo"ยินดีต้อนรับคุณ MEMBER<BR>";
                $_SESSION['username']='member';
                $_SESSION['role']='m';
                $_SESSION['id']=session_id();
            }
            else
                echo"ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง <BR>";
            echo "<a href='index.php'>กลับสู่หน้าหลัก</a>";
        ?>
    </center>
</body>
<?php
        }
?>
</html>




