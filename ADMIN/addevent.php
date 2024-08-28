<?php session_start();

if(!isset($_SESSION['admin_name'])){
    header("location:index.php");
}
?>

<?php
include("inc/db.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Event</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

    <style>
        .ck-editor__editable {
            min-height: 200px;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Start of Sidebar -->
        <?php include ("inc/sidebar.php"); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include ("inc/top.php"); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Add Event</h1>

                    <form action="backend/insevent.php" method="post" enctype="multipart/form-data">

                        <p>Category</p>
                        <p><select name="category" id="" >
                            <option value="">Select Category</option>
                            
                            <?php
                                $sql = "SELECT * FROM category ORDER BY catname";
                                $rs= $con->query($sql);

        while($row = $rs->fetch_assoc()){
                            ?>

                            
                            <option value="<?php echo $row['cid'] . '-' . $row['catname']; ?>">  
                                                        <?php echo $row['cid'] . " - " . $row['catname']; ?> 
                            </option>

      <?php } ?><!--While loop close -->
                        </select></p>

                        <p>Event Name</p>
                        <p><input type="text" name="event_name" class="form-control"></p>
                        <p>Event Date</p>
                        <p><input type="date" name="event_date" ></p>
                        <p>Event Venue</p>
                        <p><input type="Text" name="event_venue" class="form-control"></p>
                        <p>Event Image</p>
                        <p><input type="file" name="event_image"></p>
                        <p>Event Details</p>
                        <p>
                            <textarea name="event_details" id="editor"></textarea>                                  
                                    <script>
                                            ClassicEditor
                                                    .create( document.querySelector( '#editor' ) )
                                                    .then( editor => {
                                                            console.log( editor );
                                                    } )
                                                    .catch( error => {
                                                            console.error( error );
                                                    } );
                                    </script>
                </p>
                        <p><input type="submit" name="save" value="Add event" class="btn btn-success"></p>
                    </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include ("inc/footer.php"); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>