
<?php require('inc/header.php'); ?>
<?php
    include "../connect/config.php";
    if(!isset($_SESSION['loginacc'])){
        header('Location:../login.php');
    }

    if(isset($_POST['addDM'])) {
        $nameDM = $_POST['nameDM'];
        $sql = "INSERT INTO danhmuc(dmname) VALUES ('$nameDM')";
        $result = mysqli_query($conn, $sql);
        if($result) {
            header('location:danhmuc.php');
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
                                        <h1 class="h4 text-gray-900 mb-4">Thêm danh mục</h1>
                                    </div>
                                    <form method = "POST" action = "themdanhmuc.php" class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name =  "nameDM"
                                                id="nameDM" aria-describedby="emailHelp"
                                                placeholder="Nhập tên danh mục ..." required>
                                        </div>
                                       
                                        <button class="btn btn-primary" name = "addDM">Thêm mới</button>
                                        
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