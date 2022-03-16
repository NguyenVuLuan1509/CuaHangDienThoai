<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Thêm</title>
</head>
<body>
    
    <section>
        <div class="container">
            <div class="row">
                
            </div>
        </div>
    </section>

    <div class="container">
        <form action="xulythem.php" method="POST">
            Tên điện thoại: <input class="form-control" type="text" name="tenhh" required="">
            Mô tả: <input class="form-control" type="text" name="mota" required="">
            Giá bán: <input class="form-control" type="text" name="gia" required="">
            Số lượng: <input class="form-control" type="text" name="soluong" required="">
            <!-- Loại hàng hóa: 
            <div class="input-group mb-3">
                <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon" name="loai">
                  <option  value="1">SamSung</option>
                  <option value="iphone">Iphone</option>
                  <option value="oppo">Oppo</option>
                  <option value="xiaomi">Xiaomi</option>
                  <option value="realme">Realme</option>
                  <option value="nokia">Nokia</option>
                  <option value="vivo">Vivo</option>
                </select>
              </div> -->
            <!-- Hình ảnh:
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="inputGroupFile01">
              </div> -->
              
        </br>
            <input type="submit" class="btn btn-block btn-danger">
        </form>
    </div>


</body>
</html>