<?php $title="Đăng ký tài khoản";  require_once('template-parts/header.php'); ?>
	<main class="main-container">
		<section class="header-title">
			<div class="container">
				<div class="row">
					<div class="cell-title">Đăng ký tài khoản</div>
					<div class="col-xs-12 col-md-6 col-md-offset-3 login-container">
						<div class="form-group">
							<label>Tên đăng nhập</label>
							<input type="text" class="form-control" name="username" placeholder="Tên đăng nhập" required="true">
						</div>
						<div class="form-group">
							<label>Họ tên</label>
							<input type="text" class="form-control" name="name" placeholder="Tên đăng nhập" required="">
						</div>
						<div class="form-group">
							<label>Mật khẩu</label>
							<input type="password" class="form-control" name="password_1" placeholder="Tên đăng nhập" required="">
						</div>
						<div class="form-group">
							<label>Nhập lại mật khẩu</label>
							<input type="password" class="form-control" name="password_2" placeholder="Tên đăng nhập" required="">
						</div>
						<div class="form-group">
							<button type="submit" name="login" class="btn btn-success">Đăng ký</button>
							<div class="question">Bạn đã có tài khoản? <a href="index.php">Đăng nhập</a></div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
</body>
</html>