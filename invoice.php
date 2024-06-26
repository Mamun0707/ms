<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> MS Invoice </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


</head>

<body>


    <div class="container ">
        <div class="card">
            <div class="card-header text-center">
                <h4> MS INVOICE</h4>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-8">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Customer</span>
                            <input type="text" class="form-control" placeholder="Customer">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">Address</span>
                            <input type="text" class="form-control" placeholder="Address">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">City</span>
                            <input type="text" class="form-control" placeholder="City">
                        </div>
                    </div>
                    <div class="col-4">

                        <div class="input-group mb-3">
                            <span class="input-group-text">Inv. No</span>
                            <input type="text" class="form-control" placeholder="Inv. No">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">Inv. Date</span>
                            <input type="date" class="form-control" placeholder="Inv. Date">
                        </div>

                    </div>
                </div>


                <table class="table table-bordered">
                    <thead class="table-success">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Particular</th>
                            <th scope="col" class="text-end">Qty</th>
                            <th scope="col" class="text-end">Rate</th>
                            <th scope="col" class="text-end">Amount</th>

                        </tr>
                    </thead>
                    <tbody id="TBody">
                        <tr id="TRow" class="d-none">
                            <th scope="row">1</th>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="number" class="form-control text-end" name="qty">
                            </td>
                            <td><input type="number" class="form-control text-end" name="rate">
                            </td>
                            <td><input type="number" class="form-control text-end" name="amt" value="0">
                            </td>
                        </tr>
                        <tr id="TRow" class="d-none">
                            <th scope="row">2</th>
                            <td><input type="text" class="form-control"></td>
                            <td><input type="number" class="form-control text-end" name="qty"></td>
                            <td><input type="number" class="form-control text-end" name="rate"></td>
                            <td><input type="number" class="form-control text-end" name="amt" value="0"></td>
                        </tr>


                    </tbody>
                </table>


                <div class="row">
                    <div class="col-8">

                    </div>
                    <div class="col-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Total</span>
                            <input type="number" class="form-control text-end" id="FTotal" name="FTotal">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">GST</span>
                            <input type="number" class="form-control text-end" id="FGST" name="FGST"
                                onchange="GetTotal()">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Net Amt</span>
                            <input type="number" class="form-control text-end" id="FNet" name="FNet">
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>