<?php
include('config.php');
include('header.php');
error_reporting(0);
?>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Brands Details</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">
    <a href="crm_brand_plain.php" class="btn btn-primary" style="float:right;">Add Brand</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                    <tr>
                        <th>ID</th>
                        <th>Customer Name</th>
                        <th>Brand Type</th>
                        <th>Brand Name</th>
                        <th>Width</th>
                        <th>Height</th>
                        <th>Gauge</th>
                        <th>Show</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Customer Name</th>
                        <th>Brand Type</th>
                        <th>Brand Name</th>
                        <th>Width</th>
                        <th>Height</th>
                        <th>Gauge</th>
                        <th>Show</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    
                    $sql = "SELECT b.*, c.name FROM branding b INNER JOIN ( SELECT id, name FROM customer ) c ON c.id = b.customer_name ORDER BY b.id DESC";
                    $rs = mysqli_query($conn, $sql);
                    $cnt = 1;
                    while ($rw = mysqli_fetch_array($rs)) {
                        echo "<tr>";
                        echo "<td> $cnt </td>";
                        echo "<td>". $rw['name'] ."</td>";
                        echo "<td>". $rw['branding'] ."</td>";
                        echo "<td>". $rw['brand_name'] ."</td>";
                        echo "<td>". $rw['width'] ."</td>";
                        echo "<td>". $rw['height'] ."</td>";
                        echo "<td>". $rw['gauge'] ."</td>";
                        echo "<td><a href='crm_brand_update.php?id=$rw[0]'><div class='btn btn-warning'>Show</div></a></td>";
                        echo "<td><a href='crm_brand_delete.php?id=$rw[0]'><div class='btn btn-danger'>Delete</div></a></td>";
                        echo "</tr>";
                        $cnt++;
                    }
                    ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>

<?php
include('footer.php');
?>