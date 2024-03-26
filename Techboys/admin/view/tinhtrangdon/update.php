<?php
if(is_array($mothoadon)){
    extract($mothoadon);
}
?>
<form method="post" action="index.php?act=suatinhtrang">
<div class="mb-3">
    <label for="" class="form-label">ID</label>
    <input type="text" class="form-control"  value="<?=$id_hoadon?>" disabled>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tình Trạng</label>
    <input type="text" class="form-control" id="" name="tinhtrang" value="<?=$tinhtrang?>">
  </div>
  
  <input type="hidden" name="id" value="<?=$mothoadon['id_hoadon'] ?>">
  <button type="submit" class="btn btn-primary" name="capnhat">Cập nhật</button>
</form>