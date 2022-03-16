<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style-admin.css">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
    <title>ADMIN CỬA HÀNG LUÂN VŨ</title>
</head>

<body>
<?php
    session_start();
    if(!isset($_SESSION["user"])){
        header("location: ../page/login.php");
    }
?>
<div id="wrapper">
    <div id="header">
        <p style="float: right; margin-right: 30px; margin-top: 6px;">Nguyễn Vũ Luân &nbsp;<a href="../page/logout.php" title="logout">Đăng xuất</a></p>
        
    </div>
    <!-- end-header -->
    <div id="wp-content" class="clearfix">
        <div id="sidebar">
          <img src="../hinh/logo-white.png" style="margin-bottom: 10px; height: 50px;">
          <div style="margin-left: 0px; float: right; width: 230px;">
            <button type="button" class="btn btn-secondary border rounded-0" style="width: 242px; text-align: left;">Trang chủ</button>                                 
              <div class="dropdown dropend" style="width: 242px; padding: 0;">
                <button type="button" class="btn btn-secondary border rounded-0 dropdown-toggle daycot" data-bs-toggle="dropdown" style="text-align: left;">
                  Quản lý sản phẩm
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="gdadmin/ql-sp.php">Normal</a></li>
                  <li><a class="dropdown-item " href="#">Active</a></li>
                  <li><a class="dropdown-item " href="#">Disabled</a></li>
                </ul>
              </div>
          
              <button type="button" class="btn btn-secondary border rounded-0 " style="width: 242px; text-align: left;">Apple</button>
          
              <div class="dropdown dropend" style="width: 242px; padding: 0;">
                <button type="button" class="btn btn-secondary border rounded-0 dropdown-toggle daycot" data-bs-toggle="dropdown" style="text-align: left;">
                  Quản lý nhân viên
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Normal</a></li>
                  <li><a class="dropdown-item " href="#">Active</a></li>
                  <li><a class="dropdown-item " href="#">Disabled</a></li>
                </ul>
              </div>
          
              <div class="dropdown dropend" style="width: 242px; padding: 0;">
                <button type="button" class="btn btn-secondary border rounded-0 dropdown-toggle daycot" data-bs-toggle="dropdown" style="text-align: left;">
                  Quản lý nhân viên
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Normal</a></li>
                  <li><a class="dropdown-item " href="#">Active</a></li>
                  <li><a class="dropdown-item " href="#">Disabled</a></li>
                </ul>
              </div>
            </div>
        </div>

       <!-- Phần nội dung hiển thị -->
       <div id="content" style="background-color: #EEEEEE;">
           <!-- Đường dẫn về -->
            <div>
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb" style="font-weight: bold;">
                      <li class="breadcrumb-item"><a href="../index.html">Trang chủ</a></li>
                      <li class="breadcrumb-item"><a href="#">Điện thoại</a></li>
                      <li class="breadcrumb-item"><a href="#">Iphone</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Iphone 12pro-max</li>
                    </ol>
                  </nav>
            </div>

            <h1 class="post-title">TRANG CHỦ</h1>
           <p>Chào mừng các bạn đến với trang chủ của cắt giao diện. 
               
           </p>
       </div>
   </div>
   <!-- end-content -->

   <!-- footer -->
   <div class="footer">
    <div class="container">
        <div style="text-align: center;">
            <img src="../hinh/logo-white.png" style="margin-top: 5px; height:100px;">
        </div>
    </div>
    <div class="container" style="margin-top:20px;">
        <div class="row" style="margin-left: 60px;">
            <div class="col-md-6">
              <p style="color: white;">VŨ LUÂN MOBILE<br>
  
                Địa chỉ: Đường 3/2, Phường Hưng Lợi, Quận Ninh Kiều, TP. Cần Thơ<br>
                
                Tel: +(84) 326 55 1974<br>      
                
                Fax: +(84) 326 55 1974<br>
                
                Hotline: 028 388 688 77 - 08 388 688 77<br>
                
                Email: vuluanmobile@gmail.com<br>
                
                Website: www.vuluanmobile.vn</p>
            </div>
            <div class="col-md-6">
              <div>
                <img src="../hinh/icon/hotline.png" style="width: 10%; height: 10%;">
                <p style="color: red; font-size: 24px; font-weight: bold;">+(84) 326 55 1974</p>
              </div>
  
              <div>
                <img src="../hinh/icon/zalo.png" style="width: 10%; height: 10%;">
                <p style="color: red; font-size: 24px; font-weight: bold;">0326 55 1974</p>
              </div>
            </div>
          </div>
        </div>
        <div style="background-color: #006633; text-align: center; color: white; font-size: 16px; font-weight: bold;">
          <p><i>© Bản quyền 2013 thuộc về www.vuluanmobile.vn. Bảo lưu mọi quyền.</i></p>
        </div>
   </div>
</div>

<!-- <script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script> -->
</body>
</html>

<!-- https://www.w3schools.com/charsets/ref_utf_symbols.asp -->