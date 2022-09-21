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
<?php
    if(isset($_SESSION['id'])){
?>
<body>
    
    <h1 style="text-align: center;">NIRVXSH</h1><hr>
    <form action="">
    <table>
    <tr><td colspan="2">
    <?php
        echo "ผู้ใช้: $_SESSION[username]<br>";
    ?></td>
    </tr>
    <tr>
    <td> หมวดหมู่: </td>
    <td> <select name="เลือกหัวข้อ">
            <option value="--ทั้งหมด--">--ทั้งหมด--</option>
            <option value="เรื่องทั่วไป">เรื่องทั่วไป</option>
            <option value="เรื่องเรียน">เรื่องเรียน</option>
        </select></td>
        </tr>
    
    <tr><td>หัวข้อ:</td>   <td><input type="text"></td></tr> 
    <tr><td>เนื้อหา: </td> <td><textarea name="data" id="" cols="25" rows="4"></textarea></td></tr>
    
    <tr><td colspan="2" align="center"><input type="submit" value="บันทึกข้อความ"></td></tr>
    </table>
    </form>
</body>
<?php
    }
    else{
        header("location:index.php");
        die();}
?>
</html>