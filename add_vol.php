<?php
if(isset($_POST['add_vol1']))
{
    include("ADMIN/inc/db.php");
    $vol_name = $_POST['volname'];
    $vol_gender = $_POST['volgender']; 
    $vol_phone = $_POST['volphone'];
    $vol_dob = $_POST['voldob'];
    $vol_address = $_POST['voladdress'];
    $vol_email = $_POST['volemail'];
   
    $fn=$_FILES['volpic']['name'];
    $buf=$_FILES['volpic']['tmp_name'];
    move_uploaded_file($buf,"ADMIN/images/volunteer_img/".$fn);


    $ins="INSERT INTO volunteer SET name='$vol_name', gender='$vol_gender', phone_no='$vol_phone', DOB='$vol_address', address='$vol_dob', email='$vol_email', vol_image='$fn'";
    if($con->query($ins))
    {
        header("location:index.php"); // Redirect the page to listcategory.php after succesful insertion
        // echo "inserted";
    }
    else
    {
        echo "failed to insert";
    }
}

?>