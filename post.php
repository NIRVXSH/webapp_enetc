<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">NIRVXSH</h1><hr>
    <center>
        ต้องการดูกระทู้หมายเลข <?php echo $_GET["id"] ?><br>
        <?php 
            if($_GET["id"]%2==0)
                echo"เป็นกระทู้หมายเลขคู่";
            else
                echo"เป็นกระทู้หมายเลขคี่";
        ?><br>
        <table style="border: 2px solid black; width: 40%;">
        <tr><td align="center" style="background-color: #6CD2FE;">แสดงความคิดเห็น</td></tr>
        <tr><td align="center"><textarea name="comment" id="" cols="80%" rows="10%"></textarea></td></tr>
        <tr><td align="center"><input type="submit" value="ส่งข้อความ"></td></tr>
        </table>
        <a href="index.php">กลับสู่หน้าหลัก</a>
    </center>
</body>
</html>