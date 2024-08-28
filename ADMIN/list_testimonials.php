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

    <title>Testimonials</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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
                    <h1 class="h3 mb-4 text-gray-800">Testimonials</h1>


                    <table class="table">
                    <thead>
                        <tr>
                            <th>Serial No.</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Location</th>
                            <th>Message</th>
                            <th>Image</th>
                            <th>Show</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <tbody>
                                <?php
                                $sql = "SELECT * FROM testimonials";
                                $rs= $con->query($sql);

                                while($row = $rs->fetch_assoc()){

                                ?>
                        <tr>
                             <td><?php echo $row['sl_no']; ?></td>  <!--Fetch list data from database -->
                             <td><?php echo $row['tname']; ?></td>
                             <td><?php echo $row['tdesignation']; ?></td>
                             <td><?php echo $row['tlocation']; ?></td>
                             <td><?php echo $row['tmessage']; ?></td>
                             <td><img src="./images/testimonials_img/<?php echo $row['timage']; ?>" width=auto height="60px"></td>
                             
                             <td>
                             <?php if($row['tview']==0){ ?>
                                <a class ="btn btn-warning" href="./backend/show_testimonials.php?t_id=<?php echo $row['sl_no']; ?>"><i class="bi bi-check"></i> Show</a>
                            <?php } else { ?>
                                <a class ="btn btn-success" href="./backend/hide_testinomials.php?t_id=<?php echo $row['sl_no']; ?>"><i class="bi bi-person-check-fill"></i></i> Showing</a>
                                <?php } ?>
                            </td>
                             <td><a onclick="return confirm('Are you sure?')" class ="btn btn-danger" href="./backend/del_testimonials.php?t_id=<?php echo $row['sl_no']; ?>"><i class="fas fa-trash"></i>  Delete</a></td>
                        </tr>


                                                        <?php } ?><!--While loop close -->

                    </tbody>
                </table>

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