<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>ADMIN CỬA HÀNG LUÂN VŨ</title>
</head>
<body>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .clearfix:after{
            content: ".";
            display: block;
            clear: both;
            visibility: hidden;
            line-height: 0;
            height: 0;
        }

        .clearfix{
            clear: both;
            display: block;
        }

        ul li{
            list-style: none;
        }

        body{
            background: gray;
            font-size: 15px;
            line-height: 22px;
            font-family:  Arial, Helvetica, sans-serif;
        }

        #wrapper{
            width: 1470px;
            margin: 0px auto;
        }

        #header{
            background: red;
            text-align: center;
            padding: 5px;
            color: #fff;
            height: 30px;
        }

        #wp-content{
            background: #fff;
        }

        #sidebar{
            width: 300px;
            float: left;
            min-height: 660px;
            padding: 15px;
            background: #e5e5e5;
        }

        #content{
            width: 1170px;
            float: right;
            min-height: 660px;
            padding: 15px;
        }

        .post-title{
            padding: 10px 0px;
            font-size: 23px;
        }

        #footer{
            text-align: center;
            background: chartreuse;
            padding: 5px 0px;
            color: #fff;
        }

        #a{
            text-decoration: none;
        }
    </style>

<?php
    session_start();
    if(!isset($_SESSION["user"])){
        header("location: ../page/login.php");
    }
?>
<div id="wrapper">
    <div id="header">
        <p style="margin-left: 1150px; font-size: 16px; font-weight: bold;">Nguyễn Vũ Luân &nbsp;<a href="../page/logout.php" title="logout">Đăng xuất</a></p>
         
    </div>
    <!-- end-header -->