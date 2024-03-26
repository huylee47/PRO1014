<?php
if(isset($_GET['id'])){
    $idSp= $_GET['id'];
    require_once 'view/sanpham/add_storage.php';
}else{
    require_once './model/khoanh.php';
    $id = $_POST['id'];
    if (isset($_POST['themkhoanh'])) {
        $TongSoHinhAnh = count($_FILES['hinhanh']['name']);
        $arrayHinhAnh = [];
        for ($i = 0; $i < $TongSoHinhAnh; $i++) {
          $tenHinhAnh = $_FILES['hinhanh']['name'][$i];
          $duongDanAnh = $_FILES['hinhanh']['tmp_name'][$i];   

          $tenMoi = uniqid() . '.' . $tenHinhAnh;
          move_uploaded_file($duongDanAnh, '../upload/' . $tenMoi);
          $arrayHinhAnh[] = $tenMoi;
        }
        foreach ($arrayHinhAnh as $ten){
            insert_khoanh($id,$ten);
        }
        
        // // $filesArray = json_encode($filesArray);
        // $query = "INSERT INTO kho_anh VALUES ('', '$name', '$filesArray')";
        // mysqli_query($conn, $query);
      }
}
?>