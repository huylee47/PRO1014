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
              <th>ID hóa đơn</th>
              <th>ID Khách hàng</th>
              <th>Địa chỉ</th>
              <th>ID voucher</th>
              <th>Ngày lập</th>
              <th>Pttt</th>
              <th>Tình Trạng</th>
              <th>Tổng tiền</th>
              <th>Chi tiết</th>

              <th colspan="2" style="text-align: center;">Chức năng</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($listhoadonAll as $key => $item) {
            ?>
              <tr>
                <td><?= $item['id_hoadon'] ?></td>
                <td><?= $item['id_khachhang'] ?></td>
                <td><?= $item['diachi'] ?></td>
                <td><?= $item['id_voucher'] ?></td>
                <td><?= $item['ngay_lap']?></td>
                <td><?= $item['pttt']?></td>
                <td><?= $item['tinh_trang']?></td>
                <td></td>
                <td><a class="btn btn-primary" href="index.php?act=chitiethoadon&id=<?= $item['id_hoadon'] ?>">chi tiết</a></td>
                <td><a class="btn btn-primary" href="index.php?act=suahoadon&id=<?= $item['id_hoadon'] ?>">Sửa</a></td>
                <td> <a class="btn btn-primary" href="index.php?act=xoahoadon&id=<?= $item['id_hoadon'] ?>">Xóa</a></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->