
	<?php $title="Subcribe";  require_once('template-parts/header.php'); ?>
	<main class="main-container">
		<section class="subcribe-button">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-6 col-md-offset-3">
						<form method="post">
							<input type="text" placeholder="Nhập link shop bạn cần subcribe" class="input-text">
							<button class="btn btn-add-subcribe"><i class="fa fa-plus"></i> Thêm link shop</button>
						</form>
					</div>
				</div>
			</div>
		</section>

		<section class="list-subcribe">
			<div class="container">
				<div class="row">
					<div class="ds-title">Danh sách shop cần subcribe</div>
					<table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Link Shop</th>
                                <th>Số Subcribe</th>
                                <th>Tổng Subscribe</th>
                                <th>Subcribe</th>
                            </tr>
                            </thead>
                            <tbody>
                               	<tr>
									<td></td>
									<td><p><a href="">https://shopee.vn/tu_thuy</a></p></td>
									<td class="td-color"><p>10</p></td>
									<td class="td-color"><p>20</p></td>
									<td><button class="btn btn-warning" id="btn-b">Subcribe</button></td>
                               	</tr>
                            </tbody>
                        </table>
				</div>
			</div>
		</section>
	</main>
</body>
</html>