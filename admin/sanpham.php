<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin_SanPham</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>
<?php
    include "../connect/config.php";
    if(!isset($_SESSION['loginacc'])){
        header('Location:../login.php');
    }

    $tv = "SELECT * FROM sanpham";
    $result = mysqli_query($conn, $tv);



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

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Danh sách sản phẩm</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Sản phẩm</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tên sản phẩm</th>
                                            <th>Hình ảnh</th>
                                            <th>Phân loại</th>
                                            <th>Đơn giá</th>
                                            <th>Tồn kho</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php while($row = mysqli_fetch_array($result)) {
                                        $dm  =  $row['idDM'];
                                        $sql = " SELECT * FROM danhmuc WHERE dmid = '$dm' ";
                                        $resultdm = mysqli_query($conn, $sql);
                                        $rowdm = mysqli_fetch_array($resultdm);                                        
                                        ?>
                                            <tr>
                                                <td><?=$row['tenSp']?></td>
                                                <td><img src="../anhsp/<?=$row['anhSp']?>" width =  "90px"  height = "90px" alt=""></td>
                                                <td><?=$rowdm['dmname']?></td>
                                                <td><?=$row['giabanSp']?> Vnđ</td>
                                                <td><?=$row['soluongSp']?></td>
                                                
                                                <td><button class="btn btn-primary sua" ><a href="suasanpham.php?id=<?=$row['maSp']?>">Sửa</a></button>  <button class="btn btn-primary xoa"><a href = "#" data-toggle="modal" data-target="#xoaModal<?=$row['maSp']?>">Xóa</a></button></td>
                                            </tr>
                                                <div class="modal fade" id="xoaModal<?=$row['maSp']?>"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel<?=$row['maSp']?>">Bạn chắc chắn muốn xóa?</h5>
                                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">Nhấn "Xóa" dữ liệu sản phẩm sẽ  biến mất</div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Đóng</button>
                                                                <a class="btn btn-primary"  href="xoasp.php?id=<?=$row['maSp']?>">Xóa</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php }?>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

    

        <?php require('inc/footer.php'); ?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>