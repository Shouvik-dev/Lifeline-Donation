<?php session_start();
if(!isset($_SESSION['admin_name'])){
    header("location:../index.php");
}
?>
<?php
    include("../inc/db.php");
    $id=$_GET['did'];
    $del="DELETE FROM category WHERE cid='$id'";
    
    if($con->query($del))
    {
        header("location:../listcategory.php");
    }
    else
    {
        header("location:../pagenotfound.php");
    }
?>