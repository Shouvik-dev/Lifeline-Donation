<?php session_start();

if(!isset($_SESSION['admin_name'])){
    header("location:index.php");
}

    include("../inc/db.php");

    $id=$_GET['aid'];
    $ins="DELETE FROM all_volunteers WHERE  sl_no = '$id'";
    if($con->query($ins))
    {
        $ins1="UPDATE volunteer SET status='0' WHERE sl_no = '$id'";
        if($con->query($ins1))
        {
            header("location:../manage_volunteer_rq.php"); // Redirect the page to listcategory.php after succesful insertion
        }
    }

?>