<form method="POST" class="form" action="index.php?act=themkhoanh" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="" class="form-label">Thêm ảnh</label>
    <input type="file" required class="form-control" multiple accept="image/*" name="hinhanh[]">
  </div>
  <input type="hidden" name="id" value="<?= $idSp?>">
  <button type="submit" class="btn btn-primary" name="themkhoanh">Thêm</button>
</form>