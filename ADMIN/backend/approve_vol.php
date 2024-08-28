<?php session_start();
if(!isset($_SESSION['admin_name'])){
    header("location:../index.php");
}
?>
<?php
    include("../inc/db.php");
    $id=$_GET['aid'];
    $ins="INSERT INTO all_volunteers (sl_no, vname, vgender, vphone_no, vDOB, vaddress, vemail, vimage) SELECT sl_no, name, gender, phone_no, DOB, address, email, vol_image FROM volunteer WHERE sl_no = '$id'";
    
    if($con->query($ins)){

        $ins1="UPDATE volunteer SET status='1' WHERE sl_no = '$id'";
        if($con->query($ins1)){
         header("location:../manage_volunteer_rq.php"); // Redirect the page to listcategory.php after succesful insertion
        }

    }
?>