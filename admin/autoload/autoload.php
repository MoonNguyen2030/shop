<?php 
	
	session_start();
	require_once __DIR__. "/../../libraries/data.php";
    require_once __DIR__. "/../../libraries/function.php";
    $db = new Database;

    if (! isset($_SESSION['admin_id'])) {
    	echo'<script language="javascript">location.href="/login/";</script>';
    }

    define("ROOT", $_SERVER['DOCUMENT_ROOT']);
?>