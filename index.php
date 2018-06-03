<?php require_once __DIR__. "/autoload/auto.php";
$sqlCate = "SELECT name, id FROM category WHERE 1 ";
$Home = $db->fetchsql($sqlCate);
$data=[];
foreach($Home as $item){
  $cateId = intval($item['id']);
  $sql = "SELECT * FROM product WHERE cate_id = $cateId LIMIT 4";
  $ProductHome = $db->fetchsql($sql);
  $data[$item['name']] = $ProductHome;
}

?>

<?php require_once __DIR__. "/layout/header.php"?>
	<!-- section -->

<!-- HOME -->
	<div id="home">
		<!-- container -->
		<div class="container">
			<!-- home wrap -->
			<div class="home-wrap">
				<!-- home slick -->
				<div id="home-slick">
					<!-- banner -->
					<div class="banner banner-1">
						<img src="./img/banner01.jpg" alt="">
						<div class="banner-caption text-center">
							<h1>Bags sale</h1>
							<h3 class="white-color font-weak">Up to 50% Discount</h3>
							<button class="primary-btn">Shop Now</button>
						</div>
					</div>
					<!-- /banner -->

					<!-- banner -->
					<div class="banner banner-1">
						<img src="./img/banner02.jpg" alt="">
						<div class="banner-caption">
							<h1 class="primary-color">HOT DEAL<br><span class="white-color font-weak">Up to 50% OFF</span></h1>
							<button class="primary-btn">Shop Now</button>
						</div>
					</div>
					<!-- /banner -->

					<!-- banner -->
					<div class="banner banner-1">
						<img src="./img/banner03.jpg" alt="">
						<div class="banner-caption">
							<h1 class="white-color">New Product <span>Collection</span></h1>
							<button class="primary-btn">Shop Now</button>
						</div>
					</div>
					<!-- /banner -->
				</div>
				<!-- /home slick -->
			</div>
			<!-- /home wrap -->
		</div>
		<!-- /container -->
	</div>
	<!-- /HOME -->
	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<?php foreach ($data as $key => $value):?>
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title"><?php echo $key ?></h2>
					</div>
				</div>
				
				<!-- section title -->
				<?php foreach ($value as $item):?>
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

				<!-- /Product Single -->
			</div>
			<!-- /row -->
		<?php endforeach ?>
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
<?php require_once __DIR__. "/layout/footer.php"?>