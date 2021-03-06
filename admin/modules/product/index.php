<?php 
$open = "product";
require_once __DIR__. "/../../autoload/autoload.php";
if (isset($_GET['page'])) {
	$p = $_GET['page'];
}else{
	$p = 1; 
}
$sql = "SELECT product.* , category.name as namecate FROM product LEFT JOIN category on category.id = product.cate_id";
$product = $db->fetchJone('product',$sql,$p,5,true);
if (isset($product['page'])) {
	$sotrang = $product['page'];
	unset($product['page']);
}
?>
<?php require_once __DIR__. "/../../layout/header.php"; ?>
<div class="row"> 
	<div class="col-lg-12">    
		<h1>Sản phẩm  <a href="add.php" class="btn btn-success pull-right"><i class="fa fa-plus"> Add</i></a></h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="/shop/admin/">Dashboard</a>
			</li>
			<li class="breadcrumb-item active">Danh sách sản phẩm</li>
		</ol>
		<div class="clearfix"></div>
		<?php require_once __DIR__. "/../../../partials/notification.php"; ?>
	</div>
</div>
<div class="row" >
	<div class="col-md-12">
		<div class="table-responsive">
			<div id="dataTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">	
				<div class="row">
					<div class="col-sm-12">
						<table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%; text-align: center;">
							<thead>
								<tr role="row">
									<th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px;">STT</th>
									<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 140px;">Name</th>
									<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 76px;">Category</th>
									<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 100px;">Hình ảnh</th>
									<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 30px;">Info</th>									
									<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 60px;">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $stt = 1;foreach ($product as $item):?>
								<tr role="row" class="odd">
									<td><?php echo $stt ?></td>
									<td><?php echo $item['pdname'] ?></td>
									<td><?php echo $item['namecate'] ?></td>
									<td>
										<img src="/shop/productpic/<?php echo $item['link'] ?>" width="80px" height="80px" >
									</td>
									<td>
										<ul>
											<li>Tên người bán : <?php echo $item['seller'] ?></li>
											<li>Số điện thoại : <?php echo $item['phonesell'] ?></li>
											<li>Giá : <?php echo $item['price'] ?></li>
										</ul>
									</td>
									<td>
										<a class="btn btn-xs btn-info" href="edit.php?id=<?php echo $item['id'] ?>"><i class="fa fa-pencil"></i></a>
										<a class="btn btn-xs btn-danger" href="delete.php?id=<?php echo $item['id'] ?>"><i class="fa fa-trash"></i></a>
									</td>
								</tr>
								<?php $stt++; endforeach ?>
							</tbody>
						</table>
						<div class="pull-right">
							<nav aria-label="Page navigation" class="clearfix">
								<ul class="pagination">
									<li>
										<a href="#" aria-label="Previous">
											<span aria-hidden="true">&laquo;</span>
										</a>
									</li>
									<?php for ($i=1; $i <= $sotrang ; $i++): ?>
										<?php 
										if(isset($_GET['page'])){
											$p = $_GET['page'];
										}else{
											$p = 1;
										}
										?>
										<li class="<?php echo ($i == $p) ? 'active' : '' ?>">
											<a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
										</li>
									<?php  endfor;?>
									<li>
										<a href="#" aria-label="Next">
											<span aria-hidden="true">&raquo;</span>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require_once __DIR__. "/../../layout/footer.php"; ?>