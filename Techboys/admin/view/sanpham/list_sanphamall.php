<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Danh sách sản phẩm</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Tên sản phẩm</th>
              <th>Giá</th>
              <th>Nguồn gốc</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($listSanPhamAll as $key => $item) {
            ?>
              <tr>
                <td><?= $item['id_sanpham'] ?></td>
                <td><?= $item['ten_sp'] ?></td>
                <td><?=$item['anh_sp']?></td>
                <td><?= $item['gia'] ?></td>
                <td><?= $item['nguongoc'] ?></td>

              </tr>
            <?php } ?>
          </tbody>
        </table>
        <a class="btn btn-primary" href="index.php?act=listdanhmuc">Danh sách</a>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->