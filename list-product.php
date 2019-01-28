
	<?php $title="Danh sách sản phẩm";  require_once('template-parts/header.php'); ?>
	<main class="main-container">
		<section class="portal-panel">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-12">
						<div class="tab-panel">
							<ul>
								<li><a href="">Tất cả</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="main-list">
			<div class="container">
				<div class="row">
					<div class="prodcut-list-header">
						<div class="row">
							<div class="col-xs-12 col-md-10">

							</div>
							<div class="col-xs-12 col-md-2 list-right">
								<span>
									<div class="button-add">
										<a href="/"><i class="fa fa-plus"></i> Thêm sản phẩm mới</a>
									</div>
								</span>
							</div>
						</div>
					</div><!--list-product-header-->
					
					<div class="product-table">
						<div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Stt</th>
                                <th style="width:200px;">Tên sản phẩm</th>
                                <th style="width:300px;">Link Sản phẩm</th>
                                <th>Số like ban đầu</th>
                                <th>Tổng số like</th>
                                <th>Sửa thông tin</th>
                            </tr>
                            </thead>
                            <tbody>
                               <tr>
                               		<td></td>
                               		<td><a href="">MIẾNG XỐP DÁN TƯỜNG GIẢ GẠCH 70 * 77cm GIÁ RẺ</a></td>
                               		<td><a href="">https://shopee.vn/-CH%E1%BB%88-C%C3%92N-200-CHI%E1%BA%BEC-%C3%81o-len-mu%E1%BB%91i-ti%C3%AAu-cho-b%C3%A9-Freeship-99K--i.116677350.1847697401</a></td>
                               		<td class="td-color">100</td>
                               		<td class="td-color">300</td>
                               		<td><button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> Sửa</button></td>
                               </tr>
                            </tbody>
                        </table>
					</div>
				</div>
			</div>	
		</section>
	</main>
<?php require_once('template-parts/footer.php'); ?>