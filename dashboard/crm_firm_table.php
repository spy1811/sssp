<?php
include('config.php');
include('header.php');
error_reporting(0);
?>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Firms Details</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">
    <a href="crm_firm.php" class="btn btn-primary" style="float:right;">Add Firm</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Firm Name</th>
                        <th>Address</th>
                        <!-- <th>Customer Name</th> -->
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Firm Name</th>
                        <th>Address</th>
                        <!-- <th>Customer Name</th> -->
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    
                    $sql = "select * from firm order by id desc";
                    $rs = mysqli_query($conn, $sql);
                    $cnt=1;
                    while ($rw = mysqli_fetch_row($rs)) {
                        echo "<tr>";
                        echo "<td> $cnt </td>";
                        echo "<td> $rw[1] </td>";
                        echo "<td> $rw[2] </td>";
                        echo "<td><a href='crm_firm_delete.php?id=$rw[0]'><div class='btn btn-danger'>Delete</div></a></td>";
                        echo "<td><a href='crm_firm_update.php?id=$rw[0]'><div class='btn btn-warning'>Update</div></a></td>";
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