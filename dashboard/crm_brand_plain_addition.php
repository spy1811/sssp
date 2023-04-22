<?php

include('config.php');
include('header.php');

?>
<?php

error_reporting(0);

if (isset($_POST['submit'])) {
 
    if ($_POST['branding'] == "Plain") {
        $cname = $_POST['customernamert'];
        $_SESSION['customer_id']=$cname;

        $firm = $_POST['firm'];

        $branding = $_POST['branding'];
        $_SESSION['branding']=$branding;

        $quality = $_POST['quality'];
        $sub_quality = $_POST['sub_quality'];
        $width = $_POST['width'];
        $height = $_POST['height'];
        $gauge = $_POST['gauge'];
        $folding_type = $_POST['folding_type'];
        $folding_value = $_POST['folding_value'];
        $cutting = $_POST['cutting'];
        $punching = $_POST['punching'];
        $treatment = $_POST['treatment'];
        $package = $_POST['package'];
        $delivery = $_POST['delivery'];
        $sql = "insert into branding (customer_name, firm, branding, quality, sub_quality, width, height, gauge, folding_type, folding_value, cutting, punching, treatment, package, delivery ) values('$cname', '$firm', '$branding', '$quality', '$sub_quality', '$width', '$height', '$gauge', '$folding_type', '$folding_value', '$cutting', '$punching', '$treatment', '$package', '$delivery')";
        // echo $sql;
        // exit();
        $run = mysqli_query($conn, $sql);
        if ($run) {
            
            echo "<script>window.location='crm_order_form.php';</script>";
            
        } else {
            echo "error" . $conn;
        }
    } else if ($_POST['branding'] == "Printing") {
        $cname = $_POST['customernamert'];
        $_SESSION['customer_id']=$cname;

        $firm = $_POST['firm'];

        $branding = $_POST['branding'];
        $_SESSION['branding']=$branding;

        $quality = $_POST['pquality'];
        $sub_quality = $_POST['psub_quality'];
        $width = $_POST['pwidth'];
        $height = $_POST['pheight'];
        $gauge = $_POST['pgauge'];
        $folding_type = $_POST['pfolding_type'];
        $folding_value = $_POST['pfolding_value'];
        $cutting = $_POST['pcutting'];
        $punching = $_POST['ppunching'];
        $treatment = $_POST['ptreatment'];
        $package = $_POST['ppackage'];
        $delivery = $_POST['pdelivery'];


        $bname = $_POST['brand_name'];
        $rubber_status = $_POST['rubber'];
        $printing_type = $_POST['printing'];
        $color = $_POST['colors'];

        $image_name = $_FILES['image']['name'];
        $image_size = $_FILES['image']['size'];
        $image_type = $_FILES['image']['type'];
        $image_temp_loc = $_FILES['image']['tmp_name'];
        $image_store = 'image/' . $image_name;

        $extension = substr($image_name, strlen($image_name) - 4, strlen($image_name));
        $allowedFileType = array('.jpg', '.png', 'jpeg');

        if (!in_array($extension, $allowedFileType)) {
            $imageErr = "invalid Image format!  Only jpg, png, jpeg format allowed";
        
        } else {
            if (move_uploaded_file($image_temp_loc, $image_store)) {
                /* printed data entry quary */
                $sql = "insert into branding (customer_name, firm, branding, brand_name, image, rubber_status, quality, sub_quality, width, height, gauge, printing_type, color, folding_type, folding_value, cutting, punching, treatment, package, delivery) values('$cname', '$firm', '$branding', '$bname', '$image_name', '$rubber_status', '$quality', '$sub_quality', '$width', '$height', '$gauge', '$printing_type', '$color', '$folding_type', '$folding_value', '$cutting', '$punching', '$treatment', '$package', '$delivery')";
                // echo $sql;
                // exit();
                $run = mysqli_query($conn, $sql);
                if ($run) {
                    echo "<script>window.location='crm_order_form.php';</script>";
                } else {

                    echo "error" . mysqli_error($conn);
                }
                
            }
        }
    }
    else if ($_POST['branding'] == "BOPP") {
        $cname = $_POST['customernamert'];
        $_SESSION['customer_id']=$cname;

        $firm = $_POST['firm'];

        $branding = $_POST['branding'];
        $_SESSION['branding']=$branding;

        $quality = $_POST['bquality'];
        $sub_quality = $_POST['bsub_quality'];
        $width = $_POST['bwidth'];
        $height = $_POST['bheight'];
        $gauge = $_POST['bgauge'];
        $folding_type = $_POST['bfolding_type'];
        $folding_value = $_POST['bfolding_value'];
        $cutting = $_POST['bcutting'];
        $punching = $_POST['bpunching'];
        $treatment = $_POST['btreatment'];
        $package = $_POST['bpackage'];
        $delivery = $_POST['bdelivery'];


        $bname = $_POST['bbrand_name'];
        $rubber_status = $_POST['brubber'];
        $printing_type = $_POST['bprinting'];
        $color = $_POST['bcolors'];

        $image_name = $_FILES['bimage']['name'];
        $image_size = $_FILES['bimage']['size'];
        $image_type = $_FILES['bimage']['type'];
        $image_temp_loc = $_FILES['bimage']['tmp_name'];
        $image_store = 'image/' . $image_name;

        $extension = substr($image_name, strlen($image_name) - 4, strlen($image_name));
        $allowedFileType = array('.jpg', '.png', 'jpeg');

        if (!in_array($extension, $allowedFileType)) {
            $imageErr = "invalid Image format!  Only jpg, png, jpeg format allowed";
        
        } else {
            if (move_uploaded_file($image_temp_loc, $image_store)) {
                /* printed data entry quary */
                $sql = "insert into branding (customer_name, firm, branding, brand_name, image, rubber_status, quality, sub_quality, width, height, gauge, printing_type, color, folding_type, folding_value, cutting, punching, treatment, package, delivery) values('$cname', '$firm', '$branding', '$bname', '$image_name', '$rubber_status', '$quality', '$sub_quality', '$width', '$height', '$gauge', '$printing_type', '$color', '$folding_type', '$folding_value', '$cutting', '$punching', '$treatment', '$package', '$delivery')";
                // echo $sql;
                // exit();
                $run = mysqli_query($conn, $sql);
                if ($run) {
                    echo "<script>window.location='crm_order_form.php';</script>";
                } else {

                    echo "error" . mysqli_error($conn);
                }
                
            }
        }
    }
    else if ($_POST['branding'] == "Mulching") {
        $cname = $_POST['customernamert'];
        $_SESSION['customer_id']=$cname;

        $firm = $_POST['firm'];

        $branding = $_POST['branding'];
        $_SESSION['branding']=$branding;

        $quality = $_POST['mquality'];
        $sub_quality = $_POST['msub_quality'];
        $width = $_POST['mwidth'];
        $height = $_POST['mheight'];
        $gauge = $_POST['mgauge'];
        $folding_type = $_POST['mfolding_type'];
        $folding_value = $_POST['mfolding_value'];
        $cutting = $_POST['mcutting'];
        $punching = $_POST['mpunching'];
        $treatment = $_POST['mtreatment'];
        $package = $_POST['mpackage'];
        $delivery = $_POST['mdelivery'];


        $bname = $_POST['mbrand_name'];
        $rubber_status = $_POST['mrubber'];
        $printing_type = $_POST['mprinting'];
        $color = $_POST['mcolors'];

        $image_name = $_FILES['mimage']['name'];
        $image_size = $_FILES['mimage']['size'];
        $image_type = $_FILES['mimage']['type'];
        $image_temp_loc = $_FILES['mimage']['tmp_name'];
        $image_store = 'image/' . $image_name;

        $extension = substr($image_name, strlen($image_name) - 4, strlen($image_name));
        $allowedFileType = array('.jpg', '.png', 'jpeg');

        if (!in_array($extension, $allowedFileType)) {
            $imageErr = "invalid Image format!  Only jpg, png, jpeg format allowed";
        
        } else {
            if (move_uploaded_file($image_temp_loc, $image_store)) {
                /* printed data entry quary */
                $sql = "insert into branding (customer_name, firm, branding, brand_name, image, rubber_status, quality, sub_quality, width, height, gauge, printing_type, color, folding_type, folding_value, cutting, punching, treatment, package, delivery) values('$cname', '$firm', '$branding', '$bname', '$image_name', '$rubber_status', '$quality', '$sub_quality', '$width', '$height', '$gauge', '$printing_type', '$color', '$folding_type', '$folding_value', '$cutting', '$punching', '$treatment', '$package', '$delivery')";
                // echo $sql;
                // exit();
                $run = mysqli_query($conn, $sql);
                if ($run) {
                    echo "<script>window.location='crm_order_form.php';</script>";
                } else {

                    echo "error" . mysqli_error($conn);
                }
                
            }
        }
    }
    else if ($_POST['branding'] == "Woven") {
        $cname = $_POST['customernamert'];
        $_SESSION['customer_id']=$cname;

        $firm = $_POST['firm'];

        $branding = $_POST['branding'];
        $_SESSION['branding']=$branding;
        
        $quality = $_POST['wquality'];
        $sub_quality = $_POST['wsub_quality'];
        $width = $_POST['wwidth'];
        $height = $_POST['wheight'];
        $gauge = $_POST['wgauge'];
        $folding_type = $_POST['wfolding_type'];
        $folding_value = $_POST['wfolding_value'];
        $cutting = $_POST['wcutting'];
        $punching = $_POST['wpunching'];
        $treatment = $_POST['wtreatment'];
        $package = $_POST['wpackage'];
        $delivery = $_POST['wdelivery'];


        $bname = $_POST['wbrand_name'];
        $rubber_status = $_POST['wrubber'];
        $printing_type = $_POST['wprinting'];
        $color = $_POST['wcolors'];

        $image_name = $_FILES['wimage']['name'];
        $image_size = $_FILES['wimage']['size'];
        $image_type = $_FILES['wimage']['type'];
        $image_temp_loc = $_FILES['wimage']['tmp_name'];
        $image_store = 'image/' . $image_name;

        $extension = substr($image_name, strlen($image_name) - 4, strlen($image_name));
        $allowedFileType = array('.jpg', '.png', 'jpeg');

        if (!in_array($extension, $allowedFileType)) {
            $imageErr = "invalid Image format!  Only jpg, png, jpeg format allowed";
        
        } else {
            if (move_uploaded_file($image_temp_loc, $image_store)) {
                /* printed data entry quary */
                $sql = "insert into branding (customer_name, firm, branding, brand_name, image, rubber_status, quality, sub_quality, width, height, gauge, printing_type, color, folding_type, folding_value, cutting, punching, treatment, package, delivery) values('$cname', '$firm', '$branding', '$bname', '$image_name', '$rubber_status', '$quality', '$sub_quality', '$width', '$height', '$gauge', '$printing_type', '$color', '$folding_type', '$folding_value', '$cutting', '$punching', '$treatment', '$package', '$delivery')";
                // echo $sql;
                // exit();
                $run = mysqli_query($conn, $sql);
                if ($run) {
                    echo "<script>window.location='crm_order_form.php';</script>";
                } else {

                    echo "error" . mysqli_error($conn);
                }
                
            }
        }
    }

}

?>

<div class="col-12 grid-margin mx-auto ">
    <div class="card">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">Branding Type</h3>
        </div>
        <br>
        <div class="card-body">
            <form class="form-sample" method="post" enctype="multipart/form-data" onSubmit="return myFun()">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label font-weight-bold required">Customer Name </label>
                            <div class="col-sm-8">
                            <?php
                             
                                if (!isset($_SESSION['customer_id'])){
                                              
                                $query = "select * from customer";
                                $res = mysqli_query($conn, $query);

                                ?>
                                <select name="customernamert" id="custname" class="form-control customername" onchange="myfirm(this.value)">
                                    <option>Select Customer</option>
                                    <?php

                                    while ($rw = mysqli_fetch_row($res)) {
                                       
                                        echo "<option value='$rw[0]'>$rw[1]</option>";
                                    }

                                    ?>
                                </select>
                               <?php
                                }
                                else{
                                    $id = $_SESSION['customer_id'];
                                    $sql="select id,name from customer where id=$id";
                                    $res = mysqli_query($conn, $sql);
                                    $rt=mysqli_fetch_row($res);
                                    $n=$rt[1];
                                    $idd=$rt[0];
                                    ?>
                                    <input type="text" value="<?php echo  $n; ?>" class="form-control" id="custname" readonly >
                                    <input type="hidden" value="<?php echo $idd;?>"name="customernamert" id="custname">
                               <?php }
                               ?>
                                <span style="color:red" id="customer_name_error" > </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label font-weight-bold required">Firm </label>
                            <div class="col-sm-9">
                                <?php
                                if(!isset($_SESSION['customer_id']))
                                {
                                ?>
                                <select class="form-control" name="firm" id="firm" onchange="mybrand(this.value)">
                                    <option value="">Select Firm</option>
                                    
                                </select>
                                <?php
                                }else{
                                ?>
                                <select class="form-control" name="firm" id="firm">
                                    <option value="">Select Firm</option>
                                    <?php
                                    $id = $_SESSION['customer_id'];
                                    $query = "select * from firm where cid=$id";
                                    $res = mysqli_query($conn, $query);
                                    while ($rw = mysqli_fetch_array($res)) {
                                    ?>
                                        <option value="<?php echo $rw['id']; ?> "><?php echo $rw['firm_name']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <?php
                                }
                                ?>
                                <span style="color:red" id="firm_name_error"> </span>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label font-weight-bold">Branding</label>
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input branding" name="branding" id="branding" value="Plain" checked> Plain </label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input branding" name="branding" id="branding" value="Printing"> Printing </label>
                                    <span style="color:red" id="branding_name_error"> </span>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input branding" name="branding" id="branding" value="BOPP"> BOPP </label>
                                    <span style="color:red" id="branding_name_error"> </span>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input branding" name="branding" id="branding" value="Mulching"> Mulching </label>
                                    <span style="color:red" id="branding_name_error"> </span>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input branding" name="branding" id="branding" value="Woven"> Woven </label>
                                    <span style="color:red" id="branding_name_error"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>

                <!-- Branding Type Plain Start -->

                <div id="plainData">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Quality </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="quality" id="quality" onchange="myquality(this.value)">
                                        <option value="">Select Quality</option>
                                        <?php
                                        $sql1 = "select * from quality";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?>"><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="quality_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                        ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_quality.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Sub Quality</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="sub_quality" id="sub_quality">

                                        <option value="">Select Sub Quality</option>

                                    </select>
                                    <span style="color:red" id="subquality_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_sub-quality.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label font-weight-bold">Size</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label required">Width</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="width" id="width">
                                    <span style="color:red" id="width_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label required">Height</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="height" id="height">
                                    <span style="color:red" id="height_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label required">Gauge</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="gauge" id="gauge">
                                    <span style="color:red" id="gauge_name_error"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label font-weight-bold">Folding</label>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label required">Type</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="folding_type" id="folding_type">
                                        <option value="">Select Folding Type</option>
                                        <?php
                                        $sql1 = "select * from folding_type";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="folding_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_folding-type.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label required">Value</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="folding_value" id="folding_value">
                                    <span style="color:red" id="folding_value_error"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Cutting </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="cutting" id="cutting">
                                        <option value="">Select Cutting Type</option>
                                        <?php
                                        $sql1 = "select * from cutting";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="cutting_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_cutting.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Punching </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="punching" id="punching">
                                        <option value="">Select Punching Type</option>
                                        <?php
                                        $sql1 = "select * from punching";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="punching_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_punching.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Treatment </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="treatment" id="treatment">
                                        <option value="">Select Treatment Type</option>
                                        <?php
                                        $sql1 = "select * from treatment";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?>"><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="treatment_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_treatment.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Package </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="package" id="package">
                                        <option value="">Select Package Type</option>
                                        <?php
                                        $sql1 = "select * from package";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value=" <?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="package_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_packing.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Delivery </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="delivery" id="delivery">
                                        <option value="">Select Delivery Type</option>
                                        <?php
                                        $sql1 = "select * from delivery";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?>"><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="delivery_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_delivery.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>

                <!-- Branding Type Plain End -->


                <!-- Branding Type Printed Start -->

                <div id="printedData" style="display:none;">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label font-weight-bold required">Brand Name </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="brand_name" id="brand_name" >
                                    <span style="color:red" id="brand_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Image</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="image" id="image" >
                                    <span style="color:red" id="image_name_error"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label font-weight-bold required">Rubber Status </label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="rubber" id="rubber">
                                        <option value="">select rubber status</option>
                                        <?php
                                        $sql1 = "select * from rubber";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?>"><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="rubber_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_rubber_status.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Quality </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="pquality" id="pquality" onchange="myquality(this.value)" >
                                        <option value="">Select Quality</option>
                                        <?php
                                        $sql1 = "select * from quality";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?>"><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="pquality_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_quality.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Sub Quality</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="psub_quality" id="psub_quality">

                                        <option value="">Select Sub Quality</option>

                                    </select>
                                    <span style="color:red" id="psubquality_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_sub-quality.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label font-weight-bold required">Printing Type</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="printing" id="printing">
                                        <option value="">Select Printing Type</option>
                                        <option value="Point"> Point</option>
                                        <option value="Running">Running</option>
                                    </select>
                                    <span style="color:red" id="printing_name_error"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Color</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="color" id="color">
                                        <option value="">Select Colors</option>
                                        <?php
                                        $sql1 = "select * from colors";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['name']; ?> "><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="color_name_error"> </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-1">
                            <div class="form-group row">
                                <button type="button" onclick="handleColor()">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </button>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_colors.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label font-weight-bold required">Selected Colors</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="colors" id="colors">
                                    <span style="color:red" id="colors_name_error" > </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label font-weight-bold">Size</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label required">Width</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="pwidth" id="pwidth">
                                    <span style="color:red" id="pwidth_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label required">Height</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="pheight" id="pheight">
                                    <span style="color:red" id="pheight_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label required">Gauge</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="pgauge" id="pgauge">
                                    <span style="color:red" id="pgauge_name_error"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label font-weight-bold">Folding</label>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label required">Type</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="pfolding_type" id="pfolding_type">
                                        <option value="">Select Folding Type</option>
                                        <?php
                                        $sql1 = "select * from folding_type";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="pfolding_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_folding-type.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label required">Value</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" name="pfolding_value" id="pfolding_value">
                                    <span style="color:red" id="pfolding_value_error"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Cutting </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="pcutting" id="pcutting">
                                        <option value="">Select Cutting Type</option>
                                        <?php
                                        $sql1 = "select * from cutting";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="pcutting_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_cutting.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                    <?php
                        }
                        ?>
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Punching </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="ppunching" id="ppunching">
                                        <option value="">Select Punching Type</option>
                                        <?php
                                        $sql1 = "select * from punching";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="ppunching_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_punching.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Treatment </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="ptreatment" id="ptreatment">
                                        <option value="">Select Treatment Type</option>
                                        <?php
                                        $sql1 = "select * from treatment";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?>"><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="ptreatment_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_treatment.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Package </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="ppackage" id="ppackage">
                                        <option value="">Select Package Type</option>
                                        <?php
                                        $sql1 = "select * from package";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value=" <?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="ppackage_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_packing.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Delivery </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="pdelivery" id="pdelivery">
                                        <option value="">Select Delivery Type</option>
                                        <?php
                                        $sql1 = "select * from delivery";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?>"><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="pdelivery_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_delivery.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>

                <!-- Branding Type Printed End -->


                 <!-- Branding Type BOPP Start -->

                 <div id="boppData" style="display:none;">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label font-weight-bold required">Brand Name </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="bbrand_name" id="bbrand_name" >
                                    <span style="color:red" id="bbrand_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Image</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="bimage" id="bimage" >
                                    <span style="color:red" id="bimage_name_error"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label font-weight-bold required">Rubber Status </label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="brubber" id="brubber">
                                        <option value="">select rubber status</option>
                                        <?php
                                        $sql1 = "select * from rubber";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?>"><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="brubber_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_rubber_status.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Quality </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="bquality" id="bquality" onchange="myquality(this.value)" >
                                        <option value="">Select Quality</option>
                                        <?php
                                        $sql1 = "select * from quality";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?>"><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="bquality_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_quality.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Sub Quality</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="bsub_quality" id="bsub_quality">

                                        <option value="">Select Sub Quality</option>

                                    </select>
                                    <span style="color:red" id="bsubquality_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_sub-quality.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label font-weight-bold required">Printing Type</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="bprinting" id="bprinting">
                                        <option value="">Select Printing Type</option>
                                        <option value="Point"> Point</option>
                                        <option value="Running">Running</option>
                                    </select>
                                    <span style="color:red" id="bprinting_name_error"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Color</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="bcolor" id="bcolor">
                                        <option value="">Select Colors</option>
                                        <?php
                                        $sql1 = "select * from colors";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['name']; ?> "><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="bcolor_name_error"> </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-1">
                            <div class="form-group row">
                                <button type="button" onclick="handleBColor()">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </button>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_colors.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label font-weight-bold required">Selected Colors</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="bcolors" id="bcolors">
                                    <span style="color:red" id="bcolors_name_error" > </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label font-weight-bold">Size</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label required">Width</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="bwidth" id="bwidth">
                                    <span style="color:red" id="bwidth_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label required">Height</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="bheight" id="bheight">
                                    <span style="color:red" id="bheight_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label required">Gauge</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="bgauge" id="bgauge">
                                    <span style="color:red" id="bgauge_name_error"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label font-weight-bold">Folding</label>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label required">Type</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="bfolding_type" id="bfolding_type">
                                        <option value="">Select Folding Type</option>
                                        <?php
                                        $sql1 = "select * from folding_type";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="bfolding_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_folding-type.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label required">Value</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" name="bfolding_value" id="bfolding_value">
                                    <span style="color:red" id="bfolding_value_error"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Cutting </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="bcutting" id="bcutting">
                                        <option value="">Select Cutting Type</option>
                                        <?php
                                        $sql1 = "select * from cutting";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="bcutting_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_cutting.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                    <?php
                        }
                        ?>
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Punching </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="bpunching" id="bpunching">
                                        <option value="">Select Punching Type</option>
                                        <?php
                                        $sql1 = "select * from punching";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="bpunching_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_punching.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Treatment </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="btreatment" id="btreatment">
                                        <option value="">Select Treatment Type</option>
                                        <?php
                                        $sql1 = "select * from treatment";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?>"><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="btreatment_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_treatment.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Package </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="bpackage" id="bpackage">
                                        <option value="">Select Package Type</option>
                                        <?php
                                        $sql1 = "select * from package";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value=" <?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="bpackage_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_packing.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Delivery </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="bdelivery" id="bdelivery">
                                        <option value="">Select Delivery Type</option>
                                        <?php
                                        $sql1 = "select * from delivery";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?>"><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="bdelivery_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_delivery.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>

                <!-- Branding Type BOPP End -->


                <!-- Branding Type Mulching Start -->

                <div id="mulchingData" style="display:none;">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label font-weight-bold required">Brand Name </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="mbrand_name" id="mbrand_name" >
                                    <span style="color:red" id="mbrand_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Image</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="mimage" id="mimage" >
                                    <span style="color:red" id="mimage_name_error"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label font-weight-bold required">Rubber Status </label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="mrubber" id="mrubber">
                                        <option value="">select rubber status</option>
                                        <?php
                                        $sql1 = "select * from rubber";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?>"><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="mrubber_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_rubber_status.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Quality </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="mquality" id="mquality" onchange="myquality(this.value)" >
                                        <option value="">Select Quality</option>
                                        <?php
                                        $sql1 = "select * from quality";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?>"><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="mquality_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_quality.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Sub Quality</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="msub_quality" id="msub_quality">

                                        <option value="">Select Sub Quality</option>

                                    </select>
                                    <span style="color:red" id="msubquality_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_sub-quality.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label font-weight-bold required">Printing Type</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="mprinting" id="mprinting">
                                        <option value="">Select Printing Type</option>
                                        <option value="Point"> Point</option>
                                        <option value="Running">Running</option>
                                    </select>
                                    <span style="color:red" id="mprinting_name_error"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Color</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="mcolor" id="mcolor">
                                        <option value="">Select Colors</option>
                                        <?php
                                        $sql1 = "select * from colors";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['name']; ?> "><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="mcolor_name_error"> </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-1">
                            <div class="form-group row">
                                <button type="button" onclick="handleMColor()">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </button>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_colors.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label font-weight-bold required">Selected Colors</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="mcolors" id="mcolors">
                                    <span style="color:red" id="mcolors_name_error" > </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label font-weight-bold">Size</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label required">Width</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="mwidth" id="mwidth">
                                    <span style="color:red" id="mwidth_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label required">Height</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="mheight" id="mheight">
                                    <span style="color:red" id="mheight_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label required">Gauge</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="mgauge" id="mgauge">
                                    <span style="color:red" id="mgauge_name_error"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label font-weight-bold">Folding</label>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label required">Type</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="mfolding_type" id="mfolding_type">
                                        <option value="">Select Folding Type</option>
                                        <?php
                                        $sql1 = "select * from folding_type";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="mfolding_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_folding-type.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label required">Value</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" name="mfolding_value" id="mfolding_value">
                                    <span style="color:red" id="mfolding_value_error"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Cutting </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="mcutting" id="mcutting">
                                        <option value="">Select Cutting Type</option>
                                        <?php
                                        $sql1 = "select * from cutting";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="mcutting_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_cutting.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                    <?php
                        }
                        ?>
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Punching </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="mpunching" id="mpunching">
                                        <option value="">Select Punching Type</option>
                                        <?php
                                        $sql1 = "select * from punching";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="mpunching_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_punching.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Treatment </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="mtreatment" id="mtreatment">
                                        <option value="">Select Treatment Type</option>
                                        <?php
                                        $sql1 = "select * from treatment";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?>"><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="mtreatment_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_treatment.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Package </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="mpackage" id="mpackage">
                                        <option value="">Select Package Type</option>
                                        <?php
                                        $sql1 = "select * from package";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value=" <?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="mpackage_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_packing.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Delivery </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="mdelivery" id="mdelivery">
                                        <option value="">Select Delivery Type</option>
                                        <?php
                                        $sql1 = "select * from delivery";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?>"><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="mdelivery_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_delivery.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>

                <!-- Branding Type Mulching End -->
                

                <!-- Branding Type Woven Start -->

                <div id="wovenData" style="display:none;">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label font-weight-bold required">Brand Name </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="wbrand_name" id="wbrand_name" >
                                    <span style="color:red" id="wbrand_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Image</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="wimage" id="wimage" >
                                    <span style="color:red" id="wimage_name_error"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label font-weight-bold required">Rubber Status </label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="wrubber" id="wrubber">
                                        <option value="">select rubber status</option>
                                        <?php
                                        $sql1 = "select * from rubber";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?>"><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="wrubber_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_rubber_status.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Quality </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="wquality" id="wquality" onchange="myquality(this.value)" >
                                        <option value="">Select Quality</option>
                                        <?php
                                        $sql1 = "select * from quality";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?>"><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="wquality_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_quality.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Sub Quality</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="wsub_quality" id="wsub_quality">

                                        <option value="">Select Sub Quality</option>

                                    </select>
                                    <span style="color:red" id="wsubquality_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_sub-quality.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label font-weight-bold required">Printing Type</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="wprinting" id="wprinting">
                                        <option value="">Select Printing Type</option>
                                        <option value="Point"> Point</option>
                                        <option value="Running">Running</option>
                                    </select>
                                    <span style="color:red" id="wprinting_name_error"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Color</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="wcolor" id="wcolor">
                                        <option value="">Select Colors</option>
                                        <?php
                                        $sql1 = "select * from colors";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['name']; ?> "><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="wcolor_name_error"> </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-1">
                            <div class="form-group row">
                                <button type="button" onclick="handleWColor()">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </button>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_colors.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label font-weight-bold required">Selected Colors</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="wcolors" id="wcolors">
                                    <span style="color:red" id="wcolors_name_error" > </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label font-weight-bold">Size</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label required">Width</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="wwidth" id="wwidth">
                                    <span style="color:red" id="wwidth_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label required">Height</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="wheight" id="wheight">
                                    <span style="color:red" id="wheight_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label required">Gauge</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="wgauge" id="wgauge">
                                    <span style="color:red" id="wgauge_name_error"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label font-weight-bold">Folding</label>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label required">Type</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="wfolding_type" id="wfolding_type">
                                        <option value="">Select Folding Type</option>
                                        <?php
                                        $sql1 = "select * from folding_type";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="wfolding_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_folding-type.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label required">Value</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" name="wfolding_value" id="wfolding_value">
                                    <span style="color:red" id="wfolding_value_error"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Cutting </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="wcutting" id="wcutting">
                                        <option value="">Select Cutting Type</option>
                                        <?php
                                        $sql1 = "select * from cutting";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="wcutting_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_cutting.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                    <?php
                        }
                        ?>
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Punching </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="wpunching" id="wpunching">
                                        <option value="">Select Punching Type</option>
                                        <?php
                                        $sql1 = "select * from punching";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="wpunching_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_punching.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Treatment </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="wtreatment" id="wtreatment">
                                        <option value="">Select Treatment Type</option>
                                        <?php
                                        $sql1 = "select * from treatment";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?>"><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="wtreatment_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_treatment.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Package </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="wpackage" id="wpackage">
                                        <option value="">Select Package Type</option>
                                        <?php
                                        $sql1 = "select * from package";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value=" <?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="wpackage_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_packing.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Delivery </label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="wdelivery" id="wdelivery">
                                        <option value="">Select Delivery Type</option>
                                        <?php
                                        $sql1 = "select * from delivery";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {
                                        ?>
                                            <option value="<?php echo $rw['id']; ?>"><?php echo $rw['name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <span style="color:red" id="wdelivery_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $type=$_SESSION["utype"];
                        if($type=="admin")
                        {
                            ?>
                        <div class="col-md-1">
                            <div class="form-group row">
                                <a href="production_delivery.php">
                                    <i class="fa fa-plus-square" aria-hidden="true"> add</i>
                                </a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>

                <!-- Branding Type Woven End -->

                <div class="text-center">
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                    <button class="btn btn-dark">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function myFun() {

        var selectedOption = document.querySelector('input[name="branding"]:checked').value;

        if(selectedOption === "Plain")
    {
        var quality = document.getElementById('quality').value;
        var sub_quality = document.getElementById('sub_quality').value;
        var width = document.getElementById('width').value;
        var height = document.getElementById('height').value;
        var gauge = document.getElementById('gauge').value;
        var folding_type = document.getElementById('folding_type').value;
        var folding_value = document.getElementById('folding_value').value;
        var cutting = document.getElementById('cutting').value;
        var punching = document.getElementById('punching').value;
        var treatment = document.getElementById('treatment').value;
        var package = document.getElementById('package').value;
        var delivery = document.getElementById('delivery').value;


        if (quality == "") {
            document.getElementById("quality_name_error").innerHTML = "**Details Field Cannot be Empty";
            return false;
        } else if (sub_quality == "") {
            document.getElementById("quality_name_error").innerHTML = "";
            document.getElementById("subquality_name_error").innerHTML = "**Details Field Cannot be Empty";
            return false;
        } else if (width == "") {
            document.getElementById("quality_name_error").innerHTML = "";
            document.getElementById("width_name_error").innerHTML = "**Details Field Cannot be Empty";
            return false;
        } else if (height == "") {
            document.getElementById("width_name_error").innerHTML = "";
            document.getElementById("height_name_error").innerHTML = "**Details Field Cannot be Empty";
            return false;
        } else if (gauge == "") {
            document.getElementById("height_name_error").innerHTML = "";
            document.getElementById("gauge_name_error").innerHTML = "**Details Field Cannot be Empty";
            return false;
        } else if (folding_type == "") {
            document.getElementById("gauge_name_error").innerHTML = "";
            document.getElementById("folding_name_error").innerHTML = "**Details Field Cannot be Empty";
            return false;
        } else if (folding_value == "") {
            document.getElementById("folding_name_error").innerHTML = "";
            document.getElementById("folding_value_error").innerHTML = "**Details Field Cannot be Empty";
            return false;
        } else if (cutting == "") {
            document.getElementById("folding_value_error").innerHTML = "";
            document.getElementById("cutting_name_error").innerHTML = "**Details Field Cannot be Empty";
            return false;
        } else if (punching == "") {
            document.getElementById("cutting_name_error").innerHTML = "";
            document.getElementById("punching_name_error").innerHTML = "**Details Field Cannot be Empty";
            return false;
        } else if (treatment == "") {
            document.getElementById("punching_name_error").innerHTML = "";
            document.getElementById("treatment_name_error").innerHTML = "**Details Field Cannot be Empty";
            return false;
        } else if (package == "") {
            document.getElementById("treatment_name_error").innerHTML = "";
            document.getElementById("package_name_error").innerHTML = "**Details Field Cannot be Empty";
            return false;
        } else if (delivery == "") {
            document.getElementById("package_name_error").innerHTML = "";
            document.getElementById("delivery_name_error").innerHTML = "**Details Field Cannot be Empty";
            return false;
        } 
    }
    else if(selectedOption === "Printing")
    {
        var brand_name = document.getElementById('brand_name').value;
        var image = document.getElementById('image').value;
        var rubber = document.getElementById('rubber').value;
        var pquality = document.getElementById('pquality').value;
        var psub_quality = document.getElementById('psub_quality').value;
        var printing_type = document.getElementById('printing_type').value;
        var colors = document.getElementById('colors').value;
        var pwidth = document.getElementById('pwidth').value;
        var pheight = document.getElementById('pheight').value;
        var pgauge = document.getElementById('pgauge').value;
        var pfolding_type = document.getElementById('pfolding_type').value;
        var pfolding_value = document.getElementById('pfolding_value').value;
        var pcutting = document.getElementById('pcutting').value;
        var ppunching = document.getElementById('ppunching').value;
        var ptreatment = document.getElementById('ptreatment').value;
        var ppackage = document.getElementById('ppackage').value;
        var pdelivery = document.getElementById('pdelivery').value;


        if (brand_name == "") {
            document.getElementById("brand_name_error").innerHTML = "**Brand name Field Cannot be Empty";
            return false;
        } else if (image == "") {
            document.getElementById("brand_name_error").innerHTML = "";
            document.getElementById("image_name_error").innerHTML = "**Image Field Cannot be Empty";
            return false;
        } else if (rubber == "") {
            document.getElementById("image_name_error").innerHTML = "";
            document.getElementById("rubber_name_error").innerHTML = "**Rubber Field Cannot be Empty";
            return false;
        } else if (pquality == "") {
            document.getElementById("rubber_name_error").innerHTML = "";
            document.getElementById("pquality_name_error").innerHTML = "**Quality Field Cannot be Empty";
            return false;
        } else if (psub_quality == "") {
            document.getElementById("pquality_name_error").innerHTML = "";
            document.getElementById("psubquality_name_error").innerHTML = "**Sub Quality Field Cannot be Empty";
            return false;
        } else if (printing_type == "") {
            document.getElementById("pquality_name_error").innerHTML = "";
            document.getElementById("printing_name_error").innerHTML = "**Select at least one";
            return false;
        } else if (colors == "") {
            document.getElementById("printing_name_error").innerHTML = "";
            document.getElementById("colors_name_error").innerHTML = "**Color Field Cannot be Empty";
            return false;    
        } else if (pwidth == "") {
            document.getElementById("colors_name_error").innerHTML = "";
            document.getElementById("pwidth_name_error").innerHTML = "**Width Field Cannot be Empty";
            return false;
        } else if (pheight == "") {
            document.getElementById("pwidth_name_error").innerHTML = "";
            document.getElementById("pheight_name_error").innerHTML = "**Height Field Cannot be Empty";
            return false;
        } else if (pgauge == "") {
            document.getElementById("pheight_name_error").innerHTML = "";
            document.getElementById("pgauge_name_error").innerHTML = "**Gauge Field Cannot be Empty";
            return false;
        } else if (pfolding_type == "") {
            document.getElementById("pgauge_name_error").innerHTML = "";
            document.getElementById("pfolding_name_error").innerHTML = "**Folding Type Field Cannot be Empty";
            return false;
        } else if (pfolding_value == "") {
            document.getElementById("pfolding_name_error").innerHTML = "";
            document.getElementById("pfolding_value_error").innerHTML = "**Folding value Field Cannot be Empty";
            return false;
        } else if (pcutting == "") {
            document.getElementById("pfolding_value_error").innerHTML = "";
            document.getElementById("pcutting_name_error").innerHTML = "**Cutting Field Cannot be Empty";
            return false;
        } else if (ppunching == "") {
            document.getElementById("pcutting_name_error").innerHTML = "";
            document.getElementById("ppunching_name_error").innerHTML = "**Punching Field Cannot be Empty";
            return false;
        } else if (ptreatment == "") {
            document.getElementById("ppunching_name_error").innerHTML = "";
            document.getElementById("ptreatment_name_error").innerHTML = "**Treatment Field Cannot be Empty";
            return false;
        } else if (ppackage == "") {
            document.getElementById("ptreatment_name_error").innerHTML = "";
            document.getElementById("ppackage_name_error").innerHTML = "**Package Field Cannot be Empty";
            return false;
        } else if (pdelivery == "") {
            document.getElementById("ppackage_name_error").innerHTML = "";
            document.getElementById("pdelivery_name_error").innerHTML = "**Delivery Field Cannot be Empty";
            return false;
        }
            return true;
    }else if(selectedOption === "BOPP")
    {
        var bbrand_name = document.getElementById('bbrand_name').value;
        var bimage = document.getElementById('bimage').value;
        var brubber = document.getElementById('brubber').value;
        var bquality = document.getElementById('bquality').value;
        var bsub_quality = document.getElementById('bsub_quality').value;
        var bprinting_type = document.getElementById('brinting_type').value;
        var bcolors = document.getElementById('bcolors').value;
        var bwidth = document.getElementById('bwidth').value;
        var bheight = document.getElementById('bheight').value;
        var bgauge = document.getElementById('bgauge').value;
        var bfolding_type = document.getElementById('bfolding_type').value;
        var bfolding_value = document.getElementById('bfolding_value').value;
        var bcutting = document.getElementById('bcutting').value;
        var bpunching = document.getElementById('bpunching').value;
        var btreatment = document.getElementById('btreatment').value;
        var bpackage = document.getElementById('bpackage').value;
        var bdelivery = document.getElementById('bdelivery').value;


        if (bbrand_name == "") {
            document.getElementById("bbrand_name_error").innerHTML = "**Brand name Field Cannot be Empty";
            return false;
        } else if (bimage == "") {
            document.getElementById("bbrand_name_error").innerHTML = "";
            document.getElementById("bimage_name_error").innerHTML = "**Image Field Cannot be Empty";
            return false;
        } else if (brubber == "") {
            document.getElementById("bimage_name_error").innerHTML = "";
            document.getElementById("brubber_name_error").innerHTML = "**Rubber Field Cannot be Empty";
            return false;
        } else if (bquality == "") {
            document
            .getElementById("brubber_name_error").innerHTML = "";
            document.getElementById("bquality_name_error").innerHTML = "**Quality Field Cannot be Empty";
            return false;
        } else if (bsub_quality == "") {
            document.getElementById("bquality_name_error").innerHTML = "";
            document.getElementById("bsubquality_name_error").innerHTML = "**Sub Quality Field Cannot be Empty";
            return false;
        } else if (bprinting_type == "") {
            document.getElementById("bquality_name_error").innerHTML = "";
            document.getElementById("bprinting_name_error").innerHTML = "**Select at least one";
            return false;
        } else if (bcolors == "") {
            document.getElementById("bprinting_name_error").innerHTML = "";
            document.getElementById("bcolors_name_error").innerHTML = "**Color Field Cannot be Empty";
            return false;    
        } else if (bwidth == "") {
            document.getElementById("bcolors_name_error").innerHTML = "";
            document.getElementById("bwidth_name_error").innerHTML = "**Width Field Cannot be Empty";
            return false;
        } else if (bheight == "") {
            document.getElementById("bwidth_name_error").innerHTML = "";
            document.getElementById("bheight_name_error").innerHTML = "**Height Field Cannot be Empty";
            return false;
        } else if (bgauge == "") {
            document.getElementById("bheight_name_error").innerHTML = "";
            document.getElementById("bgauge_name_error").innerHTML = "**Gauge Field Cannot be Empty";
            return false;
        } else if (bfolding_type == "") {
            document.getElementById("bgauge_name_error").innerHTML = "";
            document.getElementById("bfolding_name_error").innerHTML = "**Folding Type Field Cannot be Empty";
            return false;
        } else if (bfolding_value == "") {
            document.getElementById("bfolding_name_error").innerHTML = "";
            document.getElementById("bfolding_value_error").innerHTML = "**Folding value Field Cannot be Empty";
            return false;
        } else if (bcutting == "") {
            document.getElementById("bfolding_value_error").innerHTML = "";
            document.getElementById("bcutting_name_error").innerHTML = "**Cutting Field Cannot be Empty";
            return false;
        } else if (bpunching == "") {
            document.getElementById("bcutting_name_error").innerHTML = "";
            document.getElementById("bpunching_name_error").innerHTML = "**Punching Field Cannot be Empty";
            return false;
        } else if (btreatment == "") {
            document.getElementById("bpunching_name_error").innerHTML = "";
            document.getElementById("btreatment_name_error").innerHTML = "**Treatment Field Cannot be Empty";
            return false;
        } else if (bpackage == "") {
            document.getElementById("btreatment_name_error").innerHTML = "";
            document.getElementById("bpackage_name_error").innerHTML = "**Package Field Cannot be Empty";
            return false;
        } else if (bdelivery == "") {
            document.getElementById("bpackage_name_error").innerHTML = "";
            document.getElementById("bdelivery_name_error").innerHTML = "**Delivery Field Cannot be Empty";
            return false;
        }
            return true;
    }
    else if(selectedOption === "Mulching")
    {
        var mbrand_name = document.getElementById('mbrand_name').value;
        var mimage = document.getElementById('mimage').value;
        var mrubber = document.getElementById('mrubber').value;
        var mquality = document.getElementById('mquality').value;
        var msub_quality = document.getElementById('msub_quality').value;
        var mprinting_type = document.getElementById('mprinting_type').value;
        var mcolors = document.getElementById('mcolors').value;
        var mwidth = document.getElementById('mwidth').value;
        var mheight = document.getElementById('mheight').value;
        var mgauge = document.getElementById('mgauge').value;
        var mfolding_type = document.getElementById('mfolding_type').value;
        var mfolding_value = document.getElementById('mfolding_value').value;
        var mcutting = document.getElementById('mcutting').value;
        var mpunching = document.getElementById('mpunching').value;
        var mtreatment = document.getElementById('mtreatment').value;
        var mpackage = document.getElementById('mpackage').value;
        var mdelivery = document.getElementById('mdelivery').value;


        if (mbrand_name == "") {
            document.getElementById("mbrand_name_error").innerHTML = "**Brand name Field Cannot be Empty";
            return false;
        } else if (mimage == "") {
            document.getElementById("mbrand_name_error").innerHTML = "";
            document.getElementById("mimage_name_error").innerHTML = "**Image Field Cannot be Empty";
            return false;
        } else if (mrubber == "") {
            document.getElementById("mimage_name_error").innerHTML = "";
            document.getElementById("mrubber_name_error").innerHTML = "**Rubber Field Cannot be Empty";
            return false;
        } else if (mquality == "") {
            document.getElementById("mrubber_name_error").innerHTML = "";
            document.getElementById("mquality_name_error").innerHTML = "**Quality Field Cannot be Empty";
            return false;
        } else if (msub_quality == "") {
            document.getElementById("mquality_name_error").innerHTML = "";
            document.getElementById("msubquality_name_error").innerHTML = "**Sub Quality Field Cannot be Empty";
            return false;
        } else if (mprinting_type == "") {
            document.getElementById("mquality_name_error").innerHTML = "";
            document.getElementById("mrinting_name_error").innerHTML = "**Select at least one";
            return false;
        } else if (mcolors == "") {
            document.getElementById("mprinting_name_error").innerHTML = "";
            document.getElementById("mcolors_name_error").innerHTML = "**Color Field Cannot be Empty";
            return false;    
        } else if (mwidth == "") {
            document.getElementById("mcolors_name_error").innerHTML = "";
            document.getElementById("mwidth_name_error").innerHTML = "**Width Field Cannot be Empty";
            return false;
        } else if (mheight == "") {
            document.getElementById("mwidth_name_error").innerHTML = "";
            document.getElementById("mheight_name_error").innerHTML = "**Height Field Cannot be Empty";
            return false;
        } else if (mgauge == "") {
            document.getElementById("mheight_name_error").innerHTML = "";
            document.getElementById("mgauge_name_error").innerHTML = "**Gauge Field Cannot be Empty";
            return false;
        } else if (mfolding_type == "") {
            document.getElementById("mgauge_name_error").innerHTML = "";
            document.getElementById("mfolding_name_error").innerHTML = "**Folding Type Field Cannot be Empty";
            return false;
        } else if (mfolding_value == "") {
            document.getElementById("mfolding_name_error").innerHTML = "";
            document.getElementById("mfolding_value_error").innerHTML = "**Folding value Field Cannot be Empty";
            return false;
        } else if (mcutting == "") {
            document.getElementById("mfolding_value_error").innerHTML = "";
            document.getElementById("mcutting_name_error").innerHTML = "**Cutting Field Cannot be Empty";
            return false;
        } else if (mpunching == "") {
            document.getElementById("mcutting_name_error").innerHTML = "";
            document.getElementById("mpunching_name_error").innerHTML = "**Punching Field Cannot be Empty";
            return false;
        } else if (mtreatment == "") {
            document.getElementById("mpunching_name_error").innerHTML = "";
            document.getElementById("mtreatment_name_error").innerHTML = "**Treatment Field Cannot be Empty";
            return false;
        } else if (mpackage == "") {
            document.getElementById("mtreatment_name_error").innerHTML = "";
            document.getElementById("mpackage_name_error").innerHTML = "**Package Field Cannot be Empty";
            return false;
        } else if (mdelivery == "") {
            document.getElementById("mpackage_name_error").innerHTML = "";
            document.getElementById("mdelivery_name_error").innerHTML = "**Delivery Field Cannot be Empty";
            return false;
        }
            return true;
    }
    else if(selectedOption === "Woven")
    {
        var wbrand_name = document.getElementById('wbrand_name').value;
        var wimage = document.getElementById('wimage').value;
        var wrubber = document.getElementById('wrubber').value;
        var wquality = document.getElementById('wquality').value;
        var wsub_quality = document.getElementById('wsub_quality').value;
        var wprinting_type = document.getElementById('wprinting_type').value;
        var wcolors = document.getElementById('wcolors').value;
        var wwidth = document.getElementById('wwidth').value;
        var wheight = document.getElementById('wheight').value;
        var wgauge = document.getElementById('wgauge').value;
        var wfolding_type = document.getElementById('wfolding_type').value;
        var wfolding_value = document.getElementById('wfolding_value').value;
        var wcutting = document.getElementById('wcutting').value;
        var ppunching = document.getElementById('wpunching').value;
        var wtreatment = document.getElementById('wtreatment').value;
        var wpackage = document.getElementById('wpackage').value;
        var wdelivery = document.getElementById('wdelivery').value;


        if (wbrand_name == "") {
            document.getElementById("wbrand_name_error").innerHTML = "**Brand name Field Cannot be Empty";
            return false;
        } else if (wimage == "") {
            document.getElementById("wbrand_name_error").innerHTML = "";
            document.getElementById("wimage_name_error").innerHTML = "**Image Field Cannot be Empty";
            return false;
        } else if (wrubber == "") {
            document.getElementById("wimage_name_error").innerHTML = "";
            document.getElementById("wrubber_name_error").innerHTML = "**Rubber Field Cannot be Empty";
            return false;
        } else if (wquality == "") {
            document.getElementById("wrubber_name_error").innerHTML = "";
            document.getElementById("wquality_name_error").innerHTML = "**Quality Field Cannot be Empty";
            return false;
        } else if (wsub_quality == "") {
            document.getElementById("wquality_name_error").innerHTML = "";
            document.getElementById("wsubquality_name_error").innerHTML = "**Sub Quality Field Cannot be Empty";
            return false;
        } else if (wprinting_type == "") {
            document.getElementById("wquality_name_error").innerHTML = "";
            document.getElementById("wprinting_name_error").innerHTML = "**Select at least one";
            return false;
        } else if (wcolors == "") {
            document.getElementById("wprinting_name_error").innerHTML = "";
            document.getElementById("wcolors_name_error").innerHTML = "**Color Field Cannot be Empty";
            return false;    
        } else if (wwidth == "") {
            document.getElementById("wcolors_name_error").innerHTML = "";
            document.getElementById("wwidth_name_error").innerHTML = "**Width Field Cannot be Empty";
            return false;
        } else if (wheight == "") {
            document.getElementById("wwidth_name_error").innerHTML = "";
            document.getElementById("wheight_name_error").innerHTML = "**Height Field Cannot be Empty";
            return false;
        } else if (wgauge == "") {
            document.getElementById("wheight_name_error").innerHTML = "";
            document.getElementById("wgauge_name_error").innerHTML = "**Gauge Field Cannot be Empty";
            return false;
        } else if (wfolding_type == "") {
            document.getElementById("wgauge_name_error").innerHTML = "";
            document.getElementById("wfolding_name_error").innerHTML = "**Folding Type Field Cannot be Empty";
            return false;
        } else if (wfolding_value == "") {
            document.getElementById("wfolding_name_error").innerHTML = "";
            document.getElementById("wfolding_value_error").innerHTML = "**Folding value Field Cannot be Empty";
            return false;
        } else if (wcutting == "") {
            document.getElementById("wfolding_value_error").innerHTML = "";
            document.getElementById("wcutting_name_error").innerHTML = "**Cutting Field Cannot be Empty";
            return false;
        } else if (wpunching == "") {
            document.getElementById("wcutting_name_error").innerHTML = "";
            document.getElementById("wpunching_name_error").innerHTML = "**Punching Field Cannot be Empty";
            return false;
        } else if (wtreatment == "") {
            document.getElementById("wpunching_name_error").innerHTML = "";
            document.getElementById("wtreatment_name_error").innerHTML = "**Treatment Field Cannot be Empty";
            return false;
        } else if (wpackage == "") {
            document.getElementById("wtreatment_name_error").innerHTML = "";
            document.getElementById("wpackage_name_error").innerHTML = "**Package Field Cannot be Empty";
            return false;
        } else if (wdelivery == "") {
            document.getElementById("wpackage_name_error").innerHTML = "";
            document.getElementById("wdelivery_name_error").innerHTML = "**Delivery Field Cannot be Empty";
            return false;
        }
            return true;
    }
    }
</script>


<?php
include('footer.php');
?>
<script>
    $(document).ready(function() {
        $(".branding").on("change", function() {
            var item = $(this).val();

            if (item == "Plain") {
                $("#printedData").css("display", "none");
                $("#boppData").css("display", "none");
                $("#mulchingData").css("display", "none");
                $("#wovenData").css("display", "none");
                $("#plainData").css("display", "block");
            }
            if (item == "Printing") {
                $("#plainData").css("display", "none");
                $("#boppData").css("display", "none");
                $("#mulchingData").css("display", "none");
                $("#wovenData").css("display", "none");
                $("#printedData").css("display", "block");
            }
            if (item == "BOPP") {
                $("#plainData").css("display", "none");
                $("#printedData").css("display", "none");
                $("#mulchingData").css("display", "none");
                $("#wovenData").css("display", "none");
                $("#boppData").css("display", "block");
            }
            if (item == "Mulching") {
                $("#plainData").css("display", "none");
                $("#printedData").css("display", "none");
                $("#boppData").css("display", "none");
                $("#wovenData").css("display", "none");
                $("#mulchingData").css("display", "block");
                
            }
            if (item == "Woven") {
                $("#plainData").css("display", "none");
                $("#printedData").css("display", "none");
                $("#boppData").css("display", "none");
                $("#mulchingData").css("display", "none");
                $("#wovenData").css("display", "block");
            }

        })
    })
</script>


<script type="text/javascript">

    // fetching subquality on the basis of quality
    function myquality(datavalue) {
        /* alert(datavalue) */
        $.ajax({
            url: 'getsubquality.php',
            type: 'POST',
            data: {
                datapost: datavalue
            },
            success: function(result) {
                console.log(result);
                $('#sub_quality').html("" + result);
                $('#psub_quality').html("" + result);
                $('#bsub_quality').html("" + result);
                $('#msub_quality').html("" + result);
                $('#wsub_quality').html("" + result);
            }
        });
    }


    // Color addition for Printing 
    function handleColor() {
        var color = $('#color').val();
        var colors = $('#colors').val();

        
        if (colors.length <= 0) {
            colors = color
        } else {
            colors += "," + color
        }
        $('#colors').val(colors)
    }

    //Color Additon for BOPP
    function handleBColor() {
        var bcolor = $('#bcolor').val();
        var bcolors = $('#bcolors').val();
        
        if (bcolors.length <= 0) {
            bcolors = bcolor
        } else {
            bcolors += "," + bcolor
        }
        $('#bcolors').val(bcolors)
    }

    //Color Additon for Mulching
    function handleMColor() {
        var mcolor = $('#mcolor').val();
        var mcolors = $('#mcolors').val();
        
        if (mcolors.length <= 0) {
            mcolors = mcolor
        } else {
            mcolors += "," + mcolor
        }
        $('#mcolors').val(mcolors)
    }

    //Color Additon for Woven
    function handleWColor() {
        var wcolor =$('#wcolor').val();
        var wcolors = $('#wcolors').val();

        if(wcolors.length <= 0){
            wcolors = wcolor
        }else{
            wcolors += "," +wcolor
        }
        $('#wcolors').val(wcolors)
    }

    // fetchig firm from firm on the basis of customer info
    function myfirm(datavalue) {
        //alert(datavalue)
        $.ajax({
            url: 'fetchfirm.php',
            type: 'POST',
            data: {
                datapost: datavalue
            },
            success: function(result) {
                console.log(result);
                $('#firm').html("" + result);
                //$('#psub_quality').html("" + result);
            }
        });
    }
    

</script>