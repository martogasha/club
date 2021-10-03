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
                                <h2>25</h2>
                                <p>Products</p>
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
                                <h2>32</h2>
                                <p>Orders</p>
                            </div>
                            <div class="sale-graph">
                                <div id="sparklineLine2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="stats-tile">
                            <div class="sale-icon">
                                <i class="icon-check-circle"></i>
                            </div>
                            <div class="sale-details">
                                <h2>19</h2>
                                <p>Customers</p>
                            </div>
                            <div class="sale-graph">
                                <div id="sparklineLine3"></div>
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
                                <div class="card-title">Recent Orders</div>
                                <div class="graph-day-selection" role="group">
                                    <button type="button" class="btn active">Export to Excel</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table products-table">
                                        <thead>
                                        <tr>
                                            <th>Order No.</th>
                                            <th>Ordered Date</th>
                                            <th>Product</th>
                                            <th>Delivery Status</th>
                                            <th>Amount</th>
                                            <th>Discount</th>
                                            <th>Location</th>
                                            <th>Est Delivery Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>#55589</td>
                                            <td>20/11/2020</td>
                                            <td>
                                                <img class="user" src="img/products/bag.jpg" alt="Product Image">
                                            </td>
                                            <td>
                                                <span class="badge">Moving</span>
                                            </td>
                                            <td>$385.00</td>
                                            <td>30%</td>
                                            <td>Los Angeles, California</td>
                                            <td>22/11/2020</td>
                                        </tr>
                                        <tr>
                                            <td>#23198</td>
                                            <td>23/11/2020</td>
                                            <td>
                                                <img class="user" src="img/products/toy.jpg" alt="Product Image">
                                            </td>
                                            <td>
                                                <span class="badge">Shipped</span>
                                            </td>
                                            <td>$539.00</td>
                                            <td>25%</td>
                                            <td>Arverne, New York</td>
                                            <td>27/11/2020</td>
                                        </tr>
                                        <tr>
                                            <td>#87324</td>
                                            <td>26/11/2020</td>
                                            <td>
                                                <img class="user" src="img/products/pencils.jpg" alt="Product Image">
                                            </td>
                                            <td>
                                                <span class="badge">Pending</span>
                                            </td>
                                            <td>$671.00</td>
                                            <td>35%</td>
                                            <td>Mesquite, Texas</td>
                                            <td>29/11/2020</td>
                                        </tr>
                                        <tr>
                                            <td>#65673</td>
                                            <td>25/11/2020</td>
                                            <td>
                                                <img class="user" src="img/products/camera.jpg" alt="Product Image">
                                            </td>
                                            <td>
                                                <span class="badge">Cancelled</span>
                                            </td>
                                            <td>$490.00</td>
                                            <td>21%</td>
                                            <td>Hallandale, Florida</td>
                                            <td>26/11/2020</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row end -->

                <!-- Row start -->
                <div class="row gutters">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="goal-container">
                            <div class="goal-info">
                                <h5>Today's Goal</h5>
                                <h6>70/100</h6>
                            </div>
                            <div class="goal-graph">
                                <div id="todaysTarget"></div>
                                <div class="circle-one"></div>
                                <div class="circle-two"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="graph-card">
                            <h6>New Customers</h6>
                            <h4>2500</h4>
                            <div class="graph-placeholder">
                                <div id="customersGraph"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="payments-card">
                            <h6>Balance</h6>
                            <h4>$5699.89</h4>
                            <div class="custom-btn-group mt-2">
                                <button class="btn btn-outline-primary"><i class="icon-credit-card"></i>Deposit</button>
                                <button class="btn btn-primary"><i class="icon-credit-card"></i>Withdraw</button>
                            </div>
                        </div>
                    </div>
                </div>
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
