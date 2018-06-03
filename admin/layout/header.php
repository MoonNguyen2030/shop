<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Secondhand - Moon Nguyễn</title>
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link href="/shop/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/shop/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/shop/admin/css/sb-admin.css" rel="stylesheet">
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="index.php">Welcome back <?php echo $_SESSION['admin_name'] ?> ^.^</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <li class="<?php echo isset($open) && $open == 'category' ? 'active' : '' ?>" data-toggle="tooltip" data-placement="right" title="Danh mục">
                    <a class="nav-link" href="/shop/admin/modules/category/">
                        <i class="fa fa-list"></i>
                        <span class="nav-link-text">&nbsp;Danh mục</span>
                    </a>
                </li>
                <li class="<?php echo isset($open) && $open == 'product' ? 'active' : '' ?>" data-toggle="tooltip" data-placement="right" title="Sản phẩm">
                    <a class="nav-link" href="/shop/admin/modules/product/">
                        <i class="fa fa-database"></i>
                        <span class="nav-link-text">&nbsp;Sản phẩm</span>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" id="sidenavToggler">
                        <i class="fa fa-fw fa-angle-left"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle mr-lg-2"  href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Xin chào <?php echo $_SESSION['admin_name'] ?></a>
                  <ul class="dropdown-menu" style="text-align: center; text-color:red;">
                    <li>
                        <a href="#"><i class="fa fa-fw fa-user"></i>Profile</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-envelope"></i>Inbox</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-gear"></i>Setting</a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li>
                        <a href="/shop/"><i class="fa fa-fw fa-home"></i>Home</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<div class="content-wrapper">
    <div class="container-fluid">