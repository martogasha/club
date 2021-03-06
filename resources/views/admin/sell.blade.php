@include('adminPartial.header')
<title>Pos Sell Hardware - HARDWARE</title>

<!-- Content wrapper scroll start -->
<div class="content-wrapper-scroll">

    <!-- Content wrapper start -->
    <div class="content-wrapper">

        <!-- Row start -->
        <div class="row gutters">
            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
                <!-- Row start -->
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card h-475">
                            <div class="p-0">
                                <div class="field-wrapper">
                                        <input type="text" class="form-control" placeholder="Type Something" id="myInput">
                                    <div class="field-placeholder">Search</div>
                                </div>
                            </div>
                            <div class="card-body pt-0">

                                <div class="earnings-detail">
                                    <div class="earnings-info">
                                        <p class="text-lighter"><b style="font-size: 20px;color: #0b0e23">Hardware</b></p>
                                        <h5 class="text-info">Stock</h5>
                                    </div>
                                    <button class="earnings-icon">
                                        <i class="icon-download"></i>
                                    </button>
                                </div>
                                <div id="printDiv">

                                    <div class="container">
                                        <header class="center">
                                            <h4>Siwamu Hardware</h4>
                                        </header>
                                        <section>
                                            <table class="summary" cellspacing="0">
                                                <tbody>
                                                <tr>
                                                    <td>Paybill No</td>
                                                    <td>247247</td>
                                                </tr>
                                                <tr>
                                                    <td>A/C No</td>
                                                    <td>0714399377</td>
                                                </tr>
                                                <tr></tr>
                                                <tr>
                                                    <td>Contact</td>
                                                    <td>0790436545, 0728930978, 0714395000</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <div class="separator"></div>
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th scope="col">Item</th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>


                                                    <th scope="col">Qnty</th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>

                                                    <th scope="col">Price</th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"></th>


                                                    <th scope="col">Amount</th>


                                                </tr>
                                                </thead>
                                                <tbody id="returnPrint">

                                                </tbody>
                                            </table>
                                            <div class="separator"></div>
                                            <table class="summary" cellspacing="0">
                                                <tbody>
                                                <tr>
                                                    <td>Total TAX 16%</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <div class="separator"></div>
                                            <table class="summary" cellspacing="0">
                                                <tbody>
                                                <tr>
                                                    <td>Total</td>
                                                    <td><span id="calTotal"></span></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table class="summary" cellspacing="0">
                                                <tbody>
                                                <tr>
                                                    <td>Served By:</td>
                                                    <td>{{\Illuminate\Support\Facades\Auth::user()->first_name}} {{\Illuminate\Support\Facades\Auth::user()->last_name}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <div class="separator"></div>
                                        </section>
                                    </div>
                                    <p>Thank you for your service</p>

                                    <style>
                                        .container {
                                            border: 1px solid crimson;
                                            width: 100%;
                                        }
                                        body {
                                            font-family: monospace;
                                            width: 100%;
                                            color: #000;
                                            margin: 0;
                                            padding: 0 0 50mm;
                                            font-size: 11pt;
                                        }

                                        .center {
                                            text-align: center;
                                        }

                                        img, .margin {
                                            margin: 15px;
                                        }

                                        .separator {
                                            display: block;
                                            width: 100%;
                                            height: 0;
                                            margin: 10px 0;
                                            border-bottom: 1px dashed black;
                                        }

                                        .product-list {
                                            width: 100%;
                                            padding-bottom: 50px;
                                            word-break: break-word;
                                        }
                                        .product-list thead th{
                                            font-weight: normal;
                                        }

                                        .summary {
                                            width: 100%;
                                        }

                                        .summary td:last-child {
                                            text-align: right;
                                        }

                                        .info {
                                            margin: 50px 0;
                                        }

                                    </style>
                                </div>
                                <!-- Row start -->
                                <div class="row gutters" style="height: 325px;overflow: auto">
                                    @foreach($stocks as $stock)
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" id="myTable">
                                            <div class="image-stats-tile">
                                                    <img src="{{asset('uploads/product/'.$stock->image)}}" class="img-fluid" alt="" style="width: 50px;height: 50px">
                                                <div class="img-stats-details" style="margin: 10px">
                                                    <p>{{$stock->product_name}}</p>
                                                    @if($stock->quantity<5)
                                                        <h5><b style="color: red">{{$stock->quantity}} Pieces</b></h5>
                                                    @else
                                                        <h5>{{$stock->quantity}} Pieces</h5>
                                                    @endif
                                                    <h5>{{$stock->selling_price}} /=</h5>
                                                </div>
                                                    <button class="btn btn-info sell" id="{{$stock->id}}" style="margin: 50px">Sell</button>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <!-- Row end -->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row end -->
            </div>
            <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12">

                <!-- Row start -->
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card h-475">
                            <div class="card-body pt-0" style="height: 300px;overflow: auto">

                                <div class="earnings-detail">
                                    <div class="earnings-info">
                                        <h5 class="text-danger">Sell</h5>
                                    </div>
                                    <div>
                                        <p style="font-size: 20px"><b>{{\App\Models\Sell::sum('total')}} /=</b></p>
                                        <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Pay</button>
                                    </div>
                                </div>
                                @include('flash-message')

                                <div class="table-responsive">
                                    <table class="table products-table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Amount</th>
                                            <th>Discount</th>
                                            <th>Total</th>
                                            <th>Remove</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($sells as $sell)
                                            <tr>
                                                <td>
                                                    <a href="#" class="uSell" id="{{$sell->id}}" data-bs-toggle="modal" data-bs-target="#updSell" title="Update">
                                                        <i class="icon-edit text-success"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="media-box">
                                                        <img class="media-avatar" src="{{asset('uploads/product/'.$sell->image)}}" alt="">
                                                        <div class="media-box-body text-truncate">
                                                            <a href="#">{{$sell->product_name}}</a>
                                                            <p>#{{$sell->barcode}}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><button class="btn btn-warning btn-sm minus" id="{{$sell->id}}">-</button> <b>{{$sell->quantity}}</b> <button class="btn btn-success btn-sm add" id="{{$sell->id}}">+</button></td>
                                                <td>{{$sell->selling_price}} /=</td>
                                                <td>{{$sell->discount}} (<b>{{$sell->discount_percentage}}%</b>)</td>
                                                <td><b>{{$sell->selling_price*$sell->quantity}} /=</b></td>
                                                <td>
                                                    <button class="btn btn-danger btn-sm del" id="{{$sell->id}}">x</button>
                                                </td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row end -->

            </div>
        </div>
    </div>
    <!-- Content wrapper end -->

    <!-- App Footer start -->
    <div class="app-footer">?? Uni Pro Admin 2021</div>
    <!-- App footer end -->

</div>
<!-- Content wrapper scroll end -->

</div>
<!-- *************
    ************ Main container end *************
************* -->

</div>
<!-- Payment Modal -->
<!-- Modal start -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Make payment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="field-wrapper">
                        <select class="form-select" id="paymentMethod">
                            <option value="1">Mpesa</option>
                            <option value="2">Cash</option>
                        </select>
                        <div class="field-placeholder">Payment Method</div>
                    </div>
                    <div class="field-wrapper" id="phon">
                        <input type="text" class="form-control" id="phone">
                        <div class="field-placeholder">Phone Number</div>
                    </div>
                    <div class="field-wrapper" id="amount">
                        <input type="text" value="{{\App\Models\Sell::sum('total')}}" class="form-control" required>
                        <div class="field-placeholder">Amount</div>
                    </div>
                        <div class="field-wrapper">
                            <div class="input-group">
                                <input type="date" class="form-control" id="date" required>
                            </div>
                            <div class="field-placeholder">Date</div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-success" id="sellButton">PAY</button>
                </div>
            </div>
    </div>
</div>
<div class="modal fade" id="updSell" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{url('burgain')}}" method="post">
            @csrf
            <div class="modal-content">
                <div id="updateSell">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">UPDATE</button>
                </div>
            </div>
        </form>
    </div>
</div>


<!-- Modal end -->
<!-- Page wrapper end -->

<!-- *************
    ************ Required JavaScript Files *************
************* -->
<!-- Required jQuery first, then Bootstrap Bundle JS -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/moment.js"></script>

<!-- *************
    ************ Vendor Js Files *************
************* -->

<!-- Megamenu JS -->
<script src="vendor/megamenu/js/megamenu.js"></script>
<script src="vendor/megamenu/js/custom.js"></script>

<!-- Slimscroll JS -->
<script src="vendor/slimscroll/slimscroll.min.js"></script>
<script src="vendor/slimscroll/custom-scrollbar.js"></script>

<!-- Search Filter JS -->
<script src="vendor/search-filter/search-filter.js"></script>
<script src="vendor/search-filter/custom-search-filter.js"></script>

<!-- Apex Charts -->
<script src="vendor/apex/apexcharts.min.js"></script>
<script src="vendor/apex/custom/reports/sales.js"></script>
<script src="vendor/apex/custom/reports/sales2.js"></script>
<script src="vendor/apex/custom/reports/revenue.js"></script>
<script src="vendor/apex/custom/reports/orders.js"></script>
<script src="vendor/apex/custom/reports/sparkline.js"></script>

<!-- Rating JS -->
<script src="vendor/rating/raty.js"></script>
<script src="vendor/rating/raty-custom.js"></script>

<!-- Main Js Required -->
<script src="js/main.js"></script>

</body>
<script>
    $(document).ready(function () {
       $('#printDiv').hide();
    });
    $('#paymentMethod').change(function () {
        var value = $(this).val();
        if (value==2){
            $('#phon').hide();
            $('#amount').show();
        }
        else{
            $('#phon').show();

        }
    });
    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable div").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });

    $(document).on('click','.sell',function () {
        $value = $(this).attr('id');
        $.ajax({
            type:"get",
            url:"{{url('sellStock')}}",
            data:{'id':$value},
            success:function (data) {
                location.reload();
            },
            error:function (error) {
                console.log(error)
                alert('error')
            }
        });
    });
    $(document).on('click','.add',function () {
        $value = $(this).attr('id');
        $.ajax({
            type:"get",
            url:"{{url('add')}}",
            data:{'id':$value},
            success:function (data) {
                location.reload();
            },
            error:function (error) {
                console.log(error)
                alert('error')
            }
        });
    });
    $(document).on('click','.minus',function () {
        $value = $(this).attr('id');
        $.ajax({
            type:"get",
            url:"{{url('minus')}}",
            data:{'id':$value},
            success:function (data) {
                location.reload();
            },
            error:function (error) {
                console.log(error)
                alert('error')
            }
        });
    });
    $(document).on('click','.del',function () {
        $value = $(this).attr('id');
        $.ajax({
            type:"get",
            url:"{{url('del')}}",
            data:{'id':$value},
            success:function (data) {
                location.reload();
            },
            error:function (error) {
                console.log(error)
                alert('error')
            }
        });
    });
    $(document).on('click','.uSell',function () {
        $value = $(this).attr('id');
        $.ajax({
            type:"get",
            url:"{{url('uSell')}}",
            data:{'id':$value},
            success:function (data) {
                $('#updateSell').html(data);
            },
            error:function (error) {
                console.log(error)
                alert('error')
            }
        });
    });
    $('#sellButton').on('click',function () {
        $paymentMethod = $('#paymentMethod').val();
        $phone = $('#phone').val();
        $.ajax({
            type:"get",
            url:"{{url('sales')}}",
            data:{'paymentMethod':$paymentMethod,'phone':$phone},
            success:function (data) {
                $('#returnPrint').html(data);
                $.ajax({
                    type:"get",
                    url:"{{url('CalTotal')}}",
                    success:function (data) {
                        $('#calTotal').html(data);
                        var printContents = document.getElementById('printDiv').innerHTML;
                        var originalContents = document.body.innerHTML;

                        document.body.innerHTML = printContents;

                        window.print();

                        document.body.innerHTML = originalContents;
                        location.reload();

                    },
                    error:function (error) {
                        console.log(error)
                        alert('error')
                    }
                });

            },
            error:function (error) {
                console.log(error)
                alert('error')
            }
        });
    });
    $(document).on('change','.sel',function () {
        $selling_p = $(this).val();
        $buying_p = $('#buying_p').val();
        $quantity = $('#quant').val();
        $realSelling_p = $('#realSelling').val();
        $dis = $realSelling_p-$selling_p;
        $discount = $dis*$quantity;
        $calPercent = $discount/$realSelling_p;
        $percentageDiscount = $calPercent*100;

        $('#ddd').append($percentageDiscount,'%');
        if ($percentageDiscount>5){
            alert('DISCOUNT HIGH')
            location.reload();
        }
    });
</script>
<!-- Mirrored from bootstrap.gallery/unipro/v1-x/01-design-blue/reports.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Aug 2021 04:47:02 GMT -->
</html>
