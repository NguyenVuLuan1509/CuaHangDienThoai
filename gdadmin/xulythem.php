<?php
    $tenhh= $_POST['tenhh'];
    $mota= $_POST['mota'];
    $gia= $_POST['gia'];
    $soluong= $_POST['soluong'];
    

    // //Đưa dữ liệu vào bảng
    // //Kết nối DB
    $conn= new mysqli('localhost', 'root', '', 'cuahangdienthoai');

    // //Thêm dữ liệu vào bảng
    $sql= "INSERT INTO hanghoa (tenhh, mota, gia, soluong) VALUES (' $tenhh', '$mota', '$gia', '$soluong')";
    $result= $conn->query($sql);

    if($result){
        header('Location: index-admin.php');
    }
    //Đóng kết nối
    $conn->close();
?>