<?php include('include/header.php') ; ?>
<link href="https://cdn.datatables.net/v/bs5/dt-2.0.8/datatables.min.css" rel="stylesheet">
 
<script src="https://cdn.datatables.net/v/bs5/dt-2.0.8/datatables.min.js"></script>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">stock /</span> List</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <h5 class="card-header">
                stock
                <button type="button" class="btn btn-primary float-end" onclick="print_file()"> Print </button>
            </h5>
            
            <div class="table-responsive text-nowrap" id="print_area">
                <table class="table">
                    <thead>
                        <tr>
                        <th>#SL</th>
                        <th>Medicine</th>
                        <th>In</th>
                        <th>Out</th>
                        <th>Balance</th>
                        <th>price</th>
                        </tr>
                    </thead>
                <tbody class="table-border-bottom-0">
                    <?php 
                        $stockin=$stockout=$balance=$price=0;
                        $result=$mysqli->common_select_query("SELECT sum(if(stock.qty > 0,qty,0)) as stockin,
                                                                    sum(if(stock.qty < 0,qty,0)) as stockout,
                                                                    sum(stock.qty) as balance,AVG(stock.price) as price,
                                                                     medicine.brand_name FROM `stock`
                                                                JOIN medicine on medicine.id=stock.medicine_id
                                                                group by medicine_id");
                        if($result){
                            if($result['data']){
                                $i=1;
                                foreach($result['data'] as $data){
                                    $stockin+=$data->stockin;
                                    $stockout+=abs($data->stockout);
                                    $balance+=$data->balance;
                                    $price+=($data->price * $data->balance);
                    ?>
                    <tr>
                    
                        <td><?= $i++ ?></td>
                        <td><?= $data->brand_name ?></td>
                        <td><?= $data->stockin ?></td>
                        <td><?= abs($data->stockout) ?></td>
                        <td><?= $data->balance ?></td>
                        <td>BDT <?= $data->price * $data->balance ?></td>
                    </tr>

                    <?php } } } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th></th>
                        <th>Total</th>
                        <th><?= $stockin ?></th>
                        <th><?= $stockout ?></th>
                        <th><?= $balance ?></th>
                        <th>BDT <?= $price ?></th>
                    </tr>
                </tfoot>
                </table>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->
    </div>
            <!-- / Content -->
<?php include('include/footer.php') ; ?>
<script>
    const print_file = () => {
        let data = document.getElementById("print_area").innerHTML;
        var mywindow = window.open('', 'new div', 'height=400,width=600');
        mywindow.document.write('<html><head><title></title>');
        mywindow.document.write('<link rel="stylesheet" href="<?= $baseurl ?>/assets/vendor/css/core.css" type="text/css" />');
        mywindow.document.write('</head><body ><h1 class="ps-5 mt-5">Stock list</h1>');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');
        mywindow.document.close();
        mywindow.focus();
        mywindow.onload=function(){
            mywindow.print();
            mywindow.close();
        };
        

    }
</script>
