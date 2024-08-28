<?php session_start();

if (!isset($_SESSION['admin_name'])) {
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

    <title>LIFELINE DONATION</title>

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
        <?php include("inc/sidebar.php"); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include("inc/top.php"); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>



                    <div _ngcontent-kvl-c80="" class="card mb-4 h-100">
                        <div _ngcontent-kvl-c217="" class="card-body h-100 d-flex flex-column justify-content-center py-5 py-xl-4">
                            <div _ngcontent-kvl-c217="" class="row gx-4 align-items-center">
                                <div _ngcontent-kvl-c217="" class="col-xl-8 col-xxl-12">
                                    <div _ngcontent-kvl-c217="" class="text-center text-xl-start text-xxl-center px-4 mb-4 mb-xl-0 mb-xxl-4">
                                        <h1 _ngcontent-kvl-c217="" class="text-primary">LIFELINE DONATION</h1>
                                        <p _ngcontent-kvl-c217="" class="text-gray-700 mb-0">Browse our fully designed UI toolkit! Browse our prebuilt app pages, components, and utilites, and be sure to look at our full documentation!</p>
                                    </div>
                                </div>
                                <div _ngcontent-kvl-c217="" class="col-xl-4 col-xxl-12 text-center"><img _ngcontent-kvl-c217="" src=".\images\LOGO\Logo2.png" class="img-fluid" style="max-width: 25rem;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">

                                                <!-- Counter - Messages -->
                                                <?php                                 
                                                        $sql = "SELECT * FROM category";
                                                        $rs= $con->query($sql);
                                                        $cnt = $rs->num_rows;                                
                                                ?>
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Total Categories</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php echo $cnt; ?> </div>
                                            
                                        </div>
                                        <div class="col mr-2">
                                                <!-- Counter - Messages -->
                                                <?php                                 
                                                            $sql = "SELECT * FROM event";
                                                            $rs= $con->query($sql);
                                                            $cnt = $rs->num_rows;                                
                                                ?>
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Total Events</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $cnt; ?></div>
                                            
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                                <!-- Counter - Messages -->
                                                <?php                                 
                                                            $sql = "SELECT * FROM all_volunteers";
                                                            $rs= $con->query($sql);
                                                            $cnt = $rs->num_rows;                                
                                                    ?>
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> Total volunteers</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $cnt; ?></div>
                                        </div>
                                        <div class="col mr-2">
                                                <!-- Counter - Messages -->
                                                <?php                                 
                                                        $sql = "SELECT * FROM volunteer WHERE status=0";
                                                        $rs= $con->query($sql);
                                                        $cnt = $rs->num_rows;                                
                                                ?>
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1"> Volunteer request</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $cnt; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"> Tasks </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">70%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 70%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                                <!-- Counter - Messages -->
                                                <?php                                 
                                                        $sql = "SELECT * FROM messages";
                                                        $rs= $con->query($sql);
                                                        $cnt = $rs->num_rows;                                
                                                ?>
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"> Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $cnt; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include("inc/footer.php"); ?>
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