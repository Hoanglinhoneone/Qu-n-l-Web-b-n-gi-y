<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/CSS/base.css">
    <link rel="stylesheet" href="assets/CSS/style.css">
    <title>Goya</title>
</head>
<?php
    include "../connect/config.php";
    $sql = "SELECT * FROM sanpham ORDER BY sanpham.maSp DESC LIMIT 6";
    $result = mysqli_query($conn, $sql);

    $sql1 = "SELECT * FROM danhmuc";
    $result1 = mysqli_query($conn, $sql1);

?>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
            <img src="assets/images/logo.webp" alt="GoYa">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Trang chủ <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                  Sản phẩm
                </a>
                <div class="dropdown-menu">
                  <?php while($row = mysqli_fetch_array($result1)) {?>
                    <a class="dropdown-item" href="#"><?=$row['dmname']?></a>
                    <?php }?>
                </div>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tin tức</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Liên hệ</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm sản phẩm" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </form>
        </div>
      </nav>
    <!-- End Header -->
    <div class="banner">
        <!-- Panner -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://theme.hstatic.net/200000641225/1001103215/14/slide_1_img.jpg?v=845" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://theme.hstatic.net/200000641225/1001103215/14/slide_2_img.jpg?v=845" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://theme.hstatic.net/200000641225/1001103215/14/slide_1_img.jpg?v=907" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </button>
        </div>
    </div>
        <!-- End Panner -->

    <!-- categories hot -->
    <div class="categories" >
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="inner-header">
                        Bộ Sưu Tập Mới
                    </h2>
                </div>
            </div>
            <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <img src="https://theme.hstatic.net/200000641225/1001103215/14/home_category_1_img.jpg?v=845" alt="gr1">
                            <div class="icon-new">
                                <span>New</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <img src="https://theme.hstatic.net/200000641225/1001103215/14/home_category_2_img.jpg?v=845" alt="gr2">
                            <div class="icon-new">
                                <span>New</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <img src="https://theme.hstatic.net/200000641225/1001103215/14/home_category_3_img.jpg?v=845" alt="gr3">
                            <div class="icon-new">
                                <span>New</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <img src="https://theme.hstatic.net/200000641225/1001103215/14/home_category_4_img.jpg?v=845" alt="g4">
                            <div class="icon-new">
                                <span>New</span>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- End categories hot -->
    <!-- product -->
    <div class="product">
        <!-- <div class="container"> -->
            <div class="wrapper">
                <div class="row inner-list">
                    <?php
                        while($rowsp = mysqli_fetch_array($result)) {
                            $percent = ($rowsp['giagiamSp'] / $rowsp['giabanSp']) * 100;
                            $percent = 100 - (int)$percent;
                    ?>
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="inner-box">
                                <div class="inner-image">
                                    <a href="#" class="quickview">
                                        <img src="../anhsp/<?=$rowsp['anhSp']?>" alt="pd1">
                                    </a> 
                                    <div class="pro-sale">
                                        <i class="fa-solid fa-bolt-lightning"></i>
                                        <span>-<?=$percent?>%</span>
                                    </div>
                                </div>
                                <div class="view-detail">
                                    <h3 class="title-detail">
                                        <a href="#">
                                            <?=$rowsp['tenSp']?>
                                        </a>
                                    </h3>
                                    <p class="price-onsale">
                                        <span class="price"><?=$rowsp['giagiamSp']?> vnđ</span>
                                        <span class="price-sale"><?=$rowsp['giabanSp']?> vnđ</span>
                                    </p>
                                    <button class="button button-buy">
                                        <a href="#">MUA NGAY</a>
                                    </button>
                               </div>
                            </div>
                        </div>
                            <?php 
                        }
                    ?>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="view-more">
                            <a href="#" class="button button-more">XEM TẤT CẢ</a>
                        </div>
                    </div>
            </div>
        <!-- </div> -->
    </div>
    <!-- End product -->

    <!-- taps-product -->
    <div class="taps-product">
        <div class="contain">
            <div class="row">
                <div class="col-12">
                    <div class="inner-head">
                        <h2 class="inner-title">
                            Danh Mục Nổi Bật
                        </h2>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Giày Thể Thao</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Dép Thể Thao</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Quần Áo Thể Thao</button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">

                                <div class="col-xl-20 col-lg-20 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="inner-image">
                                            <a href="#" class="quickview">
                                                <img src="https://product.hstatic.net/200000641225/product/plus_trang_cam__1_-min_9e6a6d110e224da4be4f44fcb94540da_large.png" alt="dep5">
                                                <div class="pro-sale">
                                                    <i class="fa-solid fa-bolt-lightning"></i>
                                                    <span>-42%</span>
                                                </div>
                                            </a> 
                                        </div>
                                        <div class="view-detail">
                                            <h3 class="title-detail">
                                                <a href="#">
                                                    Giày Chạy Bộ GOYA SPEED Kết Hợp Tấm Carbon Màu Neon Cam
                                                </a>
                                            </h3>
                                            <p class="price-onsale">
                                                <span class="price">899,000</span>
                                                <span class="price-sale">1,650,000</span>
                                            </p>
                                            <button class="button button-buy">
                                                <a href="#">MUA NGAY</a>
                                            </button>
                                       </div>                                    
                                    </div>
                                </div>

                                <div class="col-xl-20 col-lg-20 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="inner-image">
                                            <a href="#" class="quickview">
                                                <img src="https://product.hstatic.net/200000641225/product/thiet_ke_chua_co_ten_-_2023-10-05t143806.970_ac1ae28d38b54e0abb7178bb1ebefae5_master.jpg" alt="dep5">
                                                <div class="pro-sale">
                                                    <i class="fa-solid fa-bolt-lightning"></i>
                                                    <span>-42%</span>
                                                </div>
                                            </a> 
                                        </div>
                                        <div class="view-detail">
                                            <h3 class="title-detail">
                                                <a href="#">
                                                    Giày Chạy Bộ GOYA SPEED Kết Hợp Tấm Carbon Màu Neon Cam
                                                </a>
                                            </h3>
                                            <p class="price-onsale">
                                                <span class="price">899,000</span>
                                                <span class="price-sale">1,650,000</span>
                                            </p>
                                            <button class="button button-buy">
                                                <a href="#">MUA NGAY</a>
                                            </button>
                                       </div>                                    
                                    </div>
                                </div>
                                <div class="col-xl-20 col-lg-20 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="inner-image">
                                            <a href="#" class="quickview">
                                                <img src="https://product.hstatic.net/200000641225/product/krs00127-min_fb0a732758cc4e63b425a77eab0fbe6e_master.jpg" alt="dep5">
                                                <div class="pro-sale">
                                                    <i class="fa-solid fa-bolt-lightning"></i>
                                                    <span>-42%</span>
                                                </div>
                                            </a> 
                                        </div>
                                        <div class="view-detail">
                                            <h3 class="title-detail">
                                                <a href="#">
                                                    Giày Chạy Bộ GOYA SPEED Kết Hợp Tấm Carbon Màu Neon Cam
                                                </a>
                                            </h3>
                                            <p class="price-onsale">
                                                <span class="price">899,000</span>
                                                <span class="price-sale">1,650,000</span>
                                            </p>
                                            <button class="button button-buy">
                                                <a href="#">MUA NGAY</a>
                                            </button>
                                       </div>                                    
                                    </div>
                                </div>
                                <div class="col-xl-20 col-lg-20 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="inner-image">
                                            <a href="#" class="quickview">
                                                <img src="https://product.hstatic.net/200000641225/product/krs00132-min_10219ac979ee41238abd24933661d7a3_large.jpg" alt="dep5">
                                                <div class="pro-sale">
                                                    <i class="fa-solid fa-bolt-lightning"></i>
                                                    <span>-42%</span>
                                                </div>
                                            </a> 
                                        </div>
                                        <div class="view-detail">
                                            <h3 class="title-detail">
                                                <a href="#">
                                                    Giày Chạy Bộ GOYA SPEED Kết Hợp Tấm Carbon Màu Neon Cam
                                                </a>
                                            </h3>
                                            <p class="price-onsale">
                                                <span class="price">899,000</span>
                                                <span class="price-sale">1,650,000</span>
                                            </p>
                                            <button class="button button-buy">
                                                <a href="#">MUA NGAY</a>
                                            </button>
                                       </div>                                    
                                    </div>
                                </div>
                                <div class="col-xl-20 col-lg-20 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="inner-image">
                                            <a href="#" class="quickview">
                                                <img src="https://product.hstatic.net/200000641225/product/krs00131-min_5bfd49515c2a448dbfdff45400ef6b59_large.jpg" alt="dep5">
                                                <div class="pro-sale">
                                                    <i class="fa-solid fa-bolt-lightning"></i>
                                                    <span>-42%</span>
                                                </div>
                                            </a> 
                                        </div>
                                        <div class="view-detail">
                                            <h3 class="title-detail">
                                                <a href="#">
                                                    Giày Chạy Bộ GOYA SPEED Kết Hợp Tấm Carbon Màu Neon Cam
                                                </a>
                                            </h3>
                                            <p class="price-onsale">
                                                <span class="price">899,000</span>
                                                <span class="price-sale">1,650,000</span>
                                            </p>
                                            <button class="button button-buy">
                                                <a href="#">MUA NGAY</a>
                                            </button>
                                       </div>                                    
                                    </div>
                                </div>
                                <div class="col-xl-20 col-lg-20 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="inner-image">
                                            <a href="#" class="quickview">
                                                <img src="https://product.hstatic.net/200000641225/product/0f0a5202_8e123071f8d147dfbbe04b91c71f0b4a_master.jpg" alt="dep5">
                                                <div class="pro-sale">
                                                    <i class="fa-solid fa-bolt-lightning"></i>
                                                    <span>-42%</span>
                                                </div>
                                            </a> 
                                        </div>
                                        <div class="view-detail">
                                            <h3 class="title-detail">
                                                <a href="#">
                                                    Giày Chạy Bộ GOYA SPEED Kết Hợp Tấm Carbon Màu Neon Cam
                                                </a>
                                            </h3>
                                            <p class="price-onsale">
                                                <span class="price">899,000</span>
                                                <span class="price-sale">1,650,000</span>
                                            </p>
                                            <button class="button button-buy">
                                                <a href="#">MUA NGAY</a>
                                            </button>
                                       </div>                                    
                                    </div>
                                </div>
                                <div class="col-xl-20 col-lg-20 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="inner-image">
                                            <a href="#" class="quickview">
                                                <img src="https://product.hstatic.net/200000641225/product/0f0a5190_3ab6701eaaa44a2799ab3f84976373a8_master.jpg" alt="dep5">
                                                <div class="pro-sale">
                                                    <i class="fa-solid fa-bolt-lightning"></i>
                                                    <span>-42%</span>
                                                </div>
                                            </a> 
                                        </div>
                                        <div class="view-detail">
                                            <h3 class="title-detail">
                                                <a href="#">
                                                    Giày Chạy Bộ GOYA SPEED Kết Hợp Tấm Carbon Màu Neon Cam
                                                </a>
                                            </h3>
                                            <p class="price-onsale">
                                                <span class="price">899,000</span>
                                                <span class="price-sale">1,650,000</span>
                                            </p>
                                            <button class="button button-buy">
                                                <a href="#">MUA NGAY</a>
                                            </button>
                                       </div>    
                                    </div>
                                </div>
                                <div class="col-xl-20 col-lg-20 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="inner-image">
                                            <a href="#" class="quickview">
                                                <img src="https://product.hstatic.net/200000641225/product/0f0a5180_90edb81163a245f6959a2b78b94835a6_master.jpg" alt="dep5">
                                                <div class="pro-sale">
                                                    <i class="fa-solid fa-bolt-lightning"></i>
                                                    <span>-42%</span>
                                                </div>
                                            </a> 
                                        </div>
                                        <div class="view-detail">
                                            <h3 class="title-detail">
                                                <a href="#">
                                                    Giày Chạy Bộ GOYA SPEED Kết Hợp Tấm Carbon Màu Neon Cam
                                                </a>
                                            </h3>
                                            <p class="price-onsale">
                                                <span class="price">899,000</span>
                                                <span class="price-sale">1,650,000</span>
                                            </p>
                                            <button class="button button-buy">
                                                <a href="#">MUA NGAY</a>
                                            </button>
                                       </div>  
                                    </div>
                                </div>
                                <div class="col-xl-20 col-lg-20 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="inner-image">
                                            <a href="#" class="quickview">
                                                <img src="https://product.hstatic.net/200000641225/product/0f0a7184_ffad05496ecf47618677e9723cc36f59_master.png" alt="dep5">
                                                <div class="pro-sale">
                                                    <i class="fa-solid fa-bolt-lightning"></i>
                                                    <span>-42%</span>
                                                </div>
                                            </a> 
                                        </div>
                                        <div class="view-detail">
                                            <h3 class="title-detail">
                                                <a href="#">
                                                    Giày Chạy Bộ GOYA SPEED Kết Hợp Tấm Carbon Màu Neon Cam
                                                </a>
                                            </h3>
                                            <p class="price-onsale">
                                                <span class="price">899,000</span>
                                                <span class="price-sale">1,650,000</span>
                                            </p>
                                            <button class="button button-buy">
                                                <a href="#">MUA NGAY</a>
                                            </button>
                                       </div>                                    
                                    </div>
                                </div>
                                <div class="col-xl-20 col-lg-20 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="inner-image">
                                            <a href="#" class="quickview">
                                                <img src="https://product.hstatic.net/200000641225/product/0f0a7193_2978e5c135774ef6bac054379d4a65f8_master.png" alt="dep5">
                                                <div class="pro-sale">
                                                    <i class="fa-solid fa-bolt-lightning"></i>
                                                    <span>-42%</span>
                                                </div>
                                            </a> 
                                        </div>
                                        <div class="view-detail">
                                            <h3 class="title-detail">
                                                <a href="#">
                                                    Giày Chạy Bộ GOYA SPEED Kết Hợp Tấm Carbon Màu Neon Cam
                                                </a>
                                            </h3>
                                            <p class="price-onsale">
                                                <span class="price">899,000</span>
                                                <span class="price-sale">1,650,000</span>
                                            </p>
                                            <button class="button button-buy">
                                                <a href="#">MUA NGAY</a>
                                            </button>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-xl-20 col-lg-20 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="inner-image">
                                            <a href="#" class="quickview">
                                                <img src="https://product.hstatic.net/200000641225/product/do_trang_1_5bb083790fc14f4ea907e8864a86f3e7_master.png" alt="dep5">
                                                <div class="pro-sale">
                                                    <i class="fa-solid fa-bolt-lightning"></i>
                                                    <span>-42%</span>
                                                </div>
                                            </a> 
                                        </div>
                                        <div class="view-detail">
                                            <h3 class="title-detail">
                                                <a href="#">
                                                    Giày Chạy Bộ GOYA SPEED Kết Hợp Tấm Carbon Màu Neon Cam
                                                </a>
                                            </h3>
                                            <p class="price-onsale">
                                                <span class="price">899,000</span>
                                                <span class="price-sale">1,650,000</span>
                                            </p>
                                            <button class="button button-buy">
                                                <a href="#">MUA NGAY</a>
                                            </button>
                                       </div> 
                                    </div>
                                </div>
                                <div class="col-xl-20 col-lg-20 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="inner-image">
                                            <a href="#" class="quickview">
                                                <img src="https://product.hstatic.net/200000641225/product/xanh_dam_trang_ec3bab8f9dd24a47b99b64d5db12dd5e_master.png" alt="dep5">
                                                <div class="pro-sale">
                                                    <i class="fa-solid fa-bolt-lightning"></i>
                                                    <span>-42%</span>
                                                </div>
                                            </a> 
                                        </div>
                                        <div class="view-detail">
                                            <h3 class="title-detail">
                                                <a href="#">
                                                    Giày Chạy Bộ GOYA SPEED Kết Hợp Tấm Carbon Màu Neon Cam
                                                </a>
                                            </h3>
                                            <p class="price-onsale">
                                                <span class="price">899,000</span>
                                                <span class="price-sale">1,650,000</span>
                                            </p>
                                            <button class="button button-buy">
                                                <a href="#">MUA NGAY</a>
                                            </button>
                                       </div> 
                                    </div>
                                </div>
                                <div class="col-xl-20 col-lg-20 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="inner-image">
                                            <a href="#" class="quickview">
                                                <img src="https://product.hstatic.net/200000641225/product/tdz_1651-min_5092532d534f40b8995d11678418e6b7_master.jpg" alt="dep5">
                                                <div class="pro-sale">
                                                    <i class="fa-solid fa-bolt-lightning"></i>
                                                    <span>-42%</span>
                                                </div>
                                            </a> 
                                        </div>
                                        <div class="view-detail">
                                            <h3 class="title-detail">
                                                <a href="#">
                                                    Giày Chạy Bộ GOYA SPEED Kết Hợp Tấm Carbon Màu Neon Cam
                                                </a>
                                            </h3>
                                            <p class="price-onsale">
                                                <span class="price">899,000</span>
                                                <span class="price-sale">1,650,000</span>
                                            </p>
                                            <button class="button button-buy">
                                                <a href="#">MUA NGAY</a>
                                            </button>
                                       </div> 
                                    </div>
                                </div>
                                <div class="col-xl-20 col-lg-20 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="inner-image">
                                            <a href="#" class="quickview">
                                                <img src="https://product.hstatic.net/200000641225/product/tdz_1649-min_81b066c783a0423ba3a8b32257270fa7_master.jpg" alt="dep5">
                                                <div class="pro-sale">
                                                    <i class="fa-solid fa-bolt-lightning"></i>
                                                    <span>-42%</span>
                                                </div>
                                            </a> 
                                        </div>
                                        <div class="view-detail">
                                            <h3 class="title-detail">
                                                <a href="#">
                                                    Giày Chạy Bộ GOYA SPEED Kết Hợp Tấm Carbon Màu Neon Cam
                                                </a>
                                            </h3>
                                            <p class="price-onsale">
                                                <span class="price">899,000</span>
                                                <span class="price-sale">1,650,000</span>
                                            </p>
                                            <button class="button button-buy">
                                                <a href="#">MUA NGAY</a>
                                            </button>
                                       </div> 
                                    </div>
                                </div>
                                <div class="col-xl-20 col-lg-20 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="inner-image">
                                            <a href="#" class="quickview">
                                                <img src="https://product.hstatic.net/200000641225/product/thiet_ke_chua_co_ten__73__517d30063aae4396b3ac7a632a683ba5_master.jpg" alt="dep5">
                                                <div class="pro-sale">
                                                    <i class="fa-solid fa-bolt-lightning"></i>
                                                    <span>-42%</span>
                                                </div>
                                            </a> 
                                        </div>
                                        <div class="view-detail">
                                            <h3 class="title-detail">
                                                <a href="#">
                                                    Giày Chạy Bộ GOYA SPEED Kết Hợp Tấm Carbon Màu Neon Cam
                                                </a>
                                            </h3>
                                            <p class="price-onsale">
                                                <span class="price">899,000</span>
                                                <span class="price-sale">1,650,000</span>
                                            </p>
                                            <button class="button button-buy">
                                                <a href="#">MUA NGAY</a>
                                            </button>
                                       </div> 
                                    </div>
                                </div>
                                <div class="col-xl-20 col-lg-20 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="inner-image">
                                            <a href="#" class="quickview">
                                                <img src="https://product.hstatic.net/200000641225/product/thiet_ke_chua_co_ten__75__ce7e25d2218a489593cd0bff5e8c3f53_master.jpg" alt="dep5">
                                                <div class="pro-sale">
                                                    <i class="fa-solid fa-bolt-lightning"></i>
                                                    <span>-42%</span>
                                                </div>
                                            </a> 
                                        </div>
                                        <div class="view-detail">
                                            <h3 class="title-detail">
                                                <a href="#">
                                                    Giày Chạy Bộ GOYA SPEED Kết Hợp Tấm Carbon Màu Neon Cam
                                                </a>
                                            </h3>
                                            <p class="price-onsale">
                                                <span class="price">899,000</span>
                                                <span class="price-sale">1,650,000</span>
                                            </p>
                                            <button class="button button-buy">
                                                <a href="#">MUA NGAY</a>
                                            </button>
                                       </div> 
                                    </div>
                                </div>
                                <div class="col-xl-20 col-lg-20 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="inner-image">
                                            <a href="#" class="quickview">
                                                <img src="https://product.hstatic.net/200000641225/product/thiet_ke_chua_co_ten__97__9212e7c1861a452484dcc09bcb78ce97_master.jpg" alt="dep5">
                                                <div class="pro-sale">
                                                    <i class="fa-solid fa-bolt-lightning"></i>
                                                    <span>-42%</span>
                                                </div>
                                            </a> 
                                        </div>
                                        <div class="view-detail">
                                            <h3 class="title-detail">
                                                <a href="#">
                                                    Giày Chạy Bộ GOYA SPEED Kết Hợp Tấm Carbon Màu Neon Cam
                                                </a>
                                            </h3>
                                            <p class="price-onsale">
                                                <span class="price">899,000</span>
                                                <span class="price-sale">1,650,000</span>
                                            </p>
                                            <button class="button button-buy">
                                                <a href="#">MUA NGAY</a>
                                            </button>
                                       </div> 
                                    </div>
                                </div>
                                <div class="col-xl-20 col-lg-20 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="inner-image">
                                            <a href="#" class="quickview">
                                                <img src="https://product.hstatic.net/200000641225/product/thiet_ke_chua_co_ten_-_2023-10-05t125829.655_ba58d8c220fd464e8c561999ef20dcef_master.jpg" alt="dep5">
                                                <div class="pro-sale">
                                                    <i class="fa-solid fa-bolt-lightning"></i>
                                                    <span>-42%</span>
                                                </div>
                                            </a> 
                                        </div>
                                        <div class="view-detail">
                                            <h3 class="title-detail">
                                                <a href="#">
                                                    Giày Chạy Bộ GOYA SPEED Kết Hợp Tấm Carbon Màu Neon Cam
                                                </a>
                                            </h3>
                                            <p class="price-onsale">
                                                <span class="price">899,000</span>
                                                <span class="price-sale">1,650,000</span>
                                            </p>
                                            <button class="button button-buy">
                                                <a href="#">MUA NGAY</a>
                                            </button>
                                       </div> 
                                    </div>
                                </div>
                                <div class="col-xl-20 col-lg-20 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="inner-image">
                                            <a href="#" class="quickview">
                                                <img src="https://product.hstatic.net/200000641225/product/trang_den_39fbb52dae3f4711a76554367670ece2_master.png" alt="dep5">
                                                <div class="pro-sale">
                                                    <i class="fa-solid fa-bolt-lightning"></i>
                                                    <span>-42%</span>
                                                </div>
                                            </a> 
                                        </div>
                                        <div class="view-detail">
                                            <h3 class="title-detail">
                                                <a href="#">
                                                    Giày Chạy Bộ GOYA SPEED Kết Hợp Tấm Carbon Màu Neon Cam
                                                </a>
                                            </h3>
                                            <p class="price-onsale">
                                                <span class="price">899,000</span>
                                                <span class="price-sale">1,650,000</span>
                                            </p>
                                            <button class="button button-buy">
                                                <a href="#">MUA NGAY</a>
                                            </button>
                                       </div>                                    
                                    </div>
                                </div>
                                <div class="col-xl-20 col-lg-20 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="inner-image">
                                            <a href="#" class="quickview">
                                                <img src="https://product.hstatic.net/200000641225/product/thiet_ke_chua_co_ten_-_2023-10-05t130500.635_9cd1f0430e66464db5b26df540f29d9a_master.jpg" alt="dep5">
                                                <div class="pro-sale">
                                                    <i class="fa-solid fa-bolt-lightning"></i>
                                                    <span>-42%</span>
                                                </div>
                                            </a> 
                                        </div>
                                        <div class="view-detail">
                                            <h3 class="title-detail">
                                                <a href="#">
                                                    Giày Chạy Bộ GOYA SPEED Kết Hợp Tấm Carbon Màu Neon Cam
                                                </a>
                                            </h3>
                                            <p class="price-onsale">
                                                <span class="price">899,000</span>
                                                <span class="price-sale">1,650,000</span>
                                            </p>
                                            <button class="button button-buy">
                                                <a href="#">MUA NGAY</a>
                                            </button>
                                       </div>                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row">
                                <div class="col-xl-20 col-lg-20 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="inner-image">
                                            <a href="#" class="quickview">
                                                <img src="https://product.hstatic.net/200000641225/product/66_e548320c09994ecbb4d224ce02b3923b_master.png" alt="dep5">
                                                <div class="pro-sale">
                                                    <i class="fa-solid fa-bolt-lightning"></i>
                                                    <span>-42%</span>
                                                </div>
                                            </a> 
                                        </div>
                                        <div class="view-detail">
                                            <h3 class="title-detail">
                                                <a href="#">
                                                    Giày Chạy Bộ GOYA SPEED Kết Hợp Tấm Carbon Màu Neon Cam
                                                </a>
                                            </h3>
                                            <p class="price-onsale">
                                                <span class="price">899,000</span>
                                                <span class="price-sale">1,650,000</span>
                                            </p>
                                            <button class="button button-buy">
                                                <a href="#">MUA NGAY</a>
                                            </button>
                                       </div>                                    
                                    </div>
                                </div>
                                <div class="col-xl-20 col-lg-20 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="inner-image">
                                            <a href="#" class="quickview">
                                                <img src="https://product.hstatic.net/200000641225/product/2_b1c9d077d51e474e9502a40105fb7a1a_master.png" alt="dep5">
                                                <div class="pro-sale">
                                                    <i class="fa-solid fa-bolt-lightning"></i>
                                                    <span>-42%</span>
                                                </div>
                                            </a> 
                                        </div>
                                        <div class="view-detail">
                                            <h3 class="title-detail">
                                                <a href="#">
                                                    Giày Chạy Bộ GOYA SPEED Kết Hợp Tấm Carbon Màu Neon Cam
                                                </a>
                                            </h3>
                                            <p class="price-onsale">
                                                <span class="price">899,000</span>
                                                <span class="price-sale">1,650,000</span>
                                            </p>
                                            <button class="button button-buy">
                                                <a href="#">MUA NGAY</a>
                                            </button>
                                       </div>                                    
                                    </div>
                                </div>
                                <div class="col-xl-20 col-lg-20 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="inner-image">
                                            <a href="#" class="quickview">
                                                <img src="https://product.hstatic.net/200000641225/product/10_753410b4a52441ec8548b6b53b443f8f_master.png" alt="dep5">
                                                <div class="pro-sale">
                                                    <i class="fa-solid fa-bolt-lightning"></i>
                                                    <span>-42%</span>
                                                </div>
                                            </a> 
                                        </div>
                                        <div class="view-detail">
                                            <h3 class="title-detail">
                                                <a href="#">
                                                    Giày Chạy Bộ GOYA SPEED Kết Hợp Tấm Carbon Màu Neon Cam
                                                </a>
                                            </h3>
                                            <p class="price-onsale">
                                                <span class="price">899,000</span>
                                                <span class="price-sale">1,650,000</span>
                                            </p>
                                            <button class="button button-buy">
                                                <a href="#">MUA NGAY</a>
                                            </button>
                                       </div>                                    
                                    </div>
                                </div>
                                <div class="col-xl-20 col-lg-20 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="inner-image">
                                            <a href="#" class="quickview">
                                                <img src="https://product.hstatic.net/200000641225/product/17_53e88cbf410a43f2a3df3dc1b73daa33_master.png" alt="dep5">
                                                <div class="pro-sale">
                                                    <i class="fa-solid fa-bolt-lightning"></i>
                                                    <span>-42%</span>
                                                </div>
                                            </a> 
                                        </div>
                                        <div class="view-detail">
                                            <h3 class="title-detail">
                                                <a href="#">
                                                    Giày Chạy Bộ GOYA SPEED Kết Hợp Tấm Carbon Màu Neon Cam
                                                </a>
                                            </h3>
                                            <p class="price-onsale">
                                                <span class="price">899,000</span>
                                                <span class="price-sale">1,650,000</span>
                                            </p>
                                            <button class="button button-buy">
                                                <a href="#">MUA NGAY</a>
                                            </button>
                                       </div>                                    
                                    </div>
                                </div>
                                <div class="col-xl-20 col-lg-20 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="inner-image">
                                            <a href="#" class="quickview">
                                                <img src="https://product.hstatic.net/200000641225/product/24_22eba1075be140ce92e8aa3f1c2534dc_master.png" alt="dep5">
                                                <div class="pro-sale">
                                                    <i class="fa-solid fa-bolt-lightning"></i>
                                                    <span>-42%</span>
                                                </div>
                                            </a> 
                                        </div>
                                        <div class="view-detail">
                                            <h3 class="title-detail">
                                                <a href="#">
                                                    Giày Chạy Bộ GOYA SPEED Kết Hợp Tấm Carbon Màu Neon Cam
                                                </a>
                                            </h3>
                                            <p class="price-onsale">
                                                <span class="price">899,000</span>
                                                <span class="price-sale">1,650,000</span>
                                            </p>
                                            <button class="button button-buy">
                                                <a href="#">MUA NGAY</a>
                                            </button>
                                       </div>                                    
                                    </div>
                                </div>
                                <div class="col-xl-20 col-lg-20 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="inner-image">
                                            <a href="#" class="quickview">
                                                <img src="https://product.hstatic.net/200000641225/product/4_7e756c28bc5046e69439e5656492eb6e_master.png" alt="dep5">
                                                <div class="pro-sale">
                                                    <i class="fa-solid fa-bolt-lightning"></i>
                                                    <span>-42%</span>
                                                </div>
                                            </a> 
                                        </div>
                                        <div class="view-detail">
                                            <h3 class="title-detail">
                                                <a href="#">
                                                    Giày Chạy Bộ GOYA SPEED Kết Hợp Tấm Carbon Màu Neon Cam
                                                </a>
                                            </h3>
                                            <p class="price-onsale">
                                                <span class="price">899,000</span>
                                                <span class="price-sale">1,650,000</span>
                                            </p>
                                            <button class="button button-buy">
                                                <a href="#">MUA NGAY</a>
                                            </button>
                                       </div>                                    
                                    </div>
                                </div>
                                <div class="col-xl-20 col-lg-20 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="inner-image">
                                            <a href="#" class="quickview">
                                                <img src="https://product.hstatic.net/200000641225/product/1_59bc9728bb05407cbed6d93ae13d748c_master.png" alt="dep5">
                                                <div class="pro-sale">
                                                    <i class="fa-solid fa-bolt-lightning"></i>
                                                    <span>-42%</span>
                                                </div>
                                            </a> 
                                        </div>
                                        <div class="view-detail">
                                            <h3 class="title-detail">
                                                <a href="#">
                                                    Giày Chạy Bộ GOYA SPEED Kết Hợp Tấm Carbon Màu Neon Cam
                                                </a>
                                            </h3>
                                            <p class="price-onsale">
                                                <span class="price">899,000</span>
                                                <span class="price-sale">1,650,000</span>
                                            </p>
                                            <button class="button button-buy">
                                                <a href="#">MUA NGAY</a>
                                            </button>
                                       </div>    
                                    </div>
                                </div>
                                <div class="col-xl-20 col-lg-20 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="inner-image">
                                            <a href="#" class="quickview">
                                                <img src="https://product.hstatic.net/200000641225/product/3_b23575fcc0574775aad52b7297b45ee1_master.png" alt="dep5">
                                                <div class="pro-sale">
                                                    <i class="fa-solid fa-bolt-lightning"></i>
                                                    <span>-42%</span>
                                                </div>
                                            </a> 
                                        </div>
                                        <div class="view-detail">
                                            <h3 class="title-detail">
                                                <a href="#">
                                                    Giày Chạy Bộ GOYA SPEED Kết Hợp Tấm Carbon Màu Neon Cam
                                                </a>
                                            </h3>
                                            <p class="price-onsale">
                                                <span class="price">899,000</span>
                                                <span class="price-sale">1,650,000</span>
                                            </p>
                                            <button class="button button-buy">
                                                <a href="#">MUA NGAY</a>
                                            </button>
                                       </div>  
                                    </div>
                                </div>
                                <div class="col-xl-20 col-lg-20 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="inner-image">
                                            <a href="#" class="quickview">
                                                <img src="https://product.hstatic.net/200000641225/product/6_113a15d27ff04764ab7b9faa9ff0d91f_master.png" alt="dep5">
                                                <div class="pro-sale">
                                                    <i class="fa-solid fa-bolt-lightning"></i>
                                                    <span>-42%</span>
                                                </div>
                                            </a> 
                                        </div>
                                        <div class="view-detail">
                                            <h3 class="title-detail">
                                                <a href="#">
                                                    Giày Chạy Bộ GOYA SPEED Kết Hợp Tấm Carbon Màu Neon Cam
                                                </a>
                                            </h3>
                                            <p class="price-onsale">
                                                <span class="price">899,000</span>
                                                <span class="price-sale">1,650,000</span>
                                            </p>
                                            <button class="button button-buy">
                                                <a href="#">MUA NGAY</a>
                                            </button>
                                       </div>                                    
                                    </div>
                                </div>
                                <div class="col-xl-20 col-lg-20 col-md-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="inner-image">
                                            <a href="#" class="quickview">
                                                <img src="https://product.hstatic.net/200000641225/product/1_95cb1166d5de4e02b71ea3863cd8b8e1_master.png" alt="dep5">
                                                <div class="pro-sale">
                                                    <i class="fa-solid fa-bolt-lightning"></i>
                                                    <span>-42%</span>
                                                </div>
                                            </a> 
                                        </div>
                                        <div class="view-detail">
                                            <h3 class="title-detail">
                                                <a href="#">
                                                    Giày Chạy Bộ GOYA SPEED Kết Hợp Tấm Carbon Màu Neon Cam
                                                </a>
                                            </h3>
                                            <p class="price-onsale">
                                                <span class="price">899,000</span>
                                                <span class="price-sale">1,650,000</span>
                                            </p>
                                            <button class="button button-buy">
                                                <a href="#">MUA NGAY</a>
                                            </button>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End taps-product -->
    <!-- Coordinate outfits -->
    <div class="outfits">
        <div class="contain">
            <div class="row">
                <div class="col-12">
                    <div class="inner-header">
                        <h2>Gợi ý phối cùng</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="inner-box">
                        <img src="https://theme.hstatic.net/200000641225/1001103215/14/home_set_combo_1_img.jpg?v=850" alt="">
                        <div class="inner-title">
                            Giày Chạy Bộ GOYA SPEED
                        </div>
                        <div class="inner-btn">
                            <button class="button button-buy">
                                <a href="#">MUA NGAY</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="inner-box">
                        <img src="https://theme.hstatic.net/200000641225/1001103215/14/home_set_combo_2_img.jpg?v=855" alt="">
                        <div class="inner-title">
                            Giày Chạy Bộ GOYA Strides 2
                        </div>
                        <div class="inner-btn">
                            <button class="button button-buy">
                                <a href="#">MUA NGAY</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="inner-box">
                        <img src="https://theme.hstatic.net/200000641225/1001103215/14/home_set_combo_3_img.jpg?v=855" alt="">
                        <div class="inner-title">
                            Giày Thể Thao Sneaker GOYA
                        </div>
                        <div class="inner-btn">
                            <button class="button button-buy">
                                <a href="#">MUA NGAY</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Coordinate outfits -->

    <!-- New-post -->
    <div class="new-post">
        <div class="contain">
            <div class="row">
                <div class="col-12">
                    <div class="inner-header">
                        <h2>Bài Viết Mới Nhất</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="inner-box">
                        <a href="#">
                            <img src="https://file.hstatic.net/200000641225/article/thumnail__4__31935baf173a4c4e99c764655fe63cc7_large.png" alt="bai1">
                        </a>
                        <div class="inner-detail">
                            <h3 class="art-title">
                                <a href="#">
                                    <strong>Các bài tập luyện với máy chạy bộ giúp "dáng đẹp" cấp tốc</strong>
                                </a>
                            </h3>
                            <div class="art-desc">
                                <p>Máy chạy bộ là thiết bị tập luyện rất quan thuộc trong các phòng tập gym cũng như hộ gia đình. Nó được yêu thích bởi cung cấp nhiều bài tập đa dạng, đem lại nhiều lợi ích thiết thực cho người sử dụng. Máy được lập trình nhiều chế độ, từ đi bộ, chạy bộ, chạy đường bằng, chạy băng đồng, vượt dốc, biến tốc… GOYA sẽ “mách bạn” ngay những bài tập kết hợp với máy chạy bộ dễ thực hiện nhưng mang lại hiệu quả giảm cân, đẹp dáng nhanh chóng, hiệu quả! </p>
                            </div>
                            <hr>
                            <div class="art-meta">
                                <div class="art-date">
                                    <time datetime="2024-04-25">25 tháng 4, 2024</time>
                                </div>
                                <a class="art-seemore" href="#">
                                    Xem thêm
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="inner-box">
                        <a href="#">
                            <img src="https://file.hstatic.net/200000641225/article/thumnail__8__03ea34cd2cd04f678fac669ab0afa9f2_large.png" alt="bai1">
                        </a>
                        <div class="inner-detail">
                            <h3 class="art-title">
                                <a href="#">
                                    <strong>Người chạy bộ nên bổ sung nước như thế nào cho đúng cách?</strong>
                                </a>
                            </h3>
                            <div class="art-desc">
                                <p>Nước là yếu tố rất quan trọng với cơ thể của chúng ta, đặc biệt trong bộ môn chạy bộ có thể nói đó là vị cứu tinh và là người bạn đồng hành cùng chúng ta trên mọi chặng đường. ​​​​​Trong bài viết này, GOYA sẽ cung cấp cho bạn tất cả những thông tin cần thiết về cách bổ sung nước cho người chạy bộ, cách tính nhu cầu nước của bạn và cách mang nước thuận tiện khi chạy bộ. </p>
                            </div>
                            <hr>
                            <div class="art-meta">
                                <div class="art-date">
                                    <time datetime="2024-04-25">25 tháng 4, 2024</time>
                                </div>
                                <a class="art-seemore" href="#">
                                    Xem thêm
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="inner-box">
                        <a href="#">
                            <img src="https://file.hstatic.net/200000641225/article/thumnail__6__2699d2e5241c4f448fd62b8bc05d2024_large.png" alt="bai1">
                        </a>
                        <div class="inner-detail">
                            <h3 class="art-title">
                                <a href="#">
                                    <strong>Khi nào thì nên thay giày chạy bộ mới?</strong>
                                </a>
                            </h3>
                            <div class="art-desc">
                                <p>Giày chạy bộ là phụ kiện không thể thiếu của runner, cho dù là tập luyện ngoài trời hay sử dụng máy tập chạy tại nhà, chạy ở mức độ trung bình hay tăng tốc tối đa, đường bằng hay đường dốc. Nhưng bạn có biết, giày chạy bộ cũng có tuổi thọ và thời hạn sử dụng nhất định, nếu dùng giày quá cũ thì đôi chân của bạn sẽ không được bảo vệ và gây ra những chấn thương không đáng có. Vậy đâu là các dấu hiệu cho thấy đôi giày của bạn đã xuống cấp và đến lúc cần thay mới? Hãy theo dõi bài viết dưới đây của GOYA nhé! </p>
                            </div>
                            <hr>
                            <div class="art-meta">
                                <div class="art-date">
                                    <time datetime="2024-04-25">25 tháng 4, 2024</time>
                                </div>
                                <a class="art-seemore" href="#">
                                    Xem thêm
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="inner-box">
                        <a href="#">
                            <img src="https://file.hstatic.net/200000641225/article/thumnail__7__1090b7c9c453479cb6111715982b7594_large.png" alt="bai1">
                        </a>
                        <div class="inner-detail">
                            <h3 class="art-title">
                                <a href="#">
                                    <strong>Mẹo giúp cơ thể phục hồi nhanh chóng sau khi chạy bộ</strong>
                                </a>
                            </h3>
                            <div class="art-desc">
                                <p>Chạy bộ là môn thể thao dễ tập nhưng cũng cần đòi hỏi sự chuẩn bị tốt về cả thể chất lẫn tinh thần. Mỗi khi hoàn thành cuộc chạy đầy hứng khởi, việc phục hồi một cách nhanh chóng và hiệu quả là rất quan trọng để đảm bảo sức khỏe và tiếp tục tập luyện một cách hiệu quả. Dưới đây là một số bí quyết và gợi ý giúp bạn phục hồi sau chạy bộ marathon một cách tốt nhất.
                                </p>
                            </div>
                            <hr>
                            <div class="art-meta">
                                <div class="art-date">
                                    <time datetime="2024-04-25">25 tháng 4, 2024</time>
                                </div>
                                <a class="art-seemore" href="#">
                                    Xem thêm
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End New-post -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v19.0" nonce="U8EqJJUL"></script>
    
    <!-- footer -->
    <div class="page-footer">
        <div class="contain">
            <hr>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-box">
                        <h2 class="widget-footer_title">
                            Công Ty TNHH SX TM GOYA
                        </h2>
                        <div class="widget-footer_content">
                            <p>
                                Sản xuất giày thể thao chất lượng cao với giá bình dân dành cho người Việt là tôn chỉ và lý do thương hiệu giày thể thao Goya ra đời. Đa dạng mẫu mã, ứng dụng biến hóa trong mọi hoàn cảnh, giày thể thao Goya Việt Nam đã góp phần đem đến sự trẻ trung, năng động, tạo nên cá tính cho người sử dụng trong những năm qua.
                                <br>
                                MST: 0316278121
                                <br>
                                Ngày cấp: 18/05/2020
                                <br>
                                Nơi cấp: Sở kế hoạch và đầu tư TP HCM
                            </p>
                        </div>
                        <ul class="footerNav-social">
                            <li>
                                <a href="#" target="_blank" rel="noopener" title="facebook" aria-label="Facebook">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener" title="tiktok" aria-label="Tiktok">
                                    <i class="fa-brands fa-tiktok"></i>     
                               </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" rel="noopener" title="youtube" aria-label="Youtube">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-box">
                        <h2 class="widget-footer_title">
                            Thông tin liên hệ
                        </h2>
                        <div class="widget-footer_content">
                            <div class="address-footer">
                                <ul>
                                    <li class="contact-1">
                                        <b>Địa chỉ văn phòng</b>
                                        <br>
                                        <b>Miền Bắc: </b>
                                        Đường Hải Âu 3B, Số 09-48 KĐT Vinhomes OceanPark, Đa Tốn, Gia Lâm, Hà Nội
                                        <br>
                                        <b>Miền Nam: </b>
                                        640/3 Tỉnh lộ 15 , ấp 5, Tân Thạnh Đông, Củ Chi , TP HCM
                                    </li>
                                    <li class="contact-2">
                                        <b>Hotline: </b>
                                        084 501 5555
                                    </li>
                                    <li class="contact-3">
                                        <b>Email: </b>
                                        ctygoya@gmail.com
                                    </li>
                                    <li class="contact-4">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.07911138968!2d105.95016627503027!3d20.989465680650046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135af48c8d167e1%3A0x22cf6c2b11ee4e6d!2zSOG6o2kgw4J1IDNCLCBWaW5ob21lcyBPY2VhbiBQYXJrLCBLacOqdSBL4bu1LCBHaWEgTMOibSwgSMOgIE7hu5lpLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1714963808884!5m2!1sen!2s" width="280" height="130" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </li>
                                    <li class="contact-5">
                                        <div class="fb-page" data-href="https://www.facebook.com/goya.ap1" data-tabs="" data-width="500" data-height="100" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/goya.ap1" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/goya.ap1">GOYA - RunningShoes</a></blockquote></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-box">

                        <h2 class="widget-footer_title">
                            Chính sách
                        </h2>
                        <div class="widget-footer_content">
                            <ul class="footerNav-link">
                                <li class="item">
                                    <a href="#">Tìm kiếm</a>
                                </li>
                                <li class="item">
                                    <a href="#">Câu chuyện về Goya </a>
                                </li>
                                <li class="item">
                                    <a href="#">Chính sách bảo mật</a>
                                </li>
                                <li class="item">
                                    <a href="#">Chính sach bảo mật thông tin thanh toán</a>
                                </li>
                                <li class="item">
                                    <a href="#">Chính sách vận chuyển</a>
                                </li>
                                <li class="item">
                                    <a href="#">Chính sách kiểm hàng</a>
                                </li>
                                <li class="item">
                                    <a href="#">Chính sách đổi trả</a>
                                </li>
                                <li class="item">
                                    <a href="#">Quy định sử dụng</a>
                                </li>
                                <li class="item">
                                    <a href="#">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-box">
                        <h2 class="widget-footer_title">
                            Pháp lý
                        </h2>
                        <div class="widget-footer_content">
                            <img src="https://theme.hstatic.net/200000641225/1001103215/14/footer_logobct_img.png?v=850" alt="bct">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>
                <!-- <a href="#">Về trang chủ</a> -->
            </p>
        </div>
    </div>
    <!-- End footer -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>