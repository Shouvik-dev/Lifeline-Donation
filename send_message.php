<?php
if(isset($_POST['sendmsg']))
{
    include("ADMIN/inc/db.php");
    $sender_name = $_POST['msgName'];
    $sender_email = $_POST['msgemail']; 
    $sender_phone = $_POST['msgPhone'];
    $sender_subject = $_POST['msgSubject'];
    $sender_message = $_POST['msglMessage'];
   



    $ins="INSERT INTO messages SET name='$sender_name', email='$sender_email', phone_no='$sender_phone', subject='$sender_subject', message='$sender_message'";
    if($con->query($ins))
    {
        header("location:contact.php"); // Redirect the page to listcategory.php after succesful insertion
        
    }
    else
    {
        echo "failed to insert";
    }
}

?>