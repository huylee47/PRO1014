<?php
require_once './model/tintuc.php';
require_once 'view/tintuc/add.php';
if (isset($_POST['themtintuc'])) {
    $noidung=$_POST['noidung'] ;
    $hinhanh= $_FILES['hinhanh']['name'];
    $id_nguoitao= $_POST['id_nguoitao'];
    if(isset($_FILES['hinhanh'])){
    move_uploaded_file($_FILES["hinhanh"]["tmp_name"],'../upload/'.$hinhanh);
}
    themtintuc($noidung,$hinhanh,$id_nguoitao);
}