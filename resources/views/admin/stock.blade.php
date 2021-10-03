@include('adminPartial.header')
        <!-- Page header ends -->

        <!-- Content wrapper scroll start -->
        <div class="content-wrapper-scroll">

            <!-- Content wrapper start -->
            <div class="content-wrapper">

                <!-- Row start -->
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                        <div class="card">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <a href="{{url('addProduct')}}"><button class="btn btn-info">Add Product</button></a>
                                    <table id="copy-print-csv" class="table v-middle">
                                        <thead>
                                        <tr>
                                            <th>Products</th>
                                            <th>Qnty</th>
                                            <th>Updated Date</th>
                                            <th>Buying Price</th>
                                            <th>Selling Price</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="media-box">
                                                    <img src="img/products/bag.jpg" class="media-avatar" alt="Product">
                                                    <div class="media-box-body">
                                                        <a href="#" class="text-truncate">Leather Backpack</a>
                                                        <p>ID: #FLM00987</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><b>65</b></td>
                                            <td>2020/09/18</td>
                                            <td>21.00 /=</td>
                                            <td>21.00 /=</td>
                                            <td>
                                                <div class="actions">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                        <i class="icon-edit1 text-info"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                        <i class="icon-x-circle text-danger"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

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

<!-- Rating JS -->
<script src="vendor/rating/raty.js"></script>
<script src="vendor/rating/raty-custom.js"></script>

<!-- Data Tables -->
<script src="vendor/datatables/dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap.min.js"></script>

<!-- Custom Data tables -->
<script src="vendor/datatables/custom/custom-datatables.js"></script>

<!-- Download / CSV / Copy / Print -->
<script src="vendor/datatables/buttons.min.js"></script>
<script src="vendor/datatables/jszip.min.js"></script>
<script src="vendor/datatables/pdfmake.min.js"></script>
<script src="vendor/datatables/vfs_fonts.js"></script>
<script src="vendor/datatables/html5.min.js"></script>
<script src="vendor/datatables/buttons.print.min.js"></script>

<!-- Main Js Required -->
<script src="js/main.js"></script>

</body>

<!-- Mirrored from bootstrap.gallery/unipro/v1-x/01-design-blue/products-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Aug 2021 04:49:15 GMT -->
</html>
