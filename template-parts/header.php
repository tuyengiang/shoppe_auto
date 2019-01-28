<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php if(isset($title)){ echo $title; }else{ echo "Trang chủ"; }?></title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<link rel="stylesheet" type="text/css" href="fonts/awesome/css/font-awesome.css">
	<meta name="theme-color" content="#EE4D2D"/>
	<meta name="msaplication-navbutton-color" content="#EE4D2D"/>
	<meta name="apple-mobile-app-status-style-bars" name="#EE4D2D"/>
</head>
<body class="wapper">
<header class="header-container">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-9">
					<a href="/shope/home.php" class="text-logo"><div class="logo">
						<div class="images-lg"><svg class="logo-images" viewBox="33 0 32 32"><path d="M61.7 8.9h-6.2c-.1-2.7-1.5-8.4-6-8.4-4.8 0-5.9 6.1-5.9 8.4h-6.2c-1.7 0-1.4 1.7-1.4 1.7l1.2 16.6s-.1 3.6 3.2 3.7h18.3c3.1-.2 3.1-3.8 3.1-3.8L63 10.5c.1.1.3-1.7-1.3-1.6zM49.6 2c3.9.1 4.3 6.3 4.3 6.9h-8.7c0-.5.3-6.8 4.4-6.9zm4.8 21.3c-.3 3.3-3.9 3.4-4.5 3.4-2.8-.1-4.5-1.6-4.5-1.6-.1-.1-.2-.2-.2-.4 0-.3.2-.5.5-.5.1 0 .2 0 .3.1.2.1 1.7 1.3 3.9 1.4 1.6-.1 3.3-.8 3.4-2.5.2-2.4-3.2-3.3-3.8-3.5s-4.1-1.1-3.9-3.9c.1-1.2 1.1-3.2 3.9-3.3 2.5 0 3.8 1.1 3.8 1.1.1.1.2.2.2.3 0 .3-.2.5-.5.5-.1 0-.2 0-.3-.1 0 0-1.5-.9-3.2-.9-1.9.1-2.9 1.4-2.9 2.5 0 1.8 2.4 2.5 2.9 2.7 2.3.8 5.1 1.7 4.9 4.7z"></path></svg></div>
						<div class="brand">Sub - Like Shopee</div>
					</div></a>
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="header-dropdown">
						<ul>
							<li>
								<a href="#"><svg data-v-2c299796="" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" xml:space="preserve"><path data-v-2c299796="" d="M28,27.1H4c-0.6,0-1-0.4-1-1c0-0.6,0.4-1,1-1h1V11c0-4.4,3.6-8,8-8h1c0-1.1,0.9-2,2-2s2,0.9,2,2h1c4.4,0,8,3.6,8,8v14h1
        c0.6,0,1,0.4,1,1C29,26.6,28.6,27.1,28,27.1z M25,11c0-3.3-2.7-6-6-6h-6c-3.3,0-6,2.7-6,6v14h18V11z M18.8,29.1
        c-0.6,1.6-2.3,2.3-3.9,1.7c-0.8-0.3-1.4-0.9-1.7-1.7H18.8z"></path></svg></a>
        						<ul class="sub-menu-notice">
        							<li class="notice-title">Thông mới nhận</li>
        							<li>
        								<a href="/">
        									<div class="notice-avatar">
												<img src="/shope/template-parts/user.jpg">
        									</div>
        									<div class="notice-content">
												<p class="title">Bạn có thông báo mới</p>
												<p class="description">🔔 Khuyến mại giá sốc</p>
												<p class="description">🍉 Khuyến mại giá sốc</p>
        									</div>
        								</a>
        							</li>
        							<li>
        								<a href="/">
        									<div class="notice-avatar">
												<img src="/shope/template-parts/user.jpg">
        									</div>
        									<div class="notice-content">
												<p class="title">Bạn có thông báo mới</p>
												<p class="description">🔔 Khuyến mại giá sốc</p>
												<p class="description">🍉 Khuyến mại giá sốc</p>
        									</div>
        								</a>
        							</li>
        							<li>
        								<a href="/">
        									<div class="notice-avatar">
												<img src="/shope/template-parts/user.jpg">
        									</div>
        									<div class="notice-content">
												<p class="title">Bạn có thông báo mới</p>
												<p class="description">🔔 Khuyến mại giá sốc</p>
												<p class="description">🍉 Khuyến mại giá sốc</p>
        									</div>
        								</a>
        							</li>
        						</ul>
							</li>
							<li>
								<a href="#" class="bread">drop</a>
								<ul class="sub-menu-dash button-grid">
									<div class="row button-content">
										<?php require_once('button-header.php'); ?>
									</div>
								</ul>
							</li>
							<li class="dropdown-user">
								<a href="#"><div class="avatar-user"><img src="images/user/user.jpg"></div><div class="name-user">Tuyển Giảng</div></a>
								<ul class="sub-menu-user">
									<li><a href="/shope/profile.php"><i class="fa fa-user"></i> Hồ sơ của bạn</a></li>
									<li><a href="/shope/profile"><i class="fa fa-thumbs-up"></i> Điểm Like</a></li>
									<li><a href="/shope/profile"><i class="fa fa-plus"></i> Điểm Subcribe</a></li>
									<li><a href=""><i class="fa fa-sign-out"></i> Đăng xuất</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>