<?php include('include/header.php') ; ?>

<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">medicine/</span> Update</h4>
    <?php 
        $olddata=array();
        $con['id']=$_GET['id'];
        $result=$mysqli->common_select_single('orders','*',$con);
        if($result){
            if($result['data']){
                $olddata=$result['data'];
            }
        }
    ?>
    <!-- Basic Layout -->
    <div class="row">
    <div class="col-xl">
        <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Order Information</h5>
        </div>
        <div class="card-body">
            <form method="post" action="" enctype="multipart/form-data">
                
                 <div class="mb-3">
                    <label class="form-label" for="status">Status</label>
                    <select class="form-control form-select" required name="status" id="status">
                        <option value="">Select Status</option>
                        <?php 
                            $status=array("Pending","Processing","Delivered","Canceled");
                            foreach($status as $k=>$v){
                        ?>
                            <option value="<?= $k ?>" <?= $k==$olddata->status ? "selected" :"" ?>> <?= $v ?></option>
                        <?php } ?>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
            <?php 
                if($_POST){
                    $_POST['updated_at']=date('Y-m-d H:i:s');
                    $_POST['updated_by']=1;
                    $rs=$mysqli->common_update('orders',$_POST,$con);
                    if($rs){
                        if($rs['data']){
                            echo "<script>window.location='{$baseurl}orders_list.php'</script>";
                        }else{
                            echo $rs['error'];
                        }
                    }
                }
            ?>
        </div>
        </div>
    </div>
    
    </div>
</div>
<!-- / Content -->

<?php include('include/footer.php') ; ?>