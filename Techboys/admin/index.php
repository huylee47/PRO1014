<?php
session_start();
require_once 'view/header.php';

// Kiểm tra xem $_SESSION['quyen'] tồn tại và có giá trị bằng một không
if(isset($_SESSION['quyen']) && $_SESSION['quyen'] == 1) {
    // Kiểm tra xem có tham số GET không
    if(empty($_GET)) {
        require_once 'view/home.php';
    } else {
        if(isset($_GET['act'])) {
            $act = $_GET['act'];
            switch ($act) {
                case 'listdanhmuc':
                    require_once "controller/danhmuc/list.php";
                    break;
                case 'themdanhmuc':
                    require_once "controller/danhmuc/add.php";
                    break;
                case 'xoadanhmuc':
                    require_once "controller/danhmuc/xoa.php";
                    break;
                case 'suadanhmuc':
                    require_once "controller/danhmuc/update.php";
                    break;
                case 'chitietdanhmuc':
                    require_once "controller/sanpham/list_sanpham.php";
                    break;
                case 'chitietsanpham':
                    require_once "chitietsanpham.php";
                    break;
            }
        }
    }
} else {
    // Nếu $_SESSION['quyen'] không tồn tại hoặc không có quyền truy cập, bạn có thể chuyển hướng người dùng hoặc hiển thị thông báo lỗi
    echo "Bạn không có quyền truy cập vào trang này.";
}

require_once 'view/footer.php';
?>
