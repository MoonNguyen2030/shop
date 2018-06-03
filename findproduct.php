<?php require_once __DIR__. "/autoload/auto.php";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
	$search = addslashes($_GET['keywork']);
	if (empty($search)) {
		return'<script language="javascript">document.location.href="index.php";</script>"';
	} 
	else{
		$sqlS = "SELECT * FROM product WHERE pdname LIKE '%$search%'";
		$found = $db->fetchsql($sqlS);
	}
}
?>

<?php require_once __DIR__. "/layout/header.php"?>

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Kết quả tìm kiếm</h2>
					</div>
				</div>
				<?php if($found != NULL):?>
   				<?php foreach ($found as $item): ?>
				<!-- section title -->
				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
							<img src="/shop/productpic/<?php echo $item['link']?>" alt="" style="height: 250px">
						</div>
						<div class="product-body">
							<h3 class="product-price"><?php echo cost($item['price'])?></h3>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div>
							<h2 class="product-name"><a href="product-page.php?id=<?php echo $item['id']?>"><?php echo $item['pdname']?></a></h2>
							<h2 class="product-name"><a href="#">Người bán : <?php echo $item['seller']?></a></h2>
							<h2 class="product-name"><a href="#">Số điện thoại : <?php echo $item['phonesell']?></a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>

							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->
				<?php endforeach ?>
  <?php else:?>
    <h3 style="text-align: center"> Không tìm thấy sản phẩm </h3>
  <?php endif?>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
<?php require_once __DIR__. "/layout/footer.php"?>