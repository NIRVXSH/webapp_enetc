<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NIRVXSH main page</title>
</head>
<body>
    <h1 style="text-align: center;">NIRVXSH</h1><hr>
        หมวดหมู่:
        <select name="เลือกหัวข้อ">
            <option value="--ทั้งหมด--">--ทั้งหมด--</option>
            <option value="เรื่องทั่วไป">เรื่องทั่วไป</option>
            <option value="เรื่องเรียน">เรื่องเรียน</option>
        </select>
        <a href="login.html" target="_blank" style="float:right">เข้าสู่ระบบ</a>
        <br>
        <form action="post.php" method="get">
        <?php 
            $i=1; 
            while($i<=10){
                echo "<li> <a href='post.php?id=$i'>กระทู้ที่$i</a></li>";
                $i++;
            }
        ?>
        </form>
    

</body>
</html>