<?php 
$open = "product";
require_once __DIR__. "/../../autoload/autoload.php";
$category = $db->fetchAll("category");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = 
    [
        "pdname" => postInput('name'),
        "cate_id" => postInput('cate_id'),
        "price" => postInput('price'),
        "seller" => postInput('seller'),
        "phonesell" => postInput('phoneseller')
        
    ];
    $error = [];
    if (postInput('name') == '') {
        $error['name'] = " Mời bạn điền tên sản phẩm";
    }
    if (postInput('cate_id') == '') {
        $error['cate_id'] = " Mời bạn chọn tên danh mục";
    }
    if (postInput('price') == '') {
        $error['price'] = " Mời bạn nhập giá sản phẩm";
    }
    if (postInput('seller') == '') {
        $error['seller'] = " Mời bạn điền tên người bán";
    }
    if (postInput('phoneseller') == '') {
        $error['phoneseller'] = " Mời bạn nhập số điện thoại của người bán";
    }
    if ( ! isset($_FILES['link'])) {
        $error['link'] = "Mời bạn chọn hình ảnh";
    }
    if (empty($error)) {
        if (isset($_FILES['link'])) {
            $file_name = $_FILES['link']['name'];
            $file_tmp = $_FILES['link']['tmp_name'];
            $file_type = $_FILES['link']['type'];
            $file_erro = $_FILES['link']['error'];
            if ($file_erro == 0) {
                $part = ROOT ."/shop/productpic/";
                $data['link'] = $file_name;
            }
        }       
        $id_insert = $db->insert("product",$data);
        if ($id_insert) {
            move_uploaded_file($file_tmp,$part.$file_name);
            $_SESSION['success'] = " Thêm mới thành công";
            redirectAdmin("product");
        }else{
            $_SESSION['error'] = " Thêm mới thất bại";
            
        }
    }

}
?>
<?php require_once __DIR__. "/../../layout/header.php"; ?>              
<div class="row"> 
    <div class="col-lg-12">    
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/admin/">Dashboard</a>
            </li>
            <li class="breadcrumb-item active"><a href="index.php">Sản phẩm</a></li>
            <li class="breadcrumb-item">Thêm sản phẩm mới</a></li>
        </ol>
        <div class="clearfix"></div>
        <?php require_once __DIR__. "/../../../partials/notification.php"; ?>
    </div>
</div>
<div class="row" style="padding-left: 25%">
    <div class="col-lg-12">
        <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Danh mục sản phẩm</label>
                <div class="col-sm-6">
                    <select class="form-control col-md-12" name="cate_id">
                        <option value=""> - Mời bạn chọn danh mục sản phẩm</option>
                        <?php foreach ($category as $item): ?>
                            <option value="<?php echo $item['id'] ?>"><?php echo $item['name'] ?></option>
                        <?php endforeach ?>
                    </select>
                    <?php if (isset($error['cate_id'])):?>
                        <p class="text-danger"> <?php echo $error['cate_id']?></p>
                    <?php endif ?>                            
                </div>
            </div>                
        <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Tên sản phẩm</label>
                <div class="col-sm-6">
                   <input type="text" class="form-control" id="inputEmail3" placeholder="" name="name">
                   <?php if (isset($error['name'])):?>
                    <p class="text-danger"> <?php echo $error['name']?></p>
                <?php endif ?>                            
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-3 control-label">Giá sản phẩm</label>
            <div class="col-sm-6">
                <input type="number" class="form-control" id="inputEmail3" placeholder="" name="price">
                <?php if (isset($error['price'])):?>
                    <p class="text-danger"> <?php echo $error['price']?></p>
                <?php endif ?>                            
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-3 control-label">Người bán</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="inputEmail3" placeholder="" name="seller">
                <?php if (isset($error['seller'])):?>
                    <p class="text-danger"> <?php echo $error['seller']?></p>
                <?php endif ?>                            
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-3 control-label">Số điện thoại</label>
            <div class="col-sm-6">
                <input type="number" class="form-control" id="inputEmail3" placeholder="" name="phoneseller">
                <?php if (isset($error['phoneseller'])):?>
                    <p class="text-danger"> <?php echo $error['phoneseller']?></p>
                <?php endif ?>                            
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-3 control-label">Hình ảnh</label>
            <div class="col-sm-5">
                <input type="file" class="form-control" id="inputEmail3" name="link">
                <?php if (isset($error['link'])):?>
                    <p class="text-danger"> <?php echo $error['link']?></p>
                <?php endif ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10 pull-right">
                <button type="submit" class="btn btn-primary"> Thực hiện </button>
            </div>
        </div>
    </form>
</div>
</div>
<?php require_once __DIR__. "/../../layout/footer.php"; ?>