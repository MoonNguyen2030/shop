<?php require_once __DIR__. "/autoload/auto.php";
$id = intval(getInput('id'));
$sqlCate = "SELECT * FROM category WHERE id = $id";
$NameCate = $db -> fetchsql($sqlCate);
$data = [];
$sqlPD = "SELECT * FROM product WHERE cate_id = $id";
$PD = $db -> fetchsql($sqlPD);
?>

<?php require_once __DIR__. "/layout/header.php"?>
	<!-- section -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<?php foreach ($NameCate as $item):?>
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title"><?php echo $item['name'] ?></h2>
					</div>
				</div>
				
				<!-- section title -->
				<?php foreach ($PD as $item):?>
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

				<!-- /Product Single -->
			</div>
			<!-- /row -->
		<?php endforeach ?>
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
<?php require_once __DIR__. "/layout/footer.php"?>