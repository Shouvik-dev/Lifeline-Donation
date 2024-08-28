<?php session_start();
if (!isset($_SESSION['admin_name'])) {
    header("location:../index.php");
}
?>
<?php
if (isset($_POST['save'])) {
    include("../inc/db.php");
    $ev_cat = $_POST['category'];
    $ev_name = $_POST['event_name'];
    $ev_date = $_POST['event_date'];
    $ev_venue = $_POST['event_venue'];
    $ev_details = $_POST['event_details'];
    $fn = $_FILES['event_image']['name'];
    $buf = $_FILES['event_image']['tmp_name'];
    move_uploaded_file($buf, "../images/event_img/" . $fn);
    // $ins = "INSERT INTO event (event_name, event_category, event_date, event_venue, event_image, event_details) VALUES ('$event_name', '$ev_cat', '$event_date', '$event_venue', '$fn', '$event_details')";
    $ins = "INSERT INTO event set event_name='$ev_name', event_date='$ev_date', event_venue='$ev_venue', event_image='$fn', event_details='$ev_details', event_category='$ev_cat'";
    if ($con->query($ins)) {
        header("location:../listevents.php"); // Redirect the page to listcategory.php after succesful insertion

    } else {
        header("location:../pagenotfound.php");
    }
}
?>