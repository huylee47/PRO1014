<?php
if(is_array($motvoucher)){
    extract($motvoucher);
}
?>
<form method="post" action="index.php?act=suavoucher">
<div class="mb-3">
    <label for="" class="form-label">ID</label>
    <input type="text" class="form-control"  value="<?=$id_voucher?>" disabled>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tên voucher</label>
    <input type="text" class="form-control" id="" name="ten" value="<?=$ten_voucher?>">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Giá giảm</label>
    <input type="text" class="form-control" id="" name="giagiam" value="<?=$giagiam?>">
  </div>
  <input type="hidden" name="id" value="<?= $motvoucher['id_voucher'] ?>">
  <button type="submit" class="btn btn-primary" name="capnhat">Cập nhật</button>
</form>