<!-- volunteer delete code -->
<?php session_start();
if(!isset($_SESSION['admin_name'])){
    header("location:../index.php");
}
?>
<?php
    include("../inc/db.php");
    $id=$_GET['vol_id'];
    $del="DELETE FROM all_volunteers WHERE  sl_no = '$id'";
    if($con->query($del)){

        $upd="UPDATE volunteer SET status='0' WHERE sl_no = '$id'";
        if($con->query($upd)){
            header("location:../list_volunteer.php");
        }
    }
    else{
        header("location:../pagenotfound.php");
    }
?>