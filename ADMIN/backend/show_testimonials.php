<?php session_start();
if (!isset($_SESSION['admin_name'])) {
    header("location:index.php");
}
include("../inc/db.php");
$id = $_GET['t_id'];
$ins = "UPDATE testimonials SET tview=1 WHERE sl_no = '$id'";
if ($con->query($ins)) {
    header("location:../list_testimonials.php"); // Redirect the page to listcategory.php after succesful insertion
}
?>