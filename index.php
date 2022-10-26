<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>NIRVXSH main page</title>
</head>
<?php
    if(isset($_SESSION['id'])){
?>
<body>
    <div class="container">
    <h1 style="text-align: center;">NIRVXSH</h1>
    <?php
        include "nav.php";
    ?>
    <br>
    <div class="d-flex justify-content-between">
        <div>
            <label for=""> หมวดหมู่</label>
            <span class="dropdown">
                <button class="btn btn-light dropdown-toggle btn-sm" type="button" id="button2" data-bs-toggle="dropdown" aria-expanded="false">
                    ---ทั้งหมด---
                </button>
                <ul class="dropdown-menu" aria-labelledby="button2">
                    <li><a href="#" class="dropdown-item">ทั้งหมด</a></li>
                    <li><a href="#" class="dropdown-item">เรื่องเรียน</a></li>
                    <li><a href="#" class="dropdown-item">เรื่องทั่วไป</a></li>
                </ul>
            </span>
        </div>
        <div><a href="newpost.php" class="btn btn-success btn-sm"><i class="bi bi-plus"></i>สร้างกระทู้ใหม่</a></div>
    </div>
        
        
        <br>
        <table class="table table-striped">
            <ul>
                <?php 
                    $i=1; 
                    while($i<=10){
                        echo "<tr><td> <a href='post.php?id=$i' style='text-decoration:none'>กระทู้ที่$i</a></td>";
                        if($_SESSION['role']=='a'){
                            echo "<td> <a href=delete.php?id=$i class='btn btn-danger btn-sm'><i class='bi bi-trash3'></i></a> </td>";
                        }
                        
                        echo"</tr>";
                        $i++;
                    }
                ?>
            </ul>
        </table>
        </div>
</body>

<?php
    }
    else{
?>
<body>
    <div class="container">
    <h1 style="text-align: center;">NIRVXSH</h1>
    <?php
        include "nav.php";
    ?>
    <br>
    <div class="d-flex">
        <div>
            <label for=""> หมวดหมู่</label>
            <span class="dropdown">
                <button class="btn btn-light dropdown-toggle btn-sm" type="button" id="button2" data-bs-toggle="dropdown" aria-expanded="false">
                    ---ทั้งหมด---
                </button>
                <ul class="dropdown-menu" aria-labelledby="button2">
                    <li><a href="#" class="dropdown-item">ทั้งหมด</a></li>
                    <li><a href="#" class="dropdown-item">เรื่องเรียน</a></li>
                    <li><a href="#" class="dropdown-item">เรื่องทั่วไป</a></li>
                </ul>
            </span>
        </div>
    </div>    
        <br>
        <table class="table table-striped">
            <ul>
                <?php 
                    $i=1; 
                    while($i<=10){
                        echo "<tr><td> <a href='post.php?id=$i' style='text-decoration:none'>กระทู้ที่$i</a></td></tr>";
                        $i++;
                    }
                ?>
            </ul>
        </table>
        
</body>
<?php
    }
?>
</html>