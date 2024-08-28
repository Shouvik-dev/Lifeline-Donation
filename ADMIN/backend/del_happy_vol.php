<?php session_start();

if(!isset($_SESSION['admin_name'])){
    header("location:index.php");
}

    include("../inc/db.php");

    $id=$_GET['vno'];
    $ins="UPDATE all_volunteers SET hstatus=0 WHERE v_no = '$id'";
    if($con->query($ins))
    {
        header("location:../list_volunteer.php"); // Redirect the page to listcategory.php after succesful insertion
    }

?>