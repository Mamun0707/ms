<?php include('include/header.php') ; ?>
<link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css" rel="stylesheet">
 
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>
<link href="https://cdn.datatables.net/v/bs5/dt-2.0.8/datatables.min.css" rel="stylesheet">
 
<script src="https://cdn.datatables.net/v/bs5/dt-2.0.8/datatables.min.js"></script>

<div class="container-fluid">
    <h4 class="page-header"><small></small></h4>

    <!-- Basic Bootstrap Table -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">My Order</h5>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#SL</th>
                            <th>Bill First Name</th>
                            <th>Bill Last Name</th>
                            <th>Bill Phone</th>
                            <th>Total Amount</th>
                            <th>Discount</th>
                            <th>Total Qty</th>
                            <th>Transaction ID</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $result=$mysqli->common_select('orders');
                            if($result){
                                if($result['data']){
                                    $i=1;
                                    foreach($result['data'] as $data){
                        ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $data->bill_first_name ?></td>
                            <td><?= $data->bill_last_name ?></td>
                            <td><?= $data->bill_phone ?></td>
                            <td><?= $data->total_amount ?></td>
                            <td><?= $data->discount ?></td>
                            <td><?= $data->total_qty ?></td>
                            <td><?= $data->transaction_id ?></td>
                            <td>
                                <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                    <div class="dropdown-menu">
                                        <a href="invoice.php?txnid=<?= $data->transaction_id ?? "" ?>" class="btn btn-success">Invoice</a>
                                        <a href="<?= $baseurl ?>orders_delete.php?id=<?= $data->id ?>" class="btn btn-danger">Delete</a>
                                        <!-- <a class="dropdown-item " href="<?= $baseurl ?>orders_delete.php?id=<?= $data->id ?>"
                                        ><i class="btn btn-success bx bx-trash me-2"></i> Delete</a
                                        > -->
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php } } } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->

</div>
<!-- / Content -->

<?php include('include/footer.php') ; ?>
