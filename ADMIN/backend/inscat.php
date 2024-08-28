<?php session_start();
if (!isset($_SESSION['admin_name'])) {
    header("location:../index.php");
}
?>
<?php
include("../inc/db.php");
if (isset($_POST['save'])) {
    $c = $con->real_escape_string($_POST['catname']);
    // echo $c;
    $ins = "INSERT INTO category SET catname='$c'";
    if ($con->query($ins)) {
        header("location:../listcategory.php"); // Redirect the page to listcategory.php after succesful insertion
    }

} else {
    header("location:../pagenotfound.php");
}
?>