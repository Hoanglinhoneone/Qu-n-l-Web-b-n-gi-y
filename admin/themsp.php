
<?php require('inc/header.php'); ?>
<?php
    include "../connect/config.php";
    if(!isset($_SESSION['loginacc'])){
        header('Location:../login.php');
    }

    $sql = "SELECT * FROM danhmuc";
    $result = mysqli_query($conn, $sql);

    if(isset($_POST['add_sp'])) {
        $img = $_FILES['img']['name']; // chỉ lấy tên hình ảnh
        $img_tmp = $_FILES['img']['tmp_name'];// lấy đường dẫn của ảnh
        
        $tenSp = $_POST['tenSp'];
        $motaSp = $_POST['motaSp'];
        $gianhapSp = $_POST['gianhapSp'];
        $giabanSp = $_POST['giabanSp'];
        $giagiamSp = $_POST['giagiamSp'];
        $nccSp = $_POST['nccSp'];
        $soluongSp = $_POST['soluongSp'];
        $danhmuc = $_POST['danhmuc'];


        $sql1 = "SELECT * FROM danhmuc WHERE dmname = '$danhmuc' ";
        $result2 = mysqli_query($conn, $sql1);
        $row1 = mysqli_fetch_array($result2);
        $dmid = $row1['dmid'];

        // tiến hành thêm sp vào data
        $sql2 = " INSERT INTO sanpham (anhSp, tenSp, motaSp, gianhapSp, giabanSp, giagiamSp, nccSp, soluongSp, idDM, soluongdaban)
                VALUES ('$img','$tenSp','$motaSp', '$gianhapSp', '$giabanSp', '$giagiamSp', '$nccSp', '$soluongSp', '$dmid', 0)";
        $result3 = mysqli_query($conn, $sql2);
        
        //đưa hình ảnh vào thư mục anhsp
        move_uploaded_file($img_tmp, '../anhsp/'. $img);

        if($result3){
            header('Location: sanpham.php');
        }
    }
?>
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Sidebar -->
    <?php require('inc/navbar.php'); ?>
    <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

<!-- Topbar -->
<?php require('inc/topbar.php'); ?>
<!-- End of Topbar -->
<div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Thêm sản phẩm mới</h1>
                                    </div>
                                    <form action = "themsp.php" method = "POST" enctype ="multipart/form-data" class="user">
                                        <label for="" class="form-label">Ảnh sản phẩm</label>
                                        <div class="form-group " >
                                            <input type="file" style="padding-bottom: 2.2rem;" class="form-control form-control-user" accept=".jpg,.png,.jpeg" name = "img" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name = "tenSp" class="form-control form-control-user"
                                                id="namesp" aria-describedby="emailHelp"
                                                placeholder="Tên sản phẩm" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="motaSp" class="form-control" placeholder="Mô tả chi tiết sản phẩm"></textarea>
                                            
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-sm-0">
                                            <input type="text" name = "gianhapSp" class="form-control form-control-user" id="giagoc" placeholder="Giá nhập">
                                            </div>
                                            <div class="col-sm-4 mb-sm-0">
                                            <input type="text" name = "giabanSp" class="form-control form-control-user" id="giaban" placeholder="Giá bán" required>
                                            </div>
                                            <div class="col-sm-4 mb-sm-0">
                                            <input type="text" name = "giagiamSp" class="form-control form-control-user" id="giagiam" placeholder="Giá giảm" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-sm-0">
                                                <input type="text" name = "nccSp" class="form-control form-control-user" aria-describedby="emailHelp"
                                                    placeholder="Nhà cung cấp">
                                            </div>
                                            <div class="col-sm-6 mb-sm-0">
                                                <input type="text" name = "soluongSp" class="form-control form-control-user" id="soluong" placeholder="Số lượng">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Danh mục sản phẩm</label>
                                            <select class="form-control" name="danhmuc">
                                                <?php while($row = mysqli_fetch_array($result)){?>
                                                <option><?=$row['dmname']?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                        <button id = "submit" class="btn btn-primary btn-primary-add" name="add_sp">Thêm sản phẩm</button>
                                        
                                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php require('inc/footer.php'); ?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>