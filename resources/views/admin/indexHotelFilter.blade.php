@include('adminPartial.header')
        <!-- Page header ends -->
<title>Hardware Dashboard - Admin Dashboard</title>

        <!-- Content wrapper scroll start -->
        <div class="content-wrapper-scroll">

            <!-- Content wrapper start -->
            <div class="content-wrapper">
                <form action="{{url('filterHotel')}}" method="post">
                    @csrf
                <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input type="date" class="form-control" name="start_date" required>
                                </div>
                                <div class="field-placeholder">Start Date <span class="text-danger">*</span></div>
                            </div>

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="field-wrapper">
                                <div class="input-group">
                                    <input type="date" class="form-control" name="end_date" required>
                                </div>
                                <div class="field-placeholder">End Date <span class="text-danger">*</span></div>
                            </div>

                        </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Search</button>
                    <h4>DAILY REPORT</h4>
                </div>
                </form>
                @include('flash-message')
                <!-- Row start -->
                <div class="row gutters">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="stats-tile">
                            <div class="sale-icon">
                                <i class="icon-shopping-bag1"></i>
                            </div>
                            <div class="sale-details">
                                <h2>ksh {{$profit}}</h2>
                                <p>PROFIT</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="stats-tile">
                            <div class="sale-icon">
                                <i class="icon-shopping-bag1"></i>
                            </div>
                            <div class="sale-details">
                                <h2>Ksh {{$totalSales}}</h2>
                                <p>SALES</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="stats-tile">
                            <div class="sale-icon">
                                <i class="icon-shopping-bag1"></i>
                            </div>
                            <div class="sale-details">
                                <h2>Ksh {{\App\Models\Expense::where('date',\Carbon\Carbon::now()->format('Y-m-d'))->sum('amount')}}</h2>
                                <p>EXPENSE</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row end -->

                <!-- Row start -->
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 cool-12">


                    </div>
                </div>
                <!-- Row end -->

                <!-- Row start -->
                <!-- Row end -->

                <!-- Row start -->
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Recent Sales</div>
                                <div class="graph-day-selection" role="group">
                                    <button type="button" class="btn active">Export to Excel</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table products-table">
                                        <thead>
                                        <tr>
                                            <th>Order Id</th>
                                            <th>Total</th>
                                            <th>Phone number</th>
                                            <th>Payment Method</th>
                                            <th>Date</th>
                                            <th>View Products</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($sales as $sale)
                                        <tr>
                                            <td>Order #{{$sale->id}}</td>
                                            <td>Ksh <b>{{\App\Models\salesHotel::where('order_id',$sale->id)->sum('total')}}</b></td>
                                            @if(!empty($sale->phone))
                                            <td>{{$sale->phone}}</td>
                                            @else
                                                <td><span class="badge badge-warning">N/A</span></td>

                                            @endif
                                            @if($sale->payment_method==1)
                                                <td>Mpesa</td>
                                            @else
                                                <td>Cash</td>
                                            @endif
                                            <td>{{$sale->date}}</td>
                                            <td><button class="btn btn-success view" id="{{$sale->id}}" data-bs-toggle="modal" data-bs-target="#viewOrderProducts">View</button> </td>
                                        </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="viewOrderProducts" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header" id="viewSaleHeader">

                                </div>
                                <div class="modal-body">
                                    <table class="shop_table my_account_orders">

                                        <thead>
                                        <tr>
                                            <th class="order-number">Name</th>
                                            <th class="order-date">Qnty</th>
                                            <th class="order-status">Amount</th>
                                            <th class="order-total">Total</th>
                                        </tr>
                                        </thead>
                                        <tbody id="viewSales">


                                        </tbody>

                                    </table>

                                </div>
                            </div>
                    </div>
                </div>

                <!-- Row end -->

                <!-- Row start -->
                <!-- Row end -->

            </div>
            <!-- Content wrapper end -->

            <!-- App footer start -->
            <div class="app-footer">© Uni Pro Admin 2021</div>
            <!-- App footer end -->

        </div>
        <!-- Content wrapper scroll end -->

    </div>
    <!-- *************
        ************ Main container end *************
    ************* -->

</div>
<style>
    body {
        font-family: 'Source Sans Pro', sans-serif;
    }

    a {
        color: #28acd7;
        text-decoration: none;
    }

    .my_account_orders {
        border-collapse: collapse;
        border-spacing: 0;
        max-width: 600px;
        width: 100%;
    }

    .my_account_orders th {
        text-align: left;
    }

    tr {
        border-bottom: 1px solid #ccc;
    }

    th,
    td {
        padding: 6px;
    }

    @media
    only screen and (max-width: 600px) {
        /* Force table to not be like tables anymore */
        table, thead, tbody, th, td, tr {
            display: block;
        }

        /* Hide table headers (but not display: none;, for accessibility) */
        thead tr {
            position: absolute;
            top: -9999px;
            left: -9999px;
        }

        td {
            /* Behave  like a "row" */
            border: none;
            border-bottom: 1px solid #eee;
            position: relative;
            padding-left: 35%;
        }

        td:last-child {
            border-width: 0;
        }

        td:before {
            content: attr(data-title);
            color: #ccc;
            /* Now like a table header */
            position: absolute;
            /* Top/left values mimic padding */
            top: 6px;
            left: 6px;
            width: 45%;
            padding-right: 10px;
            white-space: nowrap;
        }
    }
</style>
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
<script src="vendor/apex/custom/home/salesGraph.js"></script>
<script src="vendor/apex/custom/home/ordersGraph.js"></script>
<script src="vendor/apex/custom/home/earningsGraph.js"></script>
<script src="vendor/apex/custom/home/visitorsGraph.js"></script>
<script src="vendor/apex/custom/home/customersGraph.js"></script>
<script src="vendor/apex/custom/home/sparkline.js"></script>

<!-- Circleful Charts -->
<script src="vendor/circliful/circliful.min.js"></script>
<script src="vendor/circliful/circliful.custom.js"></script>

<!-- Main Js Required -->
<script src="js/main.js"></script>

</body>
<script>
    $(document).on('click','.view',function () {
        $value = $(this).attr('id');
        $.ajax({
            type:"get",
            url:"{{url('viewHotelSale')}}",
            data:{'id':$value},
            success:function (data) {
                $('#viewSales').html(data);
                    $.ajax({
                        type:"get",
                        url:"{{url('viewHotelSaleHeader')}}",
                        data:{'id':$value},
                        success:function (data) {
                            $('#viewSaleHeader').html(data);
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
</script>
<!-- Mirrored from bootstrap.gallery/unipro/v1-x/01-design-blue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Aug 2021 04:43:13 GMT -->
</html>
