<head>
<link rel="stylesheet" type="text/css" href="styles/blog_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css" />

</head>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shop_background.jpg"></div>
		<div class="home_overlay"></div>
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h2 class="home_title">Tin Tức</h2>
		</div>
	</div>

	<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="blog_posts d-flex flex-row align-items-start justify-content-between">
					<?php
					foreach ($listTinTucAll as $key => $item) {
					?>
					<div class="blog_post">
							<div><img class="blog_image" src="/PRO1014/Techboys/upload/<?php echo $item['img']?>"></img></div>
							<div class="blog_text"><?= substr($item['noidung'], 0, 25) ?>...</div>
							<div class="blog_button"><a href="blog_single.html">Đọc</a></div>
					</div>
					<?php } ?>

					</div>
				</div>
					
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	
