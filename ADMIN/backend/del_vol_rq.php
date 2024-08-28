<!-- volunteer delete code -->
<?php session_start();
if(!isset($_SESSION['admin_name'])){
    header("location:../index.php");
}
?>
<?php
    include("../inc/db.php");
    $id=$_GET['vol_id'];
    $del="DELETE FROM volunteer WHERE sl_no='$id'";
    if($con->query($del)){
        header("location:../manage_volunteer_rq.php");
    }
    else{
        header("location:../pagenotfound.php");
    }
?>