<?php session_start();
if (!isset($_SESSION['admin_name'])) {
    header("location:../index.php");
}
?>
<?php
if (isset($_POST['save'])) {
    include("../inc/db.php");
   
    $T_name = $_POST['Tname'];
    $T_designation = $_POST['Tdesignation'];
    $T_location = $_POST['Tlocation'];
    $T_message = $_POST['Tmessage'];
    $fn = $_FILES['Timage']['name'];
    $buf = $_FILES['Timage']['tmp_name'];
    move_uploaded_file($buf, "../images/testimonials_img/" . $fn);
    $ins = "INSERT INTO testimonials SET tname='$T_name', tlocation='$T_location', tdesignation='$T_designation', tmessage ='$T_message', timage='$fn'";
    if ($con->query($ins)) {
        header("location:../list_testimonials.php"); // Redirect the page to listcategory.php after succesful insertion

    } else {
        header("location:../pagenotfound.php");
    }
}
?>