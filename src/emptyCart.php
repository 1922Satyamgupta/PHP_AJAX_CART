<?php
session_start();
$_SESSION['cartArray']=array();
echo json_encode($_SESSION['cartArray']);
?>