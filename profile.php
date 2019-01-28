
	<?php $title="Thông tin tài khoản của bạn";  require_once('template-parts/header.php'); ?>
	<main class="main-container">
		<section class="profile-container">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-4">
						<?php require_once('template-parts/sidebar.php'); ?>
					</div>
					<div class="col-xs-12 col-md-8">
							<div class="profile-content">
								<div class="profile-title">Thông tin của bạn</div>
								<div class="profile-header">
									<div class="profile-avatar"><img src="images/background/like.png"></div>
									<div class="profile-description">
											<h3>Demo</h3>
									</div>
								</div>
								<div class="profile-list">
									<div class="row">
										<div class="col-xs-12 col-md-6">
											<div class="list"><span><i class="fa fa-bars"></i> Số sản phẩm </span> <span class="number">10</span></div>
											<div class="list"><span><i class="fa fa-shopping-cart"></i> Số cửa hàng </span> <span class="number">10</span></div>
											<div class="list"><span><i class="fa fa-money"></i> Số tiền dư: </span> <span class="number">1.000.000 vnđ</span></div>
										</div>
										<div class="col-xs-12 col-md-6">
											<div class="list"><span><i class="fa fa-thumbs-up"></i> Điểm Like </span> <span class="number">10</span></div>
											<div class="list"><span><i class="fa fa-plus"></i> Điểm Subcribe </span> <span class="number">10</span></div>
										</div>

									</div>
							</div>		
					</div>
				</div>
			</div>
		</section>
	</main>
	<?php require_once('template-parts/footer.php'); ?>