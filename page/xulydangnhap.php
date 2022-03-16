<?php
    session_start();
    $conn= new mysqli('localhost', 'root', '', 'cuahangdienthoai');    
    if(isset($_POST["submit"]) && $_POST["username"] !='' && $_POST["password"] !='' ){
        $username= $_POST["username"];
        $password= $_POST["password"];
        $password= md5($password);

        $sql= "SELECT * FROM nguoidung WHERE username='$username' AND password='$password'";
        $user= mysqli_query($conn,$sql);

        if(mysqli_num_rows($user) >0){
            $_SESSION["user"]= $username;
            header("location: ../gdadmin/index-admin.php");
        }
        else{
            $_SESSION["thongbao"] = "Sai TÊN ĐĂNG NHẬP hoặc MẬT KHẨU vui lòng nhập lại!";
            header("location: login.php");
        }
    }
    else{
        $_SESSION["thongbao"]= "Vui lòng nhập đầy đủ thông tin!";
        header("location: login.php");
    }
?>