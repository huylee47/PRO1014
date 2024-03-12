<?php
// aaaaaaaaaaaaaaaaaaaaaa
include 'header.php';
if(($_GET== [])){
  include 'home.php';
}else{
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act) {
            case 'cuahang':
                include "cuahang.php";
                break;
            case 'lienhe':
                include "lienhe.php";
                break;
                case 'giohang':
                    include "giohang.php";
                    break;
                    case 'blog':
                        include "blog.php";
                        break;
        }
    }
}

include 'footer.php';

?>