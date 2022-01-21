@include('adminPartial.header')

<!-- Content wrapper scroll start -->
        <div class="content-wrapper-scroll">

            <!-- Content wrapper start -->
            <div class="content-wrapper">

                <!-- Row start -->
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
@include('flash-message')
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Add New Hotel Product</div>
                            </div>
                            <div class="card-body">
                                <form action="{{url('storeHotelStock')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                <div id="example-form">
                                    <h3>General Information</h3>
                                        <h6 class="h-0 m-0">&nbsp;</h6>
                                        <div class="row gutters">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                                    <div class="field-wrapper">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Set Barcode" name="barcode" required>
                                                        </div>
                                                        <div class="field-placeholder">Barcode <span class="text-danger">*</span></div>
                                                    </div>

                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                                    <div class="field-wrapper">
                                                        <input type="text" placeholder="Enetr Product Name" name="product_name" required>
                                                        <div class="field-placeholder">Product Name <span class="text-danger">*</span></div>
                                                    </div>

                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                                    <div class="field-wrapper">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Set Buying Price" name="buying_price" required>
                                                            <span class="input-group-text">Ksh</span>
                                                        </div>
                                                        <div class="field-placeholder">Buying Price <span class="text-danger">*</span></div>
                                                    </div>

                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                                    <div class="field-wrapper">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Set Selling Price" name="selling_price" required>
                                                            <span class="input-group-text">Ksh</span>
                                                        </div>
                                                        <div class="field-placeholder">Selling Price <span class="text-danger">*</span></div>
                                                    </div>

                                                </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                                        <div class="field-wrapper">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="Quantity" name="quantity">
                                                            </div>
                                                            <div class="field-placeholder">Quantity(Incomplete Park)</div>
                                                        </div>

                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                                        <div class="field-wrapper">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="Quantity in pack" name="quantity_of_pack">
                                                            </div>
                                                            <div class="field-placeholder">Quantity in pack</div>
                                                        </div>

                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                                        <div class="field-wrapper">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="Pack No:" name="number_of_pack">
                                                            </div>
                                                            <div class="field-placeholder">Pack Number</div>
                                                        </div>

                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                                        <div class="field-wrapper">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="Fixed Quantity:" name="fixed">
                                                            </div>
                                                            <div class="field-placeholder">Fixed Quantity</div>
                                                        </div>

                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                                        <div class="field-wrapper">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="Barcode TakeAway:" name="takeAway">
                                                            </div>
                                                            <div class="field-placeholder">Barcode TakeAway</div>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                                    <div class="field-wrapper">
                                                        <div class="input-group">
                                                            <input type="date" class="form-control" name="date" required>
                                                        </div>
                                                        <div class="field-placeholder">Date <span class="text-danger">*</span></div>
                                                    </div>

                                                </div>

                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <input type="file" class="form-control" name="image">
                                                </div>
                                            <br>
                                            <br>
                                            <br>
                                                <button type="submit" class="btn btn-success">Save</button>
                                        </div>
                                </div>
                                </form>

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

<!-- Steps wizard JS -->
<script src="vendor/wizard/jquery.steps.min.js"></script>
<script src="vendor/wizard/jquery.steps.custom.js"></script>

<!-- Summernote JS -->
<script src="vendor/summernote/summernote-bs4.js"></script>

<!-- Bootstrap Select JS -->
<script src="vendor/bs-select/bs-select.min.js"></script>
<script src="vendor/bs-select/bs-select-custom.js"></script>

<!-- Dropzone JS -->
<script src="vendor/dropzone/dropzone.min.js"></script>

<!-- Input Tags JS -->
<script src="vendor/input-tags/tagsinput.min.js"></script>
<script src="vendor/input-tags/typeahead.js"></script>
<script src="vendor/input-tags/tagsinput-custom.js"></script>

<!-- Main Js Required -->
<script src="js/main.js"></script>

<script>

    // Summernote
    $(document).ready(function() {
        $('.summernote').summernote({
            height: 120,
            tabsize: 2,
            focus: true,
            toolbar: [
                ['font', ['bold', 'underline', 'clear']],
                ['para', ['ul', 'ol']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']],
            ]
        });
    });

</script>

</body>

<!-- Mirrored from bootstrap.gallery/unipro/v1-x/01-design-blue/add-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Aug 2021 04:49:57 GMT -->
</html>
