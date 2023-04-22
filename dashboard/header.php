<?PHP
session_start();
if (!isset($_SESSION['username'])) {
    header("location:login/loginform.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SSSP Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>

    <!-- Latest compiled Ajax Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- Latest popper JS -->
    <script src="cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <style>
        .required:after {
            content: " *";
            color: red;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <!-- <i class="fa fa-industry"></i> -->
                </div>
                <?php
                $utype=$_SESSION['utype'];
                if($utype=="admin")
                {
                ?>
                <div class="sidebar-brand-text mx-3">Admin</div>
                <?php
                }else if($utype=="sales"){
                ?>
                <div class="sidebar-brand-text mx-3">Sales Manager</div>
                <?php
                }
                ?>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="./user_select.php">
                <i class="fa fa-desktop" aria-hidden="true"></i>
                    <span>Order Page</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>CRM Master</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom CRM:</h6>
                        <a class="collapse-item" href="crm_customer_table.php">Cutomers</a>
                        <a class="collapse-item" href="crm_firm_table.php">Firms</a>
                        <a class="collapse-item" href="crm_brand_table.php">Brands</a>
                        <!-- <a class="collapse-item" href="#">Brands</a>
                        <a class="collapse-item" href="crm_order.php">Orders</a> -->
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <?php

            if ($_SESSION['utype'] == "admin") {

            ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-wrench"></i>
                        <span>Production</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Custom Production:</h6>
                            <a class="collapse-item" href="production_rubber_status.php">Rubber Status</a>
                            <a class="collapse-item" href="production_quality.php">Quality</a>
                            <a class="collapse-item" href="production_sub-quality.php">Sub Quality</a>
                            <a class="collapse-item" href="production_colors.php">Colors</a>
                            <a class="collapse-item" href="production_folding-type.php">Folding</a>
                            <a class="collapse-item" href="production_cutting.php">Cutting</a>
                            <a class="collapse-item" href="production_punching.php">Punching</a>
                            <a class="collapse-item" href="production_treatment.php">Treatment</a>
                            <a class="collapse-item" href="production_packing.php">Package</a>
                            <a class="collapse-item" href="production_delivery.php">Delivery</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                <a class="nav-link collapsed" href="add_sales.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Sales Manager</span>
                </a>
                <!-- <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom CRM:</h6>
                        <a class="collapse-item" href="crm_customer_table.php">Cutomers</a>
                        <a class="collapse-item" href="crm_firm_table.php">Firms</a>
                        <a class="collapse-item" href="crm_brand_table.php">Brands</a>
                       
                </div> -->
            </li>
            <?php
            }
            ?>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->

                    <h3 style="color:#318CE7"><b>SSSP</b></h3>

                    <h4 style="margin-left:5%;"><?php
                        echo "<b>Name:</b>".$_SESSION['nameuser']."&nbsp&nbsp(".$_SESSION['utype'].")";
                        ?></h4>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>
                        
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <div style="margin-right:80px">
                                <a href="login/logout.php">
                                    <i class="fas fa-sign-out-alt fa-lg fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                            <!-- Dropdown - User Information -->
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">