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
                            <th>Total Amount</th>
                            <th>Discount</th>
                            <th>Total Qty</th>
                            <th>Transaction ID</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $status=array("Pending","Processing","Delivered","Canceled");
                            $con['customer_id']=$_SESSION['user_data']->id;
                            $result=$mysqli->common_select('orders','*',$con);
                            if($result){
                                if($result['data']){
                                    $i=1;
                                    foreach($result['data'] as $data){
                        ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $data->total_amount ?></td>
                            <td><?= $data->discount ?></td>
                            <td><?= $data->total_qty ?></td>
                            <td><?= $data->transaction_id ?></td>
                            <td><?= $status[$data->status] ?></td>
                            <td>
                                <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="invoice.php?txnid=<?= $data->transaction_id ?? "" ?>"><i class="bx bx-edit-alt me-2"></i> Invoice</a>
                                        <?php if($data->cancel_request==0){ ?>
                                        <a class="dropdown-item" href="<?= $baseurl ?>cencel_request.php?id=<?= $data->id ?>"><i class="bx bx-trash me-2"></i> Cancel</a>
                                        <?php }else if($data->status==0){ ?>
                                            <a class="dropdown-item" href="#"><i class="bx bx-trash me-2"></i> waiting for admin approval</a>
                                       <?php  } ?>
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
