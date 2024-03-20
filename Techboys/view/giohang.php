<head>
	<link rel="stylesheet" type="text/css" href="styles/cart_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/cart_responsive.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css" />

</head>
<!-- Cartnnnnnnnnnnnnnnnnnnnnnn -->
<div class="cart_section">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div class="cart_container">
					<div class="cart_title">Giỏ hàng</div>
					<div class="cart_items">
						<ul class="cart_list">
							<li class="cart_item clearfix">
								<div class="cart_item_image"><img src="images/shopping_cart.jpg" alt=""></div>
								<div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
									<div class="cart_item_name cart_info_col">
										<div class="cart_item_title">Tên</div>
										<div class="cart_item_text">MacBook Air 13</div>
									</div>

									<div class="cart_item_quantity cart_info_col">
										<div class="cart_item_title">Số lượng</div>
										<div class="cart_item_text">1</div>
									</div>
									<div class="cart_item_price cart_info_col">
										<div class="cart_item_title">Giá</div>
										<div class="cart_item_text">$2000</div>
									</div>
									<div class="cart_item_total cart_info_col">
										<div class="cart_item_title">Thành tiền</div>
										<div class="cart_item_text">$2000</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<!-- Order Total -->
                     
					<br><br>
					<form action="">
						<h3>Thông tin khách hàng</h3>
						<div>
							<label for="">Họ tên</label>
							<input required type="text" name="hoten">
						</div>
						<div>
							<label for="">Số điện thoại</label>
							<input required type="text" name="sdt">
						</div>
						<div>
							<label for="">Email</label>
							<input required type="text" name="email">
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
				</form>
				<div class="tongtien">
					<h3>Tổng tiền giỏ hàng</h3>
					<p><span>Tiền tạm tính</span> <span>114,000đ</span></p>
					<p><span>Phí vận chuyển</span> <span>10,000đ</span></p>
					<p><span>Voucher</span> <span><select name="" class="voucher" required>
								<option value="transfer"></option>
								<option value="transfer">20%</option>
								<option value="cash">30%</option>
								<!-- Thêm các phương thức thanh toán khác tại đây -->
							</select></span></p>
							<p><span>Phương thức thanh toán</span> <span><select name="" class="voucher" required>
								<option value="transfer"></option>
								<option value="transfer">chuyển khoản</option>
								<option value="cash">tiền mặt</option>
								<!-- Thêm các phương thức thanh toán khác tại đây -->
							</select></span></p>
					<div class="total">
						<p><span>Tổng tiền</span> <span>124,000đ</span></p>
					</div>

				</div>
				<div class="cart_buttons">
					<button type="button" class="button cart_button_checkout">Đặt hàng</button>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Newsletter -->


</body>

</html>