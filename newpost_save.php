<?php
    session_start();
    if(isset($_SESSION['id'])){
        $cat_id=$_POST['category'];
        $user_id=$_SESSION['user_id'];
        $title=$_POST['topic'];
        $content=$_POST['comment'];
        $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
        $conn->exec("INSERT INTO post (title,content,post_date,cat_id,user_id) VALUES ('$title','$content',NOW(),'$cat_id','$user_id')");
        
        
        $_SESSION['add_post']='success';
        $conn=null;
        header("location:newpost.php");
        die();
    }
?>