@include('adminPartial.header')
        <!-- Page header ends -->

        <!-- Content wrapper scroll start -->
        <div class="content-wrapper-scroll">

            <!-- Content wrapper start -->
            <div class="content-wrapper">

                <!-- Row start -->
                <div class="row gutters">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="stats-tile">
                            <div class="sale-icon">
                                <i class="icon-shopping-bag1"></i>
                            </div>
                            <div class="sale-details">
                                <h2>ksh {{\App\Models\Sales::sum('profit')}}</h2>
                                <p>PROFIT</p>
                            </div>
                            <div class="sale-graph">
                                <div id="sparklineLine1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="stats-tile">
                            <div class="sale-icon">
                                <i class="icon-shopping-bag1"></i>
                            </div>
                            <div class="sale-details">
                                <h2>Ksh{{\App\Models\Sales::sum('total')}}</h2>
                                <p>SALES</p>
                            </div>
                            <div class="sale-graph">
                                <div id="sparklineLine2"></div>
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
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Amount</th>
                                            <th>Total</th>
                                            <th>Date</th>
                                            <th>Profit</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($sales as $sale)
                                        <tr>
                                            <td>
                                                <div class="media-box">
                                                    <img src="{{asset('uploads/product/'.$sale->image)}}" class="media-avatar" alt="">
                                                    <div class="media-box-body">
                                                        <a href="#" class="text-truncate">{{$sale->product_name}}</a>
                                                        <p><b>barcode</b>: {{$sale->barcode}}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge">{{$sale->quantity}}</span>
                                            </td>
                                            <td>{{$sale->selling_price}}</td>
                                            <td>{{$sale->total}}</td>
                                            <td>{{$sale->date}}</td>
                                            <td><span class="badge badge-warning">{{$sale->profit}}</span>
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

<!-- Mirrored from bootstrap.gallery/unipro/v1-x/01-design-blue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Aug 2021 04:43:13 GMT -->
</html>
