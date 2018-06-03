<?php require_once __DIR__. "/autoload/auto.php";
$id = intval(getInput('id'));
$sqlSP = "SELECT * FROM product WHERE id = $id";
$SP = $db -> fetchsql($sqlSP);
$rand = "SELECT * FROM product WHERE 1 ORDER BY rand() LIMIT 4";
$random = $db -> fetchsql($rand);

?>
<?php require_once __DIR__. "/layout/header.php"?>

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<?php foreach ($SP as $item):?>
				<!--  Product Details -->
				<div class="product product-details clearfix">
					<div class="col-md-6">
						<div id="product-main-view">
							<div class="product-view">
								<img src="/shop/productpic/<?php echo $item['link']?>" alt="">
							</div>
						</div>
						<div id="product-view">
							<div class="product-view">
								<img src="/shop/productpic/<?php echo $item['link']?>" alt="">
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="product-body">
							<h2 class="product-name"><?php echo $item['pdname']?></h2>
							<h3 class="product-price">Giá : <?php echo cost($item['price'])?></h3>
							
							<p><strong>Người bán : <?php echo $item['seller']?></strong></p>
							<p><strong>Số điện thoại liên hệ : <?php echo $item['phonesell']?></strong></p>

							<div class="product-btns">
								<div class="pull-left">
									<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
									<button class="main-btn icon-btn"><i class="fa fa-share-alt"></i></button>
								</div>
							</div>
						</div>
					</div>


				</div>
				<!-- /Product Details -->
			<?php endforeach?>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Khách hàng cũng quan tâm</h2>
					</div>
				</div>
				<!-- section title -->

				<?php foreach ($random as $item):?>
				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<button class="main-btn quick-view"><a href="product-page.php?id=<?php echo $item['id']?>"><i class="fa fa-search-plus"></i> Quick view</a></button>
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
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->


	<?php require_once __DIR__. "/layout/footer.php"?>