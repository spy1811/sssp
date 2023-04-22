<?php
include('config.php');
include('header.php');
?>

<div class="col-8 grid-margin mx-auto ">
    <div class="card">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">Select Customer</h3>
        </div>
        <div class="card-body">

        <input type="hidden" class="form-control" name="id">
            <form class="form-sample" method="post">
                <br>
                <div class="row">
                    
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-8">
                                <a href="./crm_customer.php" class="btn btn-primary">
                               New Customer
                                </a>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-8">
                                <a href="./crm_order_form.php" class="btn btn-primary">
                               Old Customer
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>

</div>



<?php
include('footer.php');
?>