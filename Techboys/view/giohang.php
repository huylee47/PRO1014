<head>
	<link rel="stylesheet" type="text/css" href="styles/cart_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/cart_responsive.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<!-- Cartnnnnnnnnnnnnnnnnnnnnnn -->
<div class="cart_section">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div class="cart_container">
					<div class="cart_title">Giỏ hàng</div>
					<form action="index.php?act=dathang" method="post">
						<table class="table">
							<tr>
								<th>Tên sản phẩm</th>
								<th>Giá</th>
								<th>Số lượng</th>
								<th>Hình ảnh</th>
								<th></th>
							</tr>
							<?php
							if (isset($_SESSION['giohang'])) {
								foreach ($_SESSION['giohang'] as $key => $item) {
							?>
									<tr>
										<td><?= $item['ten_sanpham'] ?></td>
										<td><?php echo $item['gia'] ?></td>
										<td class="centered"><input required disabled type="number" value="<?php echo $item['soluong'] ?>"></td>
										<td><img width="50" height="50" src="upload/<?php echo $item['img'] ?>" alt=""></td>
										<td><a class="btn btn-primary" href="index.php?act=xoasanpham&id=<?= $item['id_sanpham']?>">Xóa</a></td>
									</tr>
							<?php
								}
							}
							?>
						</table>

						<!-- Order Total -->

						<br><br>
						<h3>Thông tin khách hàng</h3>
						<div>
							<label for="">Họ tên</label>
							<input required type="text" name="ten">
						</div>
						<div>
							<label for="">Số điện thoại</label>
							<input required type="text" name="sdt">
						</div>	
						<div>
							<label for="">Địa chỉ</label>
							<input required type="text" name="diachi">
						</div>
						<div>
							<label for="">Ghi chú</label>
							<input required type="text" name="ghichu">
						</div>

				</div>

				<div class="tongtien">
					<h3>Tổng tiền giỏ hàng</h3>
					<p><span>Tiền tạm tính</span> <span><?=$tongtien?>đ</span></p>
					<p><span>Voucher</span> <span><select name="" class="voucher1" required>
								<option value="voucher"></option>
								<option value="voucher">20%</option>
								<option value="voucher">30%</option>
								<!-- Thêm các phương thức thanh toán khác tại đây -->
							</select></span></p>
					<p><span>Phương thức thanh toán</span> <span>
						<select name="pttt" class="voucher" required>
								<option value=""></option>
								<option value="1">chuyển khoản</option>
								<option value="2">tiền mặt</option>
								<!-- Thêm các phương thức thanh toán khác tại đây -->
							</select></span></p>
					<div class="total">
						<p><span>Tổng tiền</span> <span><?=$tongtien?>đ</span></p>
					</div>

				</div>
				<div class="cart_buttons">
					<button type="submit" class="button cart_button_checkout">Đặt hàng</button>
				</div>
			</div>
		</div>
	</div>

</div>
</form>
<!-- Newsletter -->


</body>

</html>