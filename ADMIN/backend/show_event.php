<?php session_start();
if(!isset($_SESSION['admin_name'])){
    header("location:../index.php");
}
?>
<?php
    include("../inc/db.php");
    $id=$_GET['ev_id'];
    $ins="UPDATE event SET hstatus='1' WHERE event_id = '$id'";
    if($con->query($ins)){
        header("location:../listevents.php"); // Redirect the page to listcategory.php after succesful insertion
    }
?>