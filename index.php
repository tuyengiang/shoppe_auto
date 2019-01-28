
	<?php $title="Đăng nhập vào hệ thống";  require_once('template-parts/header.php'); ?>
	<main class="main-container">
		<section class="header-title">
			<div class="container">
				<div class="row">
					<div class="cell-title">Đăng nhập vào hệ thống</div>
					<div class="col-xs-12 col-md-6 col-md-offset-3 login-container">
						<div class="form-group">
							<label>Tên đăng nhập</label>
							<input type="text" class="form-control" name="username" placeholder="Tên đăng nhập" required="">
						</div>
						<div class="form-group">
							<label>Mật khẩu</label>
							<input type="password" class="form-control" name="password" placeholder="Mật khẩu" required="">
						</div>
						<div class="form-group">
							<button type="submit" name="login" class="btn btn-success">Đăng nhập</button>
							<a href="dang-ky.php" class="btn btn-danger">Đăng ký</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
</body>
</html>