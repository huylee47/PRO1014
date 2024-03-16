<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Danh mục</h1>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Danh sách danh mục</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Tên danh mục</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($listdanhmuc as $key => $item) {
            ?>
              <tr>
                <td><?= $item['id_danhmuc'] ?></td>
                <td><?= $item['ten_danhmuc'] ?></td>
                <td><a class="btn btn-primary" href="index.php?act=suadanhmuc&id=<?= $item['id_danhmuc'] ?>">Sửa</a>
                  <a class="btn btn-primary" href="index.php?act=xoadanhmuc&id=<?= $item['id_danhmuc'] ?>">Xóa</a>
                </td>

              </tr>
            <?php } ?>
          </tbody>
        </table>
        <a class="btn btn-primary" href="index.php?act=themdanhmuc">Thêm mới</a>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->