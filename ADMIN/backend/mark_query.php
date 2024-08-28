<?php session_start();
if (!isset($_SESSION['admin_name'])) {
    header("location:index.php");
}

include("../inc/db.php");
$id = $_GET['mid'];
$ins = "UPDATE messages SET read_status=1 WHERE sl_no = '$id'";
if ($con->query($ins)) {
    header("location:../queries.php"); // Redirect the page to listcategory.php after succesful insertion
}
?>