<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css"> -->
    <title>Đăng nhập</title>
</head>
<body>

    <div class="container-fluid">
        <div class="container" style="background-color: #99FF66; width: 500px; height: 295px;  margin-left: auto; margin-right: auto; margin-top: 200px;">
        </br>    
        <h3 style="text-align: center; color: red; font-size: 32px;">ADMIN ĐĂNG NHẬP</h3>
            <div style="margin-left: 70px; font-size: 18px;">
            <form action="xulydangnhap.php" method="POST" >
                <table >
                    <tr>
                        <td>Tên đăng nhập:</td>
                        <td><input type="text" name="username"></td>
                    </tr>
                    <tr>
                        <td>Mật khẩu:</td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td colspan="2"> 
                            <button type="submit" name="submit" style="background-color: red; margin-left: 116px">Đăng nhập</button>
                        </td>
                    </tr>
                </table>
                <p style="color: red; font-size: 14px; text-align: center;">
                    <?php
                        if(isset($_SESSION["thongbao"])){
                            echo $_SESSION["thongbao"];
                            //session_unset("thongbao");
                        }
                    ?>
                </p>
            </form>
            </div>
            
        </div>
    </div>

    <!-- <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script> -->
</body>
</html>