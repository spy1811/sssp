<?php
include('config.php');
include('header.php');
error_reporting(0);
?>
<?php

$sql1 = "select * from branding";
$res = mysqli_query($conn, $sql1);
$rew = mysqli_fetch_array($res);
?>
<?php

if (isset($_POST['submit'])) {
    $cname = $_POST['customer_name'];
    $firm = $_POST['firm'];
    $branding = $_POST['branding'];
    $quantity = $_POST['quantity'];
    $rate = $_POST['rate'];
    $total_value = $_POST['total_value'];
    $advance = $_POST['advance'];
    $date = $_POST['date'];
    $note = $_POST['note'];
    $saleman = $_SESSION['nameuser'];
    $sql = "insert into customer_order(cname, firm, branding,quantity, rate, total_value, advance, date, note,salesman) values('$cname', '$firm','$branding','$quantity', '$rate', '$total_value', '$advance', '$date', '$note','$saleman')";
    

    $run = mysqli_query($conn, $sql);
    if ($run) {
        echo "<script>window.location='index.php';</script>";
    } else {
        echo "error" . $conn;
    }
}

?>


<div class="col-12 grid-margin mx-auto ">
    <div class="card">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">Place Order</h3>
        </div>
        <br>
        <div class="card-body">
            <form class="form-sample" method="post" onSubmit="return myFun()">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Customer Name </label>
                            <div class="col-sm-9">

                                <?php

                                if (!isset($_SESSION['customer_id'])) {
                                ?>
                                    <select class="form-control customername" name="customer_name" id="custname" onchange="myfirm(this.value)">
                                        <option value="">Select Customer</option>
                                        <?php
                                        $sql1 = "select * from customer";
                                        $rk = mysqli_query($conn, $sql1);
                                        while ($rw = mysqli_fetch_array($rk)) {

                                        ?>
                                            <option value="<?php echo $rw['id']; ?>"><?php echo $rw['name']; ?></option>

                                        <?php
                                        }

                                        ?>
                                    </select>
                                    <span id="custname_name_error" style="color:red"></span>
                                <?php
                                } else {
                                    $id = $_SESSION['customer_id'];
                                    $sql = "select id,name from customer where id=$id";
                                    $res = mysqli_query($conn, $sql);
                                    $rt = mysqli_fetch_row($res);
                                    $n = $rt[1];
                                    $idd = $rt[0];
                                ?>
                                    <input type="text" value="<?php echo  $n; ?>" id="custname" class="form-control" readonly>
                                    <input type="hidden" value="<?php echo $idd; ?>" id="custname" name="customer_name">
                                <?php
                                }
                                ?>
                                <span id="custname_name_error" style="color:red"></span>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label ">Firm Name </label>
                            <div class="col-sm-9">
                                <?php

                                if (!isset($_SESSION['customer_id'])) {
                                ?>
                                    <select class="form-control" name="firm" id="firm" onchange="mybrand(this.value)">
                                        <option value="">Select Firm</option>

                                    </select>
                                    <span id="firm_name_error" style="color:red"></span>
                                <?php
                                } else {
                                    $cid = $_SESSION['customer_id'];
                                    $q = "select id,firm_name from firm where cid=$cid";
                                    $result = mysqli_query($conn, $q);
                                    $ret = mysqli_fetch_row($result);
                                    $cn = $ret[1];
                                    $iddd = $ret[0];
                                ?>
                                    <input type="text" value="<?php echo  $cn; ?>" class="form-control" id="firm" readonly>
                                    <input type="hidden" name="firm" id="firm" value="<?php echo $iddd; ?>">
                                <?php
                                }
                                ?>
                                <span id="firm_name_error" style="color:red"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label ">Branding </label>
                            <div class="col-sm-9">
                                <?php

                                if (!isset($_SESSION['customer_id'])) {
                                ?>
                                    <select class="form-control branding" name="branding" id="brand" onchange="mydata(this.value)">
                                        <option value=""> Select Branding</option>

                                    </select>
                                    <span id="brand_name_error" style="color:red"></span>
                                <?php
                                } else {
                                    $bid = $_SESSION['customer_id'];
                                    $btype = $_SESSION['branding'];
                                    /* echo $btype;
                                exit(); */
                                    $sql = "select * from branding where branding='$btype' && customer_name=$bid";
                                    $bres = mysqli_query($conn, $sql);
                                    $rt = mysqli_fetch_row($bres);
                                    $bn = $rt[3];
                                    $wn = $rt[10];
                                    $hn = $rt[11];
                                    $gn = $rt[12];
                                    /* $idd=$rt[0]; */
                                ?>
                                    <input type="text" class="form-control" name="branding" id="brand" value="<?php echo   $bn . '(' . $wn . 'x' . $hn . 'x' . $gn . ')'; ?>">
                                    <!-- <input type="hidden" value="<?php /* echo $idd; */ ?>" > -->
                                <?php
                                }
                                ?>
                                <span id="brand_name_error" style="color:red"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <br>






                <div id="Printing" style="display:none;" >
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label required">Brand Name </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="pbrand_name" id="pbrand_name" value="" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label required">Image</label>
                                <div class="col-sm-9">
                                    <img src="image/" alt="" id="bimg" style="height: 100px; width: 200px"><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label required">Rubber Status </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="prubber" id="prubber" value="" disabled>
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
                                    <input type="text" class="form-control" name="pprinting" id="pprinting" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label required">Selected Colors</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="colors" id="colors" disabled>
                                    <span style="color:red" id="colors_name_error"> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label required">Quality </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="pquality" id="pquality" value="" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label required">Sub Quality</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="psubquality" id="psubquality" value="" disabled>
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
                                    <input type="number" class="form-control" name="pwidth" id="pwidth" value="" disabled>
                                    <span style="color:red" id="pwidth_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label required">Height</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="pheight" id="pheight" value="" disabled>
                                    <span style="color:red" id="pheight_name_error"> </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                                <label class="col-sm-5 col-form-label required">Gauge</label>
                                <div class="col-sm-7">
                                    <input type="number" class="form-control" name="pgauge" id="pgauge" value="" disabled>
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
                                    <input type="text" class="form-control" name="pfolding_type" id="pfolding_type" value="" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label required">Value</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="pfolding_value" id="pfolding_value" value="" disabled>
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
                                    <input type="text" class="form-control" name="pcutting" id="pcutting" value="" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label required">Punching </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="ppunching" id="ppunching" value="" disabled>
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
                                    <input type="text" class="form-control" name="ptreatment" id="ptreatment" value="" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label required">Package </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="ppackage" id="ppackage" value="" disabled>
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
                                    <input type="text" class="form-control" name="pdelivery" id="pdelivery" value="" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                




                <!-- Place Order Start -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label required">Quantity </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="quantity" id="quantity" onchange="updateTotalAmount()">
                                <span id="quantity_name_error" style="color:red"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">In </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="" id="" placeholder="Kg's" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label ">Rate/Kg</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control qty" name="rate" id="rate" onchange="updateTotalAmount()">
                                <span id="rate_name_error" style="color:red"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label ">Total Amount</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="total_value" id="totalAmount" readonly>
                                <span id="totalAmount_name_error" style="color:red"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label required">Advance </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="advance" id="advance" value="0">
                                <span id="advance_error" style="color:red"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label required">Due Date </label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="date" id="date" value="">
                                <span id="date_name_error" style="color:red"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label"> Delivery Note </label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="note" id="note" cols="30" rows="1"></textarea>
                                <span id="note_name_error" style="color:red"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Place order end -->
                <div class="text-center">
                    <!-- <a href="crm_brand_update.php" class="btn btn-primary">Back</a> -->
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>


<script>
    function myFun() {

        var custname = document.getElementById('custname').value;
        var firm = document.getElementById('firm').value;
        var brand = document.getElementById('brand').value;
        var quantity = document.getElementById('quantity').value;
        var rate = document.getElementById('rate').value;
        var totalAmount = document.getElementById('totalAmount').value;
        var advance = document.getElementById('advance').value;
        var date = document.getElementById('date').value;
        var note = document.getElementById('note').value;


        if (custname == "") {
            document.getElementById("custname_name_error").innerHTML = "**Customer name Field Cannot be Empty";
            return false;
        } else if (firm == "") {
            document.getElementById("custname_name_error").innerHTML = "";
            document.getElementById("firm_name_error").innerHTML = "**Details Field Cannot be Empty";
            return false;
        } else if (brand == "") {
            document.getElementById("firm_name_error").innerHTML = "";
            document.getElementById("brand_name_error").innerHTML = "**Details Field Cannot be Empty";
            return false;
        } else if (quantity == "") {
            document.getElementById("brand_name_error").innerHTML = "";
            document.getElementById("quantity_name_error").innerHTML = "**Details Field Cannot be Empty";
            return false;
        } else if (rate == "") {
            document.getElementById("quantity_name_error").innerHTML = "";
            document.getElementById("rate_name_error").innerHTML = "**Details Field Cannot be Empty";
            return false;
        } else if (totalAmount == "") {
            document.getElementById("rate_name_error").innerHTML = "";
            document.getElementById("totalAmount_name_error").innerHTML = "**Details Field Cannot be Empty";
            return false;
        } else if (advance == "") {
            document.getElementById("totalAmount_name_error").innerHTML = "";
            document.getElementById("advance_error").innerHTML = "**Advance Field Cannot be Empty or '0' ";
            return false;
        }else if (date == "") {
            document.getElementById("rate_name_error").innerHTML = "";
            document.getElementById("date_name_error").innerHTML = "**Details Field Cannot be Empty";
            return false;
        } else if (note == "") {
            document.getElementById("date_name_error").innerHTML = "";
            document.getElementById("note_name_error").innerHTML = "**Details Field Cannot be Empty";
            return false;
        } else {
            return true;
        }

    }
</script>

<script>
    function calculateTotalAmount() {
        // Get the quantity and rate inputs
        const quantityInput = document.getElementById("quantity");
        const rateInput = document.getElementById("rate");

        // Convert the inputs to numbers
        const quantity = Number(quantityInput.value);
        const rate = Number(rateInput.value);

        // Calculate the total amount
        const totalAmount = quantity * rate;

        // Display the total amount
        const totalAmountOutput = document.getElementById("totalAmount");
        totalAmountOutput.value = totalAmount;
    }

    function updateTotalAmount() {
        // Check if both quantity and rate inputs have values
        const quantityInput = document.getElementById("quantity");
        const rateInput = document.getElementById("rate");
        if (quantityInput.value && rateInput.value) {
            calculateTotalAmount();
        } else {
            // If either input is empty, clear the total amount output
            const totalAmountOutput = document.getElementById("totalAmount");
            totalAmountOutput.value = "";
        }
    }
</script>


<?php
include('footer.php');
?>
<script>
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

    function mybrand(datavalue) {
        var cust = $('.customername').val();
        console.log(cust);
        var data = {
            datapost: datavalue,
            cust: cust
        };

        $.ajax({
            url: 'fetchbrand.php',
            type: 'POST',
            data: data,

            success: function(result) {
                console.log(result);
                $('#brand').html("" + result);
                //$('#psub_quality').html("" + result);
            }
        });
    }

    //to fetch all data of customer
    function mydata(datavalue) {
        var brand = $('.branding').val();
        console.log(brand);
        // var data = {
        //     datapost: datavalue,
        //     brand: brand
        // };

        $.ajax({
            url: 'fetchdata.php?bid=' + brand,
            type: 'get',

            success: function(result) {
                console.log(result)
                data = JSON.parse(result);
                console.log("test",data);

                if(data.ptype === "Printing") {
                    $('#Printing').css('display', 'block');
                }
                else if (data.ptype == "Plain") {
                    $("#Printing").css("display", "none");
                }


                $("#pwidth").val(data.width);
                $("#pheight").val(data.height);
                $("#pgauge").val(data.gauge);
                $("#pfolding_value").val(data.foldingvalue);


                $("#pquality").val(data.qname);
                $('#psubquality').val(data.sqname);
                $("#pfolding_type").val(data.ftname);
                $("#pcutting").val(data.cutting);
                $("#ppunching").val(data.punching);
                $("#ptreatment").val(data.treatment);
                $("#ppackage").val(data.package);
                $("#pdelivery").val(data.delivery);

                $("#bimg").attr("src", "image/" + data.img);
                $("#pbrand_name").val(data.bname);
                $("#prubber").val(data.rubber);
                $("#pprinting").val(data.printingtype);
                $("#colors").val(data.color);
                

            }
        });
        // alert("Welcome");
    }
</script>

<?php

session_start();
unset($_SESSION['customer_id']);
unset($_SESSION['branding']);
unset($_SESSION['firm_id']);
?>