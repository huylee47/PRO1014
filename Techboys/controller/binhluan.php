<?php
require_once "model/binhluan.php";
require_once "model/sanpham.php";
if(isset($_POST['thembinhluan']) && ($_POST['idnguoidung']>0)){}
$id=$_POST['idnguoidung'];
$id_sp=$_POST['idsanpham'];
$noidungBL=$_POST['noidung'];
if (preg_match('/[^\p{Z}\r\n]+/u', $noidungBL)) {
    them_binhluan($id, $noidungBL,$id_sp);
    echo "<script>alert('Bình luận thành công');</script>";
    header('location: index.php?act=chitiet_sanpham&id='.$id_sp);
  } else {
    echo "Gửi bình luận thất bại";
  }
?>