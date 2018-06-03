<?php require_once __DIR__. "/autoload/autoload.php";
$category = $db->fetchAll("category");
?>
<?php require_once __DIR__. "/layout/header.php"; ?>
<div class="row"> 
    <div class="col-lg-12">    
        <h1><?php echo $_SESSION['admin_name'] ?></h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/shop/admin/">Dashboard</a>
            </li>
        </ol>
    </div>
</div>    <canvas id="myChart" width="200" height="80"></canvas>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>


<?php require_once __DIR__. "/layout/footer.php"; ?>