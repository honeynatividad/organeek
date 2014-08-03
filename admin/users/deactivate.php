<?php
session_start();
include_once '../class/class_admin.php';
include_once '../include/config.php';
$admin = new Admin();
$id=$_GET['id'];
if(!isset($_SESSION['username'])){
    header("Location: ../login.php");
}
$admin->adminDeactivate($id);
