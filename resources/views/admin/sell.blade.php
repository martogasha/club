@include('adminPartial.header')
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
                                                <p class="text-lighter"><b style="font-size: 20px;color: #0b0e23">Shop Name</b></p>
                                                <h5 class="text-info">Stock</h5>
                                            </div>
                                            <button class="earnings-icon">
                                                <i class="icon-download"></i>
                                            </button>
                                        </div>

                                        <!-- Row start -->
                                        <div class="row gutters" style="height: 325px;overflow: auto">
                                            @foreach($stocks as $stock)
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" id="myTable">
                                                <div class="image-stats-tile">
                                                    <div class="image-stats-box">
                                                        <img src="{{asset('uploads/product/'.$stock->image)}}" class="img-fluid" alt="Food">
                                                    </div>
                                                    <div class="img-stats-details">
                                                        <p>{{$stock->product_name}}</p>
                                                        <h5>{{$stock->quantity}} Pieces</h5>
                                                        <h5>{{$stock->selling_price}} /=</h5>
                                                    </div>
                                                    <div class="weekly-graph-details">
                                                        <button class="btn btn-info sell" id="{{$stock->id}}">Sell</button>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        <!-- Row end -->

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="stats-tile3">
                                    <div class="sale-icon3">
                                        <img src="img/svg/customer.svg" alt="Customers">
                                    </div>
                                    <div class="sale-details3">
                                        <h3>8,500</h3>
                                        <p>New Customers</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="stats-tile3">
                                    <div class="sale-icon3">
                                        <img src="img/svg/box.svg" alt="Customers">
                                    </div>
                                    <div class="sale-details3">
                                        <h3>1,650</h3>
                                        <p>New Products</p>
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
                                                @include('flash-message');
                                                <p style="font-size: 20px"><b>{{\App\Models\Sell::sum('total')}} /=</b></p>
                                                <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Pay</button>
                                            </div>
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table products-table">
                                                <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Quantity</th>
                                                    <th>Amount</th>
                                                    <th>Total</th>
                                                    <th>Remove</th>
                                                </tr>
                                                </thead>
                                                    <tbody>
                                                    @foreach($sells as $sell)
                                                    <tr>
                                                        <td>
                                                            <div class="media-box">
                                                                <img class="media-avatar" src="{{asset('uploads/product/'.$sell->image)}}" alt="Product Image">
                                                                <div class="media-box-body text-truncate">
                                                                    <a href="#">{{$sell->product_name}}</a>
                                                                    <p>#{{$sell->barcode}}</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><button class="btn btn-warning btn-sm minus" id="{{$sell->id}}">-</button> <b>{{$sell->quantity}}</b> <button class="btn btn-success btn-sm add" id="{{$sell->id}}">+</button></td>
                                                        <td>{{$sell->selling_price}} /=</td>
                                                        <td><b>{{$sell->selling_price*$sell->quantity}} /=</b></td>
                                                        <td><button class="btn btn-danger btn-sm del" id="{{$sell->id}}">Remove</button> </td>

                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="stats-tile3">
                                    <div class="sale-icon3">
                                        <img src="img/svg/income.svg" alt="Sales">
                                    </div>
                                    <div class="sale-details3">
                                        <h3>4.5M</h3>
                                        <p>Today Sales</p>
                                    </div>
                                    <div id="sparklineLine1" class="stats-graph3"></div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="stats-tile3">
                                    <div class="sale-icon3">
                                        <img src="img/svg/commisions.svg" alt="Commisions">
                                    </div>
                                    <div class="sale-details3">
                                        <h3>2,500</h3>
                                        <p>Commisions</p>
                                    </div>
                                    <div id="sparklineLine2" class="stats-graph3"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Row end -->

                    </div>
                </div>
                <!-- Row end -->

                <!-- Row start -->
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Earnings</div>
                            </div>
                            <div class="card-body pt-0">

                                <div id="sales2"></div>

                                <!-- Row start -->
                                <div class="row gutters justify-content-center">
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
                                        <div class="monthly-earnings">
                                            <p>Today Earnings</p>
                                            <h4>$2,059</h4>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
                                        <div class="monthly-earnings">
                                            <p>Weekly Earnings</p>
                                            <h4>$4,275</h4>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 col-12">
                                        <div class="monthly-earnings">
                                            <p>Monthly Earnings</p>
                                            <h4>$9,680</h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row end -->

                <!-- Row start -->
                <div class="row gutters">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="report-card">
                            <div class="graph">
                                <div id="sparklineLine3"></div>
                            </div>
                            <div class="report-card-body">
                                <p>Create weekly reports and use them to perform tasks related to your finances.</p>
                                <button class="btn btn-success stripes-btn">Create</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                        <div class="followers-card">
                            <p>Followers</p>
                            <h3>69,697</h3>
                            <button class="btn btn-danger stripes-btn">Reports</button>
                            <img src="img/followers.jpg" class="img-fluid" alt="Followers">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="sales-card">
                            <div class="sales-card-header">
                                <p>Revenue</p>
                                <h3>750M</h3>
                            </div>
                            <div class="sales-card-body">
                                <div class="graph">
                                    <div id="revenue"></div>
                                </div>

                                <div class="earnings-badge-container">
                                    <div class="earnings-badge">
                                        <p>Net Profit</p>
                                        <h4>980M</h4>
                                    </div>
                                    <div class="earnings-badge">
                                        <p>Revenue</p>
                                        <h4>750M</h4>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row end -->

            </div>
            <!-- Content wrapper end -->

            <!-- App Footer start -->
            <div class="app-footer">© Uni Pro Admin 2021</div>
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
        <form action="{{url('sales')}}" method="post">
            @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Make payment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <div class="field-wrapper">
                        <select class="form-select" id="paymentSelect" name="paymentMethod">
                            <option value="1">Mpesa</option>
                            <option value="2">Cash</option>
                        </select>
                        <div class="field-placeholder">Payment Method</div>
                    </div>
                    <div class="field-wrapper" id="phone">
                        <input type="text" class="form-control" name="phone">
                        <div class="field-placeholder">Phone Number</div>
                    </div>
                    <div class="field-wrapper" id="amount">
                        <input type="text" value="{{\App\Models\Sell::sum('total')}}" class="form-control" name="amount" required>
                        <div class="field-placeholder">Amount</div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">PAY</button>
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
$('#paymentSelect').change(function () {
    var value = $(this).val();
   if (value==2){
       $('#phone').hide();
       $('#amount').show();
   }
   else{
       $('#phone').show();

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
</script>
<!-- Mirrored from bootstrap.gallery/unipro/v1-x/01-design-blue/reports.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Aug 2021 04:47:02 GMT -->
</html>
