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
                            <th>Ngày lập</th>
                            <th>Địa chỉ</th>
                            <th>Pttt</th>
                            <th>Tình trạng</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listhoadonAll as $item) {
                        ?>
                            <tr>
                                <td><?= $item['id_hoadon'] ?></td>
                                <td><?= $item['ngaytao'] ?></td>
                                <td><?= $item['diachi'] ?></td>
                                <td><?= $item['phuongthuc_thanhtoan'] ==  1 ? "Chuyển khoản" : "Tiền mặt"; ?></td>
                                <td><?= $item['tinhtrang'] ==  0 ? "Mới đặt" : ($item['tinhtrang'] ==  1 ? "Đang xử lý" : ($item['tinhtrang'] ==  2 ? "Đang giao" : "Đã giao")); ?></td>
                                <td><a class="btn btn-primary" href="index.php?act=suatinhtrang&id=<?= $item['id_hoadon'] ?>">Sửa</a></td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->