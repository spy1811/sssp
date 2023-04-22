<?php
include('config.php');

if (isset($_POST['request'])) {
    $request = $_POST['request'];

    if (empty($request)) {
        $sql1 = "SELECT co.*, c.name, f.firm_name, b.branding as branding_name FROM customer_order co INNER JOIN ( SELECT id, name FROM customer ) c ON c.id = co.cname INNER JOIN firm f ON co.firm = f.id Inner Join branding b on co.branding=b.id ";

        $result = mysqli_query($conn, $sql1);
        $count = mysqli_num_rows($result);

        ?>
        
        <!-- rest of the code -->
        
    <?php
    } else {
        $sql1 = "SELECT co.*, c.name, f.firm_name, b.branding as branding_name FROM customer_order co INNER JOIN ( SELECT id, name FROM customer ) c ON c.id = co.cname INNER JOIN firm f ON co.firm = f.id Inner Join branding b on co.branding=b.id where status='$request'";
        
        $result = mysqli_query($conn, $sql1);
        $count = mysqli_num_rows($result);

        ?>

        <!-- rest of the code -->
        
    <?php
    }
}



?>


<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <?php
    if ($count) {
    ?>
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
        <?php
    } else {
        echo "No Record found";
    }
        ?>
        </thead>
        <tbody>

            <?php

            $qtykg = 0;
            $cnt = 1;

            while ($rw = mysqli_fetch_array($result)) {
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
                echo "</tr>";

                $cnt++;
            }
            echo "<tr><th colspan='4'>Quantity In Kg</th><td>$qtykg</td></tr>";

            ?>
        </tbody>
</table>