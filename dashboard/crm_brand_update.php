<?php

include('header.php');
include('config.php');
?>
<?php
error_reporting(0);
$id = $_GET['id'];
$sql1 = "SELECT branding.*, customer.name, firm.firm_name FROM branding LEFT JOIN customer ON customer.id = branding.customer_name LEFT JOIN firm ON firm.id = branding.firm WHERE branding.id=$id";

$res = mysqli_query($conn, $sql1);
$rew = mysqli_fetch_array($res);



/* if (isset($_POST['submit'])) {
    if ($_POST['branding'] == "Plain") 
    {
        $cname = $_POST['name'];
        $firm = $_POST['firm'];
        $branding = $_POST['branding'];
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
        
        $sql = "update branding set customer_name='$cname', firm='$firm', branding='$branding', quality='$quality', sub_quality='$sub_quality', width='$width', height='$height', gauge='$gauge', folding_type='$folding_type', folding_value='$folding_value', cutting='$cutting', punching='$punching', treatment='$treatment', package='$package', delivery='$delivery' where id=$id";
        
        $run = mysqli_query($conn, $sql);
        
        if ($run) {
            echo "<script>window.location='index.php';</script>";
        } else {
            echo "error" . $conn;
        }
    }
    else if ($_POST['branding'] == "Printing") {
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
                
                $sql = "update branding set customer_name=='$cname', firm='$firm', branding='$branding', brand_name='$bname', image='$image_name', rubber_status='$rubber_status', quality='$quality', sub_quality='$sub_quality', width='$width', height='$height', gauge='$gauge', printing_type='$printing_type', color='$color', folding_type='$folding_type', folding_value='$folding_value', cutting='$cutting', punching='$punching', treatment='$treatment', package='$package', delivery='$delivery' where id=$id;
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
 */
?>

<div class="col-12 grid-margin mx-auto ">
    <div class="card">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">Branding Type</h3>
        </div>
        <br>
        <div class="card-body">
            <form class="form-sample" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label required">Customer Name </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="name" id="customer_name" value="<?php echo $rew['name']; ?>" read>
                                <span style="color:red" readonly> </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label required">Firm </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="firm" id="firm" value="<?php echo $rew['firm_name']; ?>">
                                <span style="color:red" id="firm_name_error"> </span>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Branding</label>
                            <div class="col-sm-4">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <?php
                                        if ($rew['branding'] == "Plain") {
                                        ?>
                                            <input type="radio" class="form-check-input" name="branding" id="branding" value="Plain" checked>
                                        <?php
                                        } else {
                                        ?>
                                            <input type="radio" class="form-check-input" name="branding" id="branding" value="Plain">
                                        <?php    }
                                        ?>
                                        Plain </label>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <?php
                                        if ($rew['branding'] == "Printing") {
                                        ?>
                                            <input type="radio" class="form-check-input" name="branding" id="branding" value="Printing" checked>
                                        <?php
                                        } else {
                                        ?>
                                            <input type="radio" class="form-check-input" name="branding" id="branding" value="Printing">
                                        <?php    }
                                        ?>
                                        Printing </label>
                                    <span style="color:red" id="branding_name_error"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <?php
                if ($rew['branding'] == "Plain") {
                ?>
                    <div id="plainData">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label required">Quality </label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="quality" id="quality">
                                            <option value="<?php echo $rew['quality']; ?>"><?php echo $rew['quality']; ?></option>
                                            <?php
                                            $sql1 = "select * from quality";
                                            $rk = mysqli_query($conn, $sql1);
                                            while ($rw = mysqli_fetch_array($rk)) {
                                                if ($rw['id'] == $rew['quality']) {
                                            ?>
                                                    <option value="<?php echo $rw['id']; ?> " selected><?php echo $rw['name']; ?></option>
                                                <?php
                                                } else {
                                                ?>
                                                    <option value="<?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                        <span style="color:red" id="quality_name_error"> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label required">Sub Quality</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="sub_quality" id="sub_quality">
                                            <option value="<?php echo $rew['sub_quality']; ?>"> <?php echo $rew['sub_quality']; ?> </option>
                                            <?php
                                            $sql1 = "select * from sub_quality";
                                            $rk = mysqli_query($conn, $sql1);
                                            while ($rw = mysqli_fetch_array($rk)) {
                                                if ($rw['id'] == $rew['sub_quality']) {
                                            ?>
                                                    <option value="<?php echo $rw['id']; ?> " selected><?php echo $rw['name']; ?></option>
                                                <?php
                                                } else {
                                                ?>
                                                    <option value="<?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                        <span style="color:red" id="subquality_name_error"> </span>
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
                                        <input type="number" class="form-control" name="width" id="width" value="<?php echo $rew['width']; ?>">
                                        <span style="color:red" id="width_name_error"> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label required">Height</label>
                                    <div class="col-sm-7">
                                        <input type="number" class="form-control" name="height" id="height" value="<?php echo $rew['height']; ?>">
                                        <span style="color:red" id="height_name_error"> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label required">Gauge</label>
                                    <div class="col-sm-7">
                                        <input type="number" class="form-control" name="gauge" id="gauge" value="<?php echo $rew['gauge']; ?>">
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
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label required">Type</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="folding_type" id="folding_type">
                                            <option value="<?php echo $rew['folding_type']; ?>"> <?php echo $rew['folding_type']; ?> </option>
                                            <?php
                                            $sql1 = "select * from folding_type";
                                            $rk = mysqli_query($conn, $sql1);
                                            while ($rw = mysqli_fetch_array($rk)) {
                                                if ($rw['id'] == $rew['folding_type']) {
                                            ?>
                                                    <option value="<?php echo $rw['id']; ?> " selected><?php echo $rw['name']; ?></option>
                                                <?php
                                                } else {
                                                ?>
                                                    <option value="<?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                        <span style="color:red" id="folding_name_error"> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label required">Value</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="folding_value" id="folding_value" value="<?php echo $rew['folding_value']; ?>">
                                        <span style="color:red" id="folding_value_error"> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label required">Cutting </label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="cutting" id="cutting">
                                            <option value="<?php echo $rew['cutting']; ?>"><?php echo $rew['cutting']; ?></option>
                                            <?php
                                            $sql1 = "select * from cutting";
                                            $rk = mysqli_query($conn, $sql1);
                                            while ($rw = mysqli_fetch_array($rk)) {
                                                if ($rw['id'] == $rew['cutting']) {
                                            ?>
                                                    <option value="<?php echo $rw['id']; ?> " selected><?php echo $rw['name']; ?></option>
                                                <?php
                                                } else {
                                                ?>
                                                    <option value="<?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                        <span style="color:red" id="cutting_name_error"> </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label required">Punching </label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="punching" id="punching">
                                            <option value="<?php echo $rew['punching']; ?>"><?php echo $rew['punching']; ?></option>
                                            <?php
                                            $sql1 = "select * from punching";
                                            $rk = mysqli_query($conn, $sql1);
                                            while ($rw = mysqli_fetch_array($rk)) {
                                                if ($rw['id'] == $rew['punching']) {
                                            ?>
                                                    <option value="<?php echo $rw['id']; ?> " selected><?php echo $rw['name']; ?></option>
                                                <?php
                                                } else {
                                                ?>
                                                    <option value="<?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                        <span style="color:red" id="punching_name_error"> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label required">Treatment </label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="treatment" id="treatment">
                                            <option value="<?php echo $rew['treatment']; ?>"><?php echo $rew['treatment']; ?></option>
                                            <?php
                                            $sql1 = "select * from treatment";
                                            $rk = mysqli_query($conn, $sql1);
                                            while ($rw = mysqli_fetch_array($rk)) {
                                                if ($rw['id'] == $rew['treatment']) {
                                            ?>
                                                    <option value="<?php echo $rw['id']; ?> " selected><?php echo $rw['name']; ?></option>
                                                <?php
                                                } else {
                                                ?>
                                                    <option value="<?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                        <span style="color:red" id="treatment_name_error"> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label required">Package </label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="package" id="package">
                                            <option value="<?php echo $rew['package']; ?>"><?php echo $rew['package']; ?></option>
                                            <?php
                                            $sql1 = "select * from package";
                                            $rk = mysqli_query($conn, $sql1);
                                            while ($rw = mysqli_fetch_array($rk)) {
                                                if ($rw['id'] == $rew['package']) {
                                            ?>
                                                    <option value="<?php echo $rw['id']; ?> " selected><?php echo $rw['name']; ?></option>
                                                <?php
                                                } else {
                                                ?>
                                                    <option value="<?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                        <span style="color:red" id="package_name_error"> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label required">Delivery </label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="delivery" id="delivery">
                                            <option value="<?php echo $rew['delivery']; ?>"><?php echo $rew['delivery']; ?></option>
                                            <?php
                                            $sql1 = "select * from delivery";
                                            $rk = mysqli_query($conn, $sql1);
                                            while ($rw = mysqli_fetch_array($rk)) {
                                                if ($rw['id'] == $rew['delivery']) {
                                            ?>
                                                    <option value="<?php echo $rw['id']; ?> " selected><?php echo $rw['name']; ?></option>
                                                <?php
                                                } else {
                                                ?>
                                                    <option value="<?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                        <span style="color:red" id="delivery_name_error"> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                } else {
                ?>

                    <div id="printedData">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label required">Brand Name </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="brand_name" id="brand_name" value="<?php echo $rew['brand_name']; ?>">
                                        <span style="color:red" id="brand_name_error"> </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label required">Image</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" name="image" id="image">
                                        <span style="color:red" id="image_name_error"> </span>
                                    </div>
                                </div>
                                <img src="image/<?php echo $rew['image']; ?>" alt="" style="height: 100px; width: 200px"><br><br>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label required">Rubber Status </label>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="rubber" id="rubber">
                                            <option value="<?php echo $rew['rubber_status']; ?>"><?php echo $rew['rubber_status']; ?></option>
                                            <?php
                                            $sql1 = "select * from rubber";
                                            $rk = mysqli_query($conn, $sql1);
                                            while ($rw = mysqli_fetch_array($rk)) {
                                                if ($rw['id'] == $rew['rubber_status']) {
                                            ?>
                                                    <option value="<?php echo $rw['id']; ?> " selected><?php echo $rw['name']; ?></option>
                                                <?php
                                                } else {
                                                ?>
                                                    <option value="<?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                        <span style="color:red"> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label required">Quality </label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="pquality" id="pquality">
                                            <option value="<?php echo $rew['quality']; ?>"><?php echo $rew['quality']; ?></option>
                                            <?php
                                            $sql1 = "select * from quality";
                                            $rk = mysqli_query($conn, $sql1);
                                            while ($rw = mysqli_fetch_array($rk)) {
                                                if ($rw['id'] == $rew['quality']) {
                                            ?>
                                                    <option value="<?php echo $rw['id']; ?> " selected><?php echo $rw['name']; ?></option>
                                                <?php
                                                } else {
                                                ?>
                                                    <option value="<?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                        <span style="color:red" id="pquality_name_error"> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label required">Sub Quality</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="psub_quality" id="psub_quality">
                                            <option value="<?php echo $rew['sub_quality']; ?>"> <?php echo $rew['sub_quality']; ?> </option>
                                            <?php
                                            $sql1 = "select * from sub_quality";
                                            $rk = mysqli_query($conn, $sql1);
                                            while ($rw = mysqli_fetch_array($rk)) {
                                                if ($rw['id'] == $rew['sub_quality']) {
                                            ?>
                                                    <option value="<?php echo $rw['id']; ?> " selected><?php echo $rw['name']; ?></option>
                                                <?php
                                                } else {
                                                ?>
                                                    <option value="<?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                        <span style="color:red" id="psubquality_name_error"> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label required">Printing Type</label>
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
                                <label class="col-sm-3 col-form-label required">Color</label>
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
                        
                        <div class="col-md-5">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label required">Selected Colors</label>
                                <div class="col-sm-9">
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
                                        <input type="number" class="form-control" name="pwidth" id="pwidth" value="<?php echo $rew['width']; ?>">
                                        <span style="color:red" id="pwidth_name_error"> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label required">Height</label>
                                    <div class="col-sm-7">
                                        <input type="number" class="form-control" name="pheight" id="pheight" value="<?php echo $rew['height']; ?>">
                                        <span style="color:red" id="pheight_name_error"> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label required">Gauge</label>
                                    <div class="col-sm-7">
                                        <input type="number" class="form-control" name="pgauge" id="pgauge" value="<?php echo $rew['gauge']; ?>">
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
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label required">Type</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="pfolding_type" id="pfolding_type">
                                            <option value="<?php echo $rew['folding_type']; ?>"> <?php echo $rew['folding_type']; ?> </option>
                                            <?php
                                            $sql1 = "select * from folding_type";
                                            $rk = mysqli_query($conn, $sql1);
                                            while ($rw = mysqli_fetch_array($rk)) {
                                                if ($rw['id'] == $rew['folding_type']) {
                                            ?>
                                                    <option value="<?php echo $rw['id']; ?> " selected><?php echo $rw['name']; ?></option>
                                                <?php
                                                } else {
                                                ?>
                                                    <option value="<?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                        <span style="color:red" id="pfolding_name_error"> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label required">Value</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="pfolding_value" id="pfolding_value" value="<?php echo $rew['folding_value']; ?>">
                                        <span style="color:red" id="pfolding_value_error"> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label required">Cutting </label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="pcutting" id="pcutting">
                                            <option value="<?php echo $rew['cutting']; ?>"><?php echo $rew['cutting']; ?></option>
                                            <?php
                                            $sql1 = "select * from cutting";
                                            $rk = mysqli_query($conn, $sql1);
                                            while ($rw = mysqli_fetch_array($rk)) {
                                                if ($rw['id'] == $rew['cutting']) {
                                            ?>
                                                    <option value="<?php echo $rw['id']; ?> " selected><?php echo $rw['name']; ?></option>
                                                <?php
                                                } else {
                                                ?>
                                                    <option value="<?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                        <span style="color:red" id="pcutting_name_error"> </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label required">Punching </label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="ppunching" id="ppunching">
                                            <option value="<?php echo $rew['punching']; ?>"><?php echo $rew['punching']; ?></option>
                                            <?php
                                            $sql1 = "select * from punching";
                                            $rk = mysqli_query($conn, $sql1);
                                            while ($rw = mysqli_fetch_array($rk)) {
                                                if ($rw['id'] == $rew['punching']) {
                                            ?>
                                                    <option value="<?php echo $rw['id']; ?> " selected><?php echo $rw['name']; ?></option>
                                                <?php
                                                } else {
                                                ?>
                                                    <option value="<?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                        <span style="color:red" id="ppunching_name_error"> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label required">Treatment </label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="ptreatment" id="ptreatment">
                                            <option value="<?php echo $rew['treatment']; ?>"><?php echo $rew['treatment']; ?></option>
                                            <?php
                                            $sql1 = "select * from treatment";
                                            $rk = mysqli_query($conn, $sql1);
                                            while ($rw = mysqli_fetch_array($rk)) {
                                                if ($rw['id'] == $rew['treatment']) {
                                            ?>
                                                    <option value="<?php echo $rw['id']; ?> " selected><?php echo $rw['name']; ?></option>
                                                <?php
                                                } else {
                                                ?>
                                                    <option value="<?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                        <span style="color:red" id="ptreatment_name_error"> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label required">Package </label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="ppackage" id="ppackage">
                                            <option value="<?php echo $rew['package']; ?>"><?php echo $rew['package']; ?></option>
                                            <?php
                                            $sql1 = "select * from package";
                                            $rk = mysqli_query($conn, $sql1);
                                            while ($rw = mysqli_fetch_array($rk)) {
                                                if ($rw['id'] == $rew['package']) {
                                            ?>
                                                    <option value="<?php echo $rw['id']; ?> " selected><?php echo $rw['name']; ?></option>
                                                <?php
                                                } else {
                                                ?>
                                                    <option value="<?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                        <span style="color:red" id="ppackage_name_error"> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label required">Delivery </label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="pdelivery" id="pdelivery">
                                            <option value="<?php echo $rew['delivery']; ?>"><?php echo $rew['delivery']; ?></option>
                                            <?php
                                            $sql1 = "select * from delivery";
                                            $rk = mysqli_query($conn, $sql1);
                                            while ($rw = mysqli_fetch_array($rk)) {
                                                if ($rw['id'] == $rew['delivery']) {
                                            ?>
                                                    <option value="<?php echo $rw['id']; ?> " selected><?php echo $rw['name']; ?></option>
                                                <?php
                                                } else {
                                                ?>
                                                    <option value="<?php echo $rw['id']; ?> "><?php echo $rw['name']; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                        <span style="color:red" id="pdelivery_name_error"> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="text-center">
                    <a href="index.php" class="btn btn-primary">
                        Back
                    </a>
                    <!-- <a href="crm_order_form.php?id=<?php // echo $id; ?>" class="btn btn-primary">
                        Order
                    </a> -->
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function myFun() {

        var selectedOption = document.querySelector('input[name="branding"]:checked').value;

        if (selectedOption === "Plain") {
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
        } else
        if (selectedOption === "Printing") {
            alert("There was an error!");
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
        }
    }
</script>



<?php
include('footer.php');
?>