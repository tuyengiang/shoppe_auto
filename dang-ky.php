<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php $title="Đăng ký tài khoản"; if(isset($title)){ echo $title; }else{ echo "Trang chủ"; }?></title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/style-login.css">
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<link rel="stylesheet" type="text/css" href="fonts/awesome/css/font-awesome.css">
	<meta name="theme-color" content="#EE4D2D"/>
	<meta name="msaplication-navbutton-color" content="#EE4D2D"/>
	<meta name="apple-mobile-app-status-style-bars" name="#EE4D2D"/>
</head>
<body class="wapper-login">
	<section class="login-container" style="margin-top:20px !important;">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-6 col-md-offset-3">
					<div class="login-title">Tool Shope</div>
					<div class="form-content">
						<form method="post">
							<div class="form-group form-lg">
								<h2>Đăng ký tài khoản mới</h2>
							</div>
							<div class="form-group form-lg">
								<input class="form-control" type="email" id="input-user" placeholder="Email" name="username">
							</div>
							<div class="form-group form-lg">
								<input class="form-control" type="text" id="input-password" placeholder="Mật khẩu" name="username">
							</div>
							<div class="form-group form-lg">
								<input class="form-control" type="text" id="input-password" placeholder="Nhập lại mật khẩu" name="username">
							</div>
							<div class="form-group form-lg">
								<button type="submit" class="btn-login">Đăng ký</button>
							</div>
							<div class="form-group form-lg">
								<span>Bạn đã có tài khoản <i class="fa fa-long-arrow-right"></i>  </span> <span><a href="/shope/index.php" class="btn-re">Đăng nhập</a></span>
							</div>
						</form>
					</div>
				</div>
			</div> 
		</div>
	</section>
</body>
</html>