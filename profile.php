<?php include('include/header.php') ; ?>

<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
    <!-- <h4 class="py-3 mb-4"><span class="text-muted fw-light">My Profile</h4> -->
    <?php 
        $olddata=array();
       
        $result=$mysqli->common_select_single('customer');
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
            <h5 class="mb-0">My Profile</h5>
        </div>
        <div class="card-body">
            <form method="post" action="" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label" for="fullname">First Name</label>
                    <input type="text" name="first_name" class="form-control" id="first_name" placeholder="John Doe" value="<?= $olddata->first_name ?>" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="fullname">Last Name</label>
                    <input type="text" name="last_name" class="form-control" id="last_name" placeholder="John Doe" value="<?= $olddata->last_name ?>" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="fullname">Company Name</label>
                    <input type="text" name="company_name" class="form-control" id="company_name" placeholder="John Doe" value="<?= $olddata->company_name ?>" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="fullname">Address</label>
                    <input type="text" name="address" class="form-control" id="address" placeholder="John Doe" value="<?= $olddata->address ?>" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="fullname">State</label>
                    <input type="text" name="state" class="form-control" id="state" placeholder="John Doe" value="<?= $olddata->state ?>" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">E-mail</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="abc@email.com" value="<?= $olddata->email ?>" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="abc@email.com" value="<?= $olddata->phone ?>" required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="contact ">Contact</label>
                    <input type="text" name="contact" id="contact" class="form-control" placeholder="Enter Your Contact Number" value="<?= $olddata->contact ?>" />
                </div>
                <!-- <div class="mb-3">
                    <label class="form-label" for="photo">Photo</label>
                    <input type="file" name="photo" id="photo" class="form-control" required value="<?= $olddata->photo ?>" />
                </div> -->
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
            <?php 
                if($_POST){
                    $_POST['updated_at']=date('Y-m-d H:i:s');
                    $_POST['updated_by']=1;
                    $rs=$mysqli->common_create('customer',$_POST);
                    if($rs){
                        if($rs['data']){
                            echo "<script>window.location='{$baseurl}index.php'</script>";
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