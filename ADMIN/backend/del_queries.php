<?php session_start();
if(!isset($_SESSION['admin_name'])){
    header("location:../index.php");
}
?>
<?php
    include("../inc/db.php");
    $id=$_GET['msg_id'];
    $del="DELETE FROM messages WHERE sl_no='$id'";
    
    if($con->query($del))
    {
        header("location:../queries.php");
    }
    else
    {
        header("location:../pagenotfound.php");
    }
?>