<?php
require_once './model/sanpham.php';
require_once './model/danhmuc.php';
$listdanhmuc = list_danhmuc();
require_once 'view/sanpham/add.php';
if (isset($_POST['themsanpham'])) {
    $id_dm=$_POST['id_dm'] ;
    $tensp=$_POST['tensp'] ;
    $gia=$_POST['gia'] ;
    $hinhanh= $_FILES['hinhanh']['name'];
    $ghichu= $_POST['ghichu'];
    $soluong=$_POST['soluong'];
    $NSX=$_POST['NSX'];
    $xuatxu=$_POST['xuatxu']; 
    if(isset($_FILES['hinhanh'])){
    move_uploaded_file($_FILES["hinhanh"]["tmp_name"],'../upload/'.$hinhanh);
}
    $id_sp = themsanpham($id_dm,$tensp,$gia,$hinhanh,$ghichu,$soluong,$NSX,$xuatxu);  

}

   

