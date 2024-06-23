
<?php 
    require('inc/header.php'); 
 ?>
<!--  Khái quát cách code
B1: Kết nối database
B2: Hiển thị thông tin từ database ra các trường input dựa vào id sản phẩm.
B3: Lưu thông tin từ các trường input vào database sau khi người dùng cập nhật thông tin -->

<?php
    // <!-- connect database -->
    include "../connect/config.php";
    // check session
    if(!isset($_SESSION['loginacc'])){
        header('Location:../login.php');
    }

    // lấy id trên url
    $id = $_GET['id'];

    //truy vấn database dựa vào id sản phẩm
    $sql = "SELECT * FROM sanpham WHERE maSp = $id";
    $result = mysqli_query($conn, $sql);
    $rowsp = mysqli_fetch_array($result); // lưu bản ghi lấy từ database

    // lấy ra ds danh mục để show
    $sqldm = "SELECT * FROM danhmuc";
    $resultdm = mysqli_query($conn, $sqldm);

    
    if(isset($_POST['saveSp'])){ // Khi người dùng chỉnh sửa xong và ấn nút lưu sản phẩm.
        $img = $_FILES['img']['name']; // chỉ lấy tên hình ảnh
        $img_tmp = $_FILES['img']['tmp_name'];// lấy đường dẫn của ảnh

        // lưu các giá trị ở các trường input
        $tenSp = $_POST['tenSp'];
        $motaSp = $_POST['motaSp'];
        $gianhapSp = $_POST['gianhapSp'];
        $giabanSp = $_POST['giabanSp'];
        $giagiamSp = $_POST['giagiamSp'];
        $nccSp = $_POST['nccSp'];
        $soluongSp = $_POST['soluongSp'];
        $danhmuc = $_POST['danhmuc'];

        // lấy ra id danh mục có tên trùng với tên chọn ở input để lưu vào khóa ngoại trong sản phẩm
        $sql1 = "SELECT dmid FROM danhmuc WHERE dmname = '$danhmuc' ";
        $result2 = mysqli_query($conn, $sql1);
        $row1 = mysqli_fetch_array($result2);
        $dmid = $row1['dmid'];

        // tiến hành cập nhật sp vào data
        if($img !=  null) { // trường hợp cập nhật ảnh
            $sql2 = " UPDATE sanpham SET anhSp = '$img', tenSp = '$tenSp', motaSp = '$motaSp', gianhapSp = '$gianhapSp',
             giabanSp =  '$giabanSp', giagiamSp = '$giagiamSp', nccSp =  '$nccSp', soluongSp = '$soluongSp', idDM = '$dmid'
            WHERE maSp =  '$id'";
            $result3 = mysqli_query($conn, $sql2);
        }
        else{ 
            $sql2 = " UPDATE  sanpham SET tenSp = '$tenSp', motaSp = '$motaSp', gianhapSp = '$gianhapSp', giabanSp =  '$giabanSp',
             giagiamSp = '$giagiamSp', nccSp =  '$nccSp', soluongSp = '$soluongSp', idDM = '$dmid'
            WHERE maSp =  '$id'";
            $result3 = mysqli_query($conn, $sql2);
        }
        
        //đưa hình ảnh vào thư mục anhsp
        move_uploaded_file($img_tmp, '../anhsp/'. $img);

        if($result3){ // điều hướng về trang sanpham.php
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
                                        <h1 class="h4 text-gray-900 mb-4">Sửa thông tin sản phẩm</h1>
                                    </div>

                                    <!-- hiển thị các thông tin lên trường input bằng thuộc tính value -->
                                    <form action = "suasanpham.php?id=<?=$rowsp['maSp']?>" method = "POST" enctype ="multipart/form-data" class="user">
                                        <label for="" class="form-label">Thay ảnh</label>
                                        <div class="form-group " >
                                            <!-- Do type file k dùng được value nên phải dùng thẻ span để hiện thị ảnh -->
                                            <span><img src="../anhsp/<?php echo $rowsp['anhSp']; ?>" width="70px" height="70px" ></span> 
                                            <input type="file" style="padding-bottom: 2.2rem;" class="form-control form-control-user" accept=".jpg,.png,.jpeg" name = "img">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name = "tenSp" class="form-control form-control-user"
                                                id="namesp" aria-describedby="emailHelp"
                                                placeholder="Tên sản phẩm" value ="<?=$rowsp['tenSp']?>" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="motaSp" class="form-control" placeholder="Mô tả chi tiết sản phẩm"><?=$rowsp['motaSp']?></textarea>
                                            
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-4 mb-sm-0">
                                            <input type="text" name = "gianhapSp" class="form-control form-control-user" id="giagoc" placeholder="Giá nhập" value ="<?=$rowsp['gianhapSp']?>">
                                            </div>
                                            <div class="col-sm-4 mb-sm-0">
                                            <input type="text" name = "giabanSp" class="form-control form-control-user" id="giaban" placeholder="Giá bán" value ="<?=$rowsp['giabanSp']?>" required>
                                            </div>
                                            <div class="col-sm-4 mb-sm-0">
                                            <input type="text" name = "giagiamSp" class="form-control form-control-user" id="giagiam" placeholder="Giá giảm" value ="<?=$rowsp['giagiamSp']?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-sm-0">
                                                <input type="text" name = "nccSp" class="form-control form-control-user" aria-describedby="emailHelp"
                                                    placeholder="Nhà cung cấp" value ="<?=$rowsp['nccSp']?>">
                                            </div>
                                            <div class="col-sm-6 mb-sm-0">
                                                <input type="text" name = "soluongSp" class="form-control form-control-user" id="soluong" placeholder="Số lượng" value ="<?=$rowsp['soluongSp']?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Thay danh mục</label>
                                            <select class="form-control" name="danhmuc">
                                                <!-- dùng vòng lặp while để hiển thị danh sách danh mục -->
                                                <?php while($row = mysqli_fetch_array($resultdm)){?>
                                                    <option <?php if($row['dmid']==$rowsp['idDM']){ echo 'selected'; } // hiện thị danh mục ứng với mã danh dục của sản phẩm trước
                                                    ?> ><?=$row['dmname']?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                        <button id = "submit" class="btn btn-primary btn-primary-add" name="saveSp">Lưu sản phẩm</button>
                                        
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