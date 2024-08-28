<?php session_start();
if(!isset($_SESSION['admin_name'])){
    header("location:../index.php");
}
?>

<?php
    include("../inc/db.php");
    $id=$_GET['ev_id'];
    $del="DELETE FROM event WHERE event_id='$id'";
    
    if($con->query($del))
    {
        header("location:../listevents.php");
    }
    else
    {
        header("location:../pagenotfound.php");
    }
?>