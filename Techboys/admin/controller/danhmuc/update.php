<?php
require_once 'model/danhmuc.php';
if (isset($_GET['id'])) {
    $motdanhmuc =list_motdanhmuc($_GET['id']);
    require_once 'view/danhmuc/update.php';
}
if(isset($_POST['capnhat'])){
    $id = $_POST['id'];
    $tendm = $_POST['ten'];
    update_danhmuc($id, $tendm);
    header('location: index.php?act=listdanhmuc');
}

?>