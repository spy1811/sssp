<?php
error_reporting(0);
include('config.php');
include('header.php');

?>
<?PHP

if (!isset($_SESSION['username'])) {
    header("location:login/loginform.php");
}
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h2 mb-0 text-gray-800">Dashboard</h1>
</div>


<!-- Filter Form Starts -->
<div class="row">
    <div class="col-lg-6">
        <div class="card-body">
            <label for="branding" class="h5 font-weight-bold">Filter by Branding:</label>
            <select name="branding" id="branding" class="form-control">
                <option value="">All</option>
                <option value="Plain">Plain</option>
                <option value="Printing">Printing</option>
            </select>
            <br>
        </div>
    </div>


    <div class="col-lg-6">
        <div class="card-body">
            <label for="status" class="h5 font-weight-bold">Filter by Order Status:</label>
            <select name="status" id="status" class="form-control">
                <option value="">All</option>
                <option value="Pending">Pending</option>
                <option value="Completed">Completed</option>
            </select>
            <br>
        </div>
    </div>
</div>
<!-- Filter Form Ends -->



<!-- DataTales Example -->

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary">Customer Order </h4>
    </div>


    <div class="card-body">
        <div class="table-responsive tableData">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Customer Name</th>
                        <th>Firm</th>
                        <th>Branding</th>
                        <th>Quantity In Kg</th>
                        <th>Rate</th>
                        <th>Total Amount</th>
                        <th>Advance</th>
                        <th>Due Date</th>
                        <th>Note</th>
                        <th>Status</th>
                        <th>SalesMan Name</th>
                        <th>Edit</th>
                    </tr>
                </thead>


                <tbody>


                    <?php

                    $qtykg = 0;

                    $sql1 = "SELECT co.*, c.name, f.firm_name, b.branding as branding_name FROM customer_order co INNER JOIN ( SELECT id, name FROM customer ) c ON c.id = co.cname INNER JOIN firm f ON co.firm = f.id Inner Join branding b on co.branding=b.id ";

                    /* $order = "ORDER BY co.id DESC"; */

                    $rs = mysqli_query($conn, $sql1);
                    $cnt = 1;
                    while ($rw = mysqli_fetch_array($rs)) {
                        $qtykg = $qtykg + $rw['quantity'];
                        echo "<tr>";
                        echo "<td> $cnt </td>";
                        echo "<td>" . $rw['name'] . "</td>";
                        echo "<td>" . $rw['firm_name'] . " </td>";
                        echo "<td>" . $rw['branding_name'] . "</td>";
                        echo "<td>" . $rw['quantity'] . "</td>";
                        echo "<td>" . $rw['rate'] . "</td>";
                        echo "<td>" . $rw['total_value'] . "</td>";
                        echo "<td>" . $rw['advance'] . "</td>";
                        echo "<td>" . $rw['date'] . "</td>";
                        echo "<td>" . $rw['note'] . "</td>";
                        echo "<td>" . $rw['status'] . "</td>";
                        echo "<td>" . $rw['salesman'] . "</td>";

                        if($rw['status']=="Pending")
                        {
                        echo "<td><a href='crm_brand_order_update.php?id=$rw[0]'><div class='btn btn-success'>Edit</div></a></td>";
                        }
                        else{
                            "<td><a href='crm_brand_order_update.php?id=$rw[0]'><div class='btn btn-success'></div></a></td>";
                        }
                        echo "</tr>";

                        $cnt++;
                    }
                    echo "<tr><th colspan='4'>Quantity In Kg</th><td>$qtykg</td></tr>";

                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- filter by brand -->

<script type="text/javascript">
    $(document).ready(function() {
        $("#branding").on('change', function() {
            var value = $(this).val();
            //alert(value);

            $.ajax({
                url: "fetchtable.php",
                type: "POST",
                data: 'request=' + value,
                /* beforeSend:function(){
                    $(".container").html("<span>Working...</span>");
                }, */
                success: function(data) {
                    $(".tableData").html(data);
                }
            });

        });
    });
</script>


<!-- filter by status -->

<script type="text/javascript">
    $(document).ready(function() {
        $("#status").on('change', function() {
            var value = $(this).val();
            //alert(value);

            $.ajax({
                url: "fetchtable1.php",
                type: "POST",
                data: 'request=' + value,
                /* beforeSend:function(){
                    $(".container").html("<span>Working...</span>");
                }, */
                success: function(data) {
                    $(".tableData").html(data);
                }
            });

        });
    });
</script>


</div>

<?php
include('footer.php');
?>