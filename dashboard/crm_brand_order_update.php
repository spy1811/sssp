<?php
include('config.php');
include('header.php');
?>
<?php

error_reporting(0);

$uid = $_GET['id'];
$sql1 = "SELECT co.*, c.name, f.firm_name FROM customer_order co INNER JOIN ( SELECT id, name FROM customer ) c ON c.id = co.cname INNER JOIN firm f ON co.firm = f.id where co.id=$uid";
$res = mysqli_query($conn, $sql1);
$rew = mysqli_fetch_array($res);
?>
<?php

if (isset($_POST['submit'])) {
    /* $cname = $_POST['customer_name'];
    $firm = $_POST['firm'];
    $quantity = $_POST['quantity'];
    $rate = $_POST['rate'];
    $total_value = $_POST['total_value'];
    $date = $_POST['date'];
    $note = $_POST['note']; */
    $status = $_POST['status'];

    $sql = "update customer_order set status='$status' where id=$uid";

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
            <form class="form-sample" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Customer Name </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="customer_name" id="customer_name" value="<?php echo $rew['name']; ?>" readonly>
                                <span style="color:red"> </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label ">Firm Name </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="firm" id="firm" value="<?php echo $rew['firm_name']; ?>" readonly>
                                <span style="color:red"> </span>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label required">Quantity </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="quantity" id="quantity" onchange="updateTotalAmount()" value="<?php echo $rew['quantity']; ?>" readonly>
                                <span style="color:red"> </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">In </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="" id="" placeholder="Kg's"  readonly>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label ">Rate/Kg</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control qty" name="rate" id="rate" onchange="updateTotalAmount()" value="<?php echo $rew['rate']; ?>" readonly>
                                <span style="color:red"> </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label ">Total Amount</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="total_value" id="totalAmount" value="<?php echo $rew['total_value']; ?>" readonly>
                                <span style="color:red"> </span>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label required">Due Date </label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="date" id="date" value="<?php echo $rew['date']; ?>"readonly>
                                <span style="color:red"> </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label"> Delivery Note </label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="note" id="firm" id="" cols="30" rows="1" readonly> <?php echo $rew['note']; ?></textarea>

                                <span style="color:red"> </span>
                            </div>
                        </div>
                    </div>
                </div>

                <br><br>

                <div class="row d-flex justify-content-center">
                    <div class="col-md-4">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label font-weight-bold">Status</label>
                            <div class="col-sm-9">
                                <select name="status" id="status" class="form-control">
                                    <option value="<?php echo $rew['status']; ?>"><?php echo $rew['status']; ?></option>
                                    <option value="Completed">Completed</option>
                                </select>
                                <span style="color:red"> </span>
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="text-center">
                    <a href="index.php" class="btn btn-primary">Back</a>
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

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