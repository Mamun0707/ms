<?php include('include/connection.php') ; ?>
<?php 
    $olddata=array();
    $con['id']=$_GET['id'];
    $data['cancel_request']=1;
    $data['updated_by']=1;
    $rs=$mysqli->common_update('orders',$data,$con);
    if($rs){
        if($rs['data']){
            echo "<script>window.location='{$baseurl}my_order.php'</script>";
        }else{
            echo $rs['error'];
        }
    }
    
?>
     