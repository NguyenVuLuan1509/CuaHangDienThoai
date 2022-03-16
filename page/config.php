<?php
    //Tạo CSDL
    $conn= new mysqli('localhost', 'root', '', 'giasu');
$conn = new mysqli("localhost", "root", "","cuahangdienthoai");
//Kiểm tra kết nối
if ($conn->connect_error) {
  die("Kết nối lỗi: " . $conn->connect_error);
}
else
  echo "Kết nối thành công";
?>