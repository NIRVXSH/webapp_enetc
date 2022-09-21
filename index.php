<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NIRVXSH main page</title>
</head>
<?php
    if(isset($_SESSION['id'])&&$_SESSION['role']=='a'){
?>
<body>
    <h1 style="text-align: center;">NIRVXSH</h1><hr>
        หมวดหมู่:
        <select name="เลือกหัวข้อ">
            <option value="--ทั้งหมด--">--ทั้งหมด--</option>
            <option value="เรื่องทั่วไป">เรื่องทั่วไป</option>
            <option value="เรื่องเรียน">เรื่องเรียน</option>
        </select>
        <?php
            echo "ผู้ใช้งานระบบ: $_SESSION[username]";
        ?>
        <a href="logout.php" target="_self" style="float:right">ออกจากระบบ</a>
        <br>
        <a href="newpost.php" target="_self" style="float:left">สร้างกระทู้ใหม่</a>
        <br>
        <form action="post.php" method="get">
        <ul>
        <?php 
            $i=1; 
            while($i<=10){
                echo "<li> <a href='post.php?id=$i'>กระทู้ที่$i</a> <a href='delete.php?id=$i'>ลบ</a></li>";
                $i++;
            }
        ?></ul>
        </form>
    

</body>
<?php
    }
    elseif(isset($_SESSION['id'])&&$_SESSION['role']=='m'){
?>
<body>
    <h1 style="text-align: center;">NIRVXSH</h1><hr>
        หมวดหมู่:
        <select name="เลือกหัวข้อ">
            <option value="--ทั้งหมด--">--ทั้งหมด--</option>
            <option value="เรื่องทั่วไป">เรื่องทั่วไป</option>
            <option value="เรื่องเรียน">เรื่องเรียน</option>
        </select>
        <?php
            echo "ผู้ใช้งานระบบ: $_SESSION[username]";
        ?>
        <a href="logout.php" target="_self" style="float:right">ออกจากระบบ</a>
        <br>
        <a href="newpost.php" target="_self" style="float:left">สร้างกระทู้ใหม่</a>
        <br>
        <form action="post.php" method="get">
        <ul>
        <?php 
            $i=1; 
            while($i<=10){
                echo "<li> <a href='post.php?id=$i'>กระทู้ที่$i</a>";
                $i++;
            }
        ?></ul>
        </form>
</body>
<?php
    }
    else{
?>
<body>
<h1 style="text-align: center;">NIRVXSH</h1><hr>
        หมวดหมู่:
        <select name="เลือกหัวข้อ">
            <option value="--ทั้งหมด--">--ทั้งหมด--</option>
            <option value="เรื่องทั่วไป">เรื่องทั่วไป</option>
            <option value="เรื่องเรียน">เรื่องเรียน</option>
        </select>
        <a href="login.php" target="_blank" style="float:right">เข้าสู่ระบบ</a>
        <br>
        <a href="newpost.php" target="_self" style="float:left">สร้างกระทู้ใหม่</a>
        <br>
        <form action="post.php" method="get">
            <ul>
                <?php 
                    $i=1; 
                    while($i<=10){
                        echo "<li> <a href='post.php?id=$i'>กระทู้ที่$i</a></li>";
                        $i++;
                    }
                ?>
            </ul>
        </form>
    

</body>
<?php
    }
?>
</html>