<?php require_once('include/connection.php'); ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Sports Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="css/invoice.css">
</head>
<style>
    @import url(https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic);
        /** GLOBAL **/

        html, body {
        height: 100%;
        background-color: ;
        width: 100%;
        margin: 0;
        padding: 0;
        left: 0;
        top: 0;
        font-size: 100%;
        }
        * {
        font-family: "Lato", "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
        color: #333447;
        line-height: 1.5;
        }
        /* TYPOGRAPHY */

        h1 {
        font-size: 2.5rem;
        }
        h2 {
        font-size: 2rem;
        }
        h3 {
        font-size: 1.375rem;
        }
        h4 {
        font-size: 1.125rem;
        }
        h5 {
        font-size: 1rem;
        }
        h6 {
        font-size: 0.875rem;
        }
        p {
        font-size: 1.125rem;
        font-weight: 200;
        line-height: 1.8;
        }
        .font-light {
        font-weight: 300;
        }
        .font-regular {
        font-weight: 400;
        }
        .font-heavy {
        font-weight: 700;
        }
        /* POSITIONING */

        .left {
        text-align: left;
        }
        .right {
        float: right;
        text-align: right;
        }
        .center {
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        }
        .justify {
        text-align: justify;
        }
        /** standard padding**/

        .no-padding {
        padding: 0px;
        }
        .standard-padding {
        padding: 20px;
        }
        .standard-padding-right {
        padding-right: 20px;
        }
        .standard-padding-left {
        padding-left: 20px;
        }
        .standard-padding-right {
        padding-left: 20px;
        }
        .standard-padding-top {
        padding-top: 20px;
        }
        .standard-padding-bottom {
        padding-bottom: 20px;
        }
        .container {
        width: 100%;
        margin-left: auto;
        margin-right: auto;
        }
        .row {
        position: relative;
        width: 100%;
        }
        .row [class^="col"] {
        float: left;
        margin: 0.5rem 2%;
        min-height: 0.125rem;
        }
        .row::after {
        content: "";
        display: table;
        clear: both;
        }
        .hidden-sm {
        display: none;
        }
        .invoice-box {
        background: #ffffff;
        max-width: 900px;
        margin: 60px auto;
        padding: 30px;
        border: 1px solid #002336;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        font-size: 16px;
        line-height: 24px;
        color: #002336;
        }
        .title {
        margin-bottom: 0px;
        padding-bottom: 0px;
        margin-left: 10px;
        margin-right: 10px;
        font-weight: bold;
        border-bottom: 1px solid #8B8B8B;
        margin-bottom: 4px;
        }
        .infoblock {
        margin-left: 10px;
        margin-right: 10px;
        margin-top: 0px;
        padding-top: 0px;
        }
        .titles {
        padding-top: 4px;
        margin-top: 20px;
        background: #DCDCDC;
        font-weight: bold;
        }
        @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        }
        /** RTL **/

        .rtl {
        direction: rtl;
        font-family: "Lato", Tahoma, "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
        }
        .rtl table {
        text-align: right;
        }
        .rtl table tr td:nth-child(2) {
        text-align: left;
        }
        .eqWrap {
        display: flex;
        }
        .eq {
        padding: 10px;
        }
        .item:nth-of-type(odd) {
        background: #F9F9F9;
        }
        .item:nth-of-type(even) {
        background: #fff;
        }
        .equalHW {
        flex: 1;
        }
        .equalHM {
        width: 32%;
        }
        .equalHMR {
        width: 32%;
        margin-bottom: 2%;
        }
        table.table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
        }
        .table th, .table td {
        text-align: left;
        padding: 0.25em;
        }
        .table tr {
        border-bottom: 1px solid #DDD;
        }
        button:hover {
        box-shadow: 0 0 4px rgba(3, 3, 3, 0.8);
        opacity: 0.9;
        }
  </style>
<body>
<?php 
    $invdata=array();
    $con['transaction_id']=$_GET['txnid'];
    $result=$mysqli->common_select_single('orders','*',$con);
    if($result){
        if($result['data']){
            $invdata=$result['data'];
        }
    }
?>
<!-- Invoice 2 start -->
<div class="invoice-2 invoice-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="invoice-inner clearfix">
                    <div class="invoice-info clearfix" id="invoice_wrapper">
                        <div class="invoice-headar">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="invoice-logo">
                                        <!-- logo started -->
                                        <div >   
                                            <a href=""><img src="<?= $baseurl ?>/assets/img/illustrations/icons8-medicine-48.png" style="width:100%; max-width:70px;"></a>
                                            
                                        </div>
                                        <!-- logo ended --> 
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="invoice-logo">
                                        <!-- logo started -->
                                        <div class="logo">
                                            
                                            <h1 style="color:">MS</h1>
                                        </div>
                                        <!-- logo ended --> 
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="invoice-top">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="invoice-number mb-30">
                                        <h4 class="inv-title-1">Invoice To</h4>
                                        <b class="name"><?= $invdata->bill_first_name ?> <?= $invdata->bill_last_name ?></b><br/>
                                        <span>Phone: <?= $invdata->bill_phone ?></span><br/>
                                        <span>Email: <?= $invdata->bill_email ?></span><br/>
                                        <span>Address: <?= $invdata->bill_address ?>, <?= $invdata->bill_state ?>, <?= $invdata->bill_post ?></span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="invoice-number mb-30">
                                        <div class="invoice-number-inner">
                                            <h4 class="inv-title-1">Invoice From</h4>
                                                <b class="name">MS</b><br/>
                                                Medicine Shop BD  <br/>
                                                msbd@gmail.com <br/>
                                                Chittagong, Bangladesh <br/>
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="invoice-number mb-30">
                                        <h4 class="inv-title-1">Invoice</h4>
                                        Invoice Number: <span>#<?= str_pad($invdata->id,7,"0",STR_PAD_LEFT) ?></span><br>
                                            Invoice Date: <span><?= date('d M Y',strtotime($invdata->created_at)) ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-center">
                            <div class="table-responsive">
                                <table class="table mb-0 table-striped invoice-table">
                                    <thead class="bg-active">
                                    <tr class="tr">
                                        <th>No.</th>
                                        <th class="pl0 text-start">Item Description</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-end">Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $cartdata=json_decode(base64_decode($invdata->cart_data));
                                            
                                            $i=0;
                                            foreach($cartdata->item as $item){
                                        ?>
                                            <tr class="tr">
                                                <td>
                                                    <div class="item-desc-1">
                                                        <span><?= str_pad(++$i,2,"0",STR_PAD_LEFT) ?></span>
                                                    </div>
                                                </td>
                                                <td class="pl0"><?= $item->brand_name ?></td>
                                                <td class="text-center">BDT <?= $item->price ?></td>
                                                <td class="text-center"><?= $item->qty ?></td>
                                                <td class="text-end">BDT <?= $item->price * $item->qty ?></td>
                                            </tr>
                                        <?php } ?>
                                    
                                    <tr class="tr2">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">SubTotal</td>
                                        <td class="text-end">BDT <?= $cartdata->total ?></td>
                                    </tr>
                                    <tr class="tr2">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center">Discount</td>
                                        <td class="text-end">BDT <?= $cartdata->discount ?></td>
                                    </tr>
                                    <tr class="tr2">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center f-w-600 active-color">Grand Total</td>
                                        <td class="f-w-600 text-end active-color">BDT <?= $cartdata->total - $cartdata->discount ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="invoice-bottom">
                            <div class="row">
                                <div class="col-lg-6 col-md-5 col-sm-5">
                                    <div class="payment-method mb-30">
                                        <h3 class="inv-title-1">Delivery To</h3>
                                        <h2 class="name"><?= $invdata->ship_first_name ?> <?= $invdata->ship_last_name ?></h2>
                                        <span>Phone: <?= $invdata->ship_phone ?></span><br/>
                                        <span>Email: <?= $invdata->ship_email ?></span><br/>
                                        <span>Address: <?= $invdata->ship_address ?>, <?= $invdata->ship_state ?>, <?= $invdata->ship_post ?></span>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 col-sm-7">
                                    <div class="terms-conditions mb-30">
                                        <h3 class="inv-title-1">Terms & Conditions</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy has</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="invoice-btn-section clearfix d-print-none">
                        <a href="javascript:window.print()" class="btn btn-lg btn-print">
                            <i class="fa fa-print"></i> Print Invoice
                        </a>
                        <a href="<?= $baseurl ?>" class="btn btn-lg btn-download btn-theme">
                            <i class="fa fa-home"></i> Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Invoice 2 end -->

</body>
</html>
