
<!DOCTYPE html>
<html lang="en">
<!-- aaaaaaaaaaa -->
<head>
    <title>TechBoys</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="OneTech shop project" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css" />
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css" />
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css" />
    <link rel="stylesheet" type="text/css" href="plugins/slick-1.8.0/slick.css" />
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css" />
    <link rel="stylesheet" type="text/css" href="styles/responsive.css" />
    <link rel="stylesheet" type="text/css" href="styles/comment.css" />
</head>

<body>
    <div class="super_container">
        <!-- Header -->
        <header class="header">
            <!-- Top Bar -->

            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col d-flex flex-row">
                            <div class="top_bar_contact_item">
                                <div class="top_bar_icon">
                                    <img src="images/phone.png" alt="" />
                                </div>
                                +03 256 341
                            </div>
                            <div class="top_bar_contact_item">
                                <div class="top_bar_icon">
                                    <img src="images/mail.png" alt="" />
                                </div>
                                <a href="mailto:fastsales@gmail.com">techboys@gmail.com</a>
                            </div>
                            <div class="top_bar_content ml-auto">
                            <?php                    
                            if(isset($_SESSION['user'])){
                            ?>
                                <div class="top_bar_user">
                                <div style="margin-right: 10px;">Hello <?php echo $_SESSION['user']['user']?></div> 
                                <?php
                                if (isset($_SESSION['user']['quyen']) && $_SESSION['user']['quyen'] =='1') {
                                    ?>
                                    <div><a href="http://localhost/pro1014/Techboys/admin/">ADMIN</a></div>
                                    <?php
                                }
                                ?>
                                       
                                    <div><a href="index.php?act=dangxuat">Đăng xuất</a></div>
                                </div>
                                <?php }else{ 
                                    ?>
                                    <div class="top_bar_user">
                                    <div class="user_icon">
                                        <img src="images/user.svg" alt="" />
                                    </div>
                                    <div><a href="index.php?act=dangky">Đăng ký</a></div>
                                    <div><a href="index.php?act=dangnhap">Đăng nhập</a></div>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header Main -->

            <div class="header_main">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="col-lg-2 col-sm-3 col-3 order-1">
                            <div class="logo_container">
                                <div class="logo"><a href="index.php">TechBoys</a></div>
                            </div>
                        </div>

                        <!-- Search -->
                        <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                            <div class="header_search">
                                <div class="header_search_content">
                                    <div class="header_search_form_container">
                                        <form action="#" class="header_search_form clearfix">
                                            <input type="search" required="required" class="header_search_input"
                                                placeholder="Tìm kiếm" />
                                            <div >
                                                <div class="custom_dropdown_list">
                                                    <span class="custom_dropdown_placeholder clc"></span>
    
                                                    <ul class="custom_list clc">
                                                        <li>
                                                            <a class="clc" href="#">All Categories</a>
                                                        </li>
                                                        <li><a class="clc" href="#">Computers</a></li>
                                                        <li><a class="clc" href="#">Laptops</a></li>
                                                        <li><a class="clc" href="#">Cameras</a></li>
                                                        <li><a class="clc" href="#">Hardware</a></li>
                                                        <li><a class="clc" href="#">Smartphones</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <button type="submit" class="header_search_button trans_300" value="Submit">
                                                <img src="images/search.png" alt="" />
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Wishlist -->
                        <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                            <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">


                                <!-- Cart -->
                                <div class="cart">
                                    <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                        <div class="cart_icon">
                                            <img src="images/icons8-shop-32.png"  alt="" />
                                           
                                        </div>
                                        <div class="cart_content">
                                            <div class="cart_text"><a href="index.php?act=showgiohang">Giỏ hàng</a></div>
                                            <div class="cart_price">
                                                <?php
                                               $tongtien = 0;
                                               if (isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])) {
                                                   foreach ($_SESSION['giohang'] as $item) {
                                                       $tongtien += $item['gia'] * $item['soluong'];
                                                   }
                                                   echo $tongtien;
                                               }else{
                                                    echo "0";
                                                }
                                               
                                                     
                                                ?>đ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Navigation -->

            <nav class="main_nav">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="main_nav_content d-flex flex-row">
                                <!-- Categories Menu -->
                                <div class="cat_menu_container">
								<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
									<div class="cat_burger"><span></span><span></span><span></span></div>
									<div class="cat_menu_text">Danh mục sản phẩm</div>
								</div>

								<ul class="cat_menu">
                                <?php
                                require_once "model/danhmuc.php";
                                $listdanhmuc = list_danhmuc();
                                    foreach ($listdanhmuc as $key => $item) {
                                    ?>
                                    <li><a href="#"><?=$item['ten_danhmuc']?><i class="fas fa-chevron-right"></i></a></li>
                                    <?php } ?>
									
								</ul>
							</div>


                                <!-- Main Nav Menu -->

                                <div class="main_nav_menu ml-auto">
                                    <ul class="standard_dropdown main_nav_dropdown">
                                        <li>
                                            <a href="index.php">Trang chủ<i class="fas fa-chevron-down"></i></a>
                                        </li>
                                        <li>
                                            <a href="index.php?act=cuahang">Cửa hàng<i class="fas fa-chevron-down"></i></a>
                                        </li>
                                        <li>
                                            <a href="index.php?act=blog">Tin tức<i class="fas fa-chevron-down"></i></a>
                                        </li>
                                        <li>
                                            <a href="index.php?act=lienhe">Liên hệ<i class="fas fa-chevron-down"></i></a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Menu Trigger -->


                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Menu -->

        </header>