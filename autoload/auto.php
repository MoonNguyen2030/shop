<?php 
	session_start();

	require_once __DIR__. "/../libraries/data.php";

    require_once __DIR__. "/../libraries/function.php";

    $db = new Database;

    // chuyển hình vào file có đường dẫn tới uploads

    define("ROOT", $_SERVER['DOCUMENT_ROOT']."/shop/public/uploads/");

    $category = $db -> fetchAll("category");
    $product = $db -> fetchAll("product");

?>