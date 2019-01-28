
	<?php $title="Ví tiền";  require_once('template-parts/header.php'); ?>
	<?php require_once('template-parts/popup.php'); ?>
	<main class="main-container">
		<section class="card-container">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-12">
						<div class=" row card-content">
							<div class="col-xs-12 col-md-8">
								<h1>0 đ</h1>
								<h3>Số dư</h3>
							</div>
							<div class="col-xs-12 col-md-4">
								<div class="btn-popup"><div class="popup-icon"><svg viewBox="0 0 32 32"><path d="M27.4 30H4.6c-1 0-1.8-.8-1.8-1.8V10.7c0-1 .8-1.8 1.8-1.8l21-7c1 0 1.8.8 1.8 1.8V9c1 0 1.8.8 1.8 1.8v17.5c-.1.9-.8 1.7-1.8 1.7zM25.6 4.6c0-.5-.4-.9-.9-.9L10.3 9h15.3V4.6zm1.8 14.9h-3.5v1.8h3.5v-1.8zm0 3.5h-5.3v-5.3h5.3v-6.1c0-.5-.4-.9-.9-.9h-21c-.5 0-.9.4-.9.9v15.8c0 .5.4.9.9.9h21c.5 0 .9-.4.9-.9V23z"></path></svg></div><div class="move">Nạp tiền vào tài khoản</div></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="card-list">
			<div class="container">
				<div class="row">
					<div class="card-content-list">
						<h1> Các khoản giao dịch gần đây</h1>
						<div class="table-list">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Ngày</th>
                                <th>Loại giao dịch | Mô tả</th>
                                <th>Tình trạng</th>
                                <th>Số tiền</th>
                            </tr>
                            </thead>
                            <tbody>
                               <tr>
                               		<td>28/1/2019</td>
                               		<td>Nạp tiền</td>
                               		<td><span class="status">Thành công</span></td>
                               		<td><span class="price">99.000 vnđ</span></td>
                               </tr>
                            </tbody>
                        </table>
						</div>
						<div class="table-history"><a href=""><i class="fa fa-bars"></i> Lịch sử giao dịch</a></div>
					</div>
	
				</div>
			</div>
		</section>
	</main>
	<?php require_once('template-parts/footer.php'); ?>