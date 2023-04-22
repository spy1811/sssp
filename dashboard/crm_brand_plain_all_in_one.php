<?php

include('config.php');
include('header.php');

?>
<?php

error_reporting(0);

if (isset($_POST['submit'])) {

    $cname = $_POST['customernamert'];
    $_SESSION['customer_id'] = $cname;
    $firm = $_POST['firm'];
    $branding = $_POST['branding'];
    $_SESSION['branding'] = $branding;
    $bname = $_POST['brand_name'];
    $rubber_status = $_POST['rubber'];
    $quality = $_POST['quality'];
    $sub_quality = $_POST['sub_quality'];
    $printing_type = $_POST['printing'];
    $color = $_POST['colors'];
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

                                if (!isset($_SESSION['customer_id'])) {

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
                                } else {
                                    $id = $_SESSION['customer_id'];
                                    $sql = "select id,name from customer where id=$id";
                                    $res = mysqli_query($conn, $sql);
                                    $rt = mysqli_fetch_row($res);
                                    $n = $rt[1];
                                    $idd = $rt[0];
                                ?>
                                    <input type="text" value="<?php echo  $n; ?>" class="form-control" id="custname" readonly>
                                    <input type="hidden" value="<?php echo $idd; ?>" name="customernamert" id="custname">
                                <?php }
                                ?>
                                <span style="color:red" id="customer_name_error"> </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label font-weight-bold required">Firm </label>
                            <div class="col-sm-9">
                                <?php
                                if (!isset($_SESSION['customer_id'])) {
                                ?>
                                    <select class="form-control" name="firm" id="firm" onchange="mybrand(this.value)">
                                        <option>Select Firm</option>

                                    </select>
                                <?php
                                } else {
                                ?>
                                    <select class="form-control" name="firm" id="firm">
                                        <option>Select Firm</option>
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
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label font-weight-bold required">Branding</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="branding" id="branding">
                                    <option value="">Select Branding Type</option>
                                    <option value="Plain">Plain</option>
                                    <option value="Printing">Printing</option>
                                    <option value="BOPP">BOPP</option>
                                    <option value="Mulching">Mulching</option>
                                    <option value="Woven">Woven</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div id="printedData">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label font-weight-bold required">Brand Name </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="brand_name" id="brand_name">
                                    <span style="color:red" id="brand_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label font-weight-bold required">Image</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="image" id="image">
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
                        $type = $_SESSION["utype"];
                        if ($type == "admin") {
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
                        $type = $_SESSION["utype"];
                        if ($type == "admin") {
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
                        $type = $_SESSION["utype"];
                        if ($type == "admin") {
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
                        $type = $_SESSION["utype"];
                        if ($type == "admin") {
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
                                    <span style="color:red" id="colors_name_error"> </span>
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
                        $type = $_SESSION["utype"];
                        if ($type == "admin") {
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
                        $type = $_SESSION["utype"];
                        if ($type == "admin") {
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
                        $type = $_SESSION["utype"];
                        if ($type == "admin") {
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
                        $type = $_SESSION["utype"];
                        if ($type == "admin") {
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
                        $type = $_SESSION["utype"];
                        if ($type == "admin") {
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
                        $type = $_SESSION["utype"];
                        if ($type == "admin") {
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

        var branding = document.getElementById('branding').value;
        var brand_name = document.getElementById('brand_name').value;
        var image = document.getElementById('image').value;
        var rubber = document.getElementById('rubber').value;
        var pquality = document.getElementById('quality').value;
        var psub_quality = document.getElementById('sub_quality').value;
        var printing_type = document.getElementById('printing_type').value;
        var colors = document.getElementById('colors').value;
        var pwidth = document.getElementById('width').value;
        var pheight = document.getElementById('height').value;
        var pgauge = document.getElementById('gauge').value;
        var pfolding_type = document.getElementById('folding_type').value;
        var pfolding_value = document.getElementById('folding_value').value;
        var pcutting = document.getElementById('cutting').value;
        var ppunching = document.getElementById('punching').value;
        var ptreatment = document.getElementById('treatment').value;
        var ppackage = document.getElementById('package').value;
        var pdelivery = document.getElementById('delivery').value;


        if (branding == "") {
            document.getElementById("branding_name_error").innerHTML = "**Branding Field Cannot be Empty";
            return false;
        } else if (brand_name == "") {
            document.getElementById("branding_name_error").innerHTML = "**";
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
            document.getElementById("quality_name_error").innerHTML = "**Quality Field Cannot be Empty";
            return false;
        } else if (psub_quality == "") {
            document.getElementById("quality_name_error").innerHTML = "";
            document.getElementById("subquality_name_error").innerHTML = "**Sub Quality Field Cannot be Empty";
            return false;
        } else if (printing_type == "") {
            document.getElementById("quality_name_error").innerHTML = "";
            document.getElementById("printing_name_error").innerHTML = "**Select at least one";
            return false;
        } else if (colors == "") {
            document.getElementById("printing_name_error").innerHTML = "";
            document.getElementById("colors_name_error").innerHTML = "**Color Field Cannot be Empty";
            return false;
        } else if (pwidth == "") {
            document.getElementById("colors_name_error").innerHTML = "";
            document.getElementById("width_name_error").innerHTML = "**Width Field Cannot be Empty";
            return false;
        } else if (pheight == "") {
            document.getElementById("width_name_error").innerHTML = "";
            document.getElementById("height_name_error").innerHTML = "**Height Field Cannot be Empty";
            return false;
        } else if (pgauge == "") {
            document.getElementById("height_name_error").innerHTML = "";
            document.getElementById("gauge_name_error").innerHTML = "**Gauge Field Cannot be Empty";
            return false;
        } else if (pfolding_type == "") {
            document.getElementById("gauge_name_error").innerHTML = "";
            document.getElementById("folding_name_error").innerHTML = "**Folding Type Field Cannot be Empty";
            return false;
        } else if (pfolding_value == "") {
            document.getElementById("folding_name_error").innerHTML = "";
            document.getElementById("folding_value_error").innerHTML = "**Folding value Field Cannot be Empty";
            return false;
        } else if (pcutting == "") {
            document.getElementById("folding_value_error").innerHTML = "";
            document.getElementById("cutting_name_error").innerHTML = "**Cutting Field Cannot be Empty";
            return false;
        } else if (ppunching == "") {
            document.getElementById("cutting_name_error").innerHTML = "";
            document.getElementById("punching_name_error").innerHTML = "**Punching Field Cannot be Empty";
            return false;
        } else if (ptreatment == "") {
            document.getElementById("punching_name_error").innerHTML = "";
            document.getElementById("treatment_name_error").innerHTML = "**Treatment Field Cannot be Empty";
            return false;
        } else if (ppackage == "") {
            document.getElementById("treatment_name_error").innerHTML = "";
            document.getElementById("package_name_error").innerHTML = "**Package Field Cannot be Empty";
            return false;
        } else if (pdelivery == "") {
            document.getElementById("package_name_error").innerHTML = "";
            document.getElementById("delivery_name_error").innerHTML = "**Delivery Field Cannot be Empty";
            return false;
        }
        return true;
    }
</script>


<?php
include('footer.php');
?>
<!-- <script>
    $(document).ready(function() {
        $(".branding").on("change", function() {
            var item = $(this).val();
            if (item == "Plain") {
                $("#printedData").css("display", "none");
                $("#plainData").css("display", "block");
            }
            if (item == "Printing") {
                $("#plainData").css("display", "none");
                $("#printedData").css("display", "block");
            }
        })
    })
</script> -->

<script type="text/javascript">
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
            }
        });
    }

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