@include('adminPartial.header')
<title>Add Hotel Expense - Admin Dashboard</title>

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
                                <div class="card-title">Add New Expense</div>
                            </div>
                            <div class="card-body">
                                <div id="example-form">
                                    <h3>General Information</h3>
                                        <h6 class="h-0 m-0">&nbsp;</h6>
                                        <div class="row gutters">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" id="productT">

                                                <div class="field-wrapper">
                                                    <select class="form-select" id="productType">
                                                        @foreach($products as $product)
                                                            @if($product->id==1||$product->id==2||$product->id==3||$product->id==4)
                                                            <option value="{{$product->id}}">{{$product->product_name}}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                    <div class="field-placeholder">Take Away Stock</div></div>
                                            </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" id="expenseName">

                                                    <div class="field-wrapper">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Expense Name" id="name" required>
                                                        </div>
                                                        <div class="field-placeholder">Expense Name <span class="text-danger">*</span></div>
                                                    </div>

                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                                    <div class="field-wrapper">
                                                        <input type="text" placeholder="Description" id="desc" required>
                                                        <div class="field-placeholder">Expense Description <span class="text-danger">*</span></div>
                                                    </div>

                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                                    <div class="field-wrapper">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Amount" id="amount" required>
                                                            <span class="input-group-text">Ksh</span>
                                                        </div>
                                                        <div class="field-placeholder">Amount <span class="text-danger">*</span></div>
                                                    </div>

                                                </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                                <div class="field-wrapper">
                                                    <div class="input-group">
                                                        <input type="date" class="form-control" id="date" required>
                                                    </div>
                                                    <div class="field-placeholder">Start Date <span class="text-danger">*</span></div>
                                                </div>

                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                                <div class="field-wrapper">
                                                    <div class="input-group">
                                                        <input type="date" class="form-control" id="end_date">
                                                    </div>
                                                    <div class="field-placeholder">End Date</div>
                                                </div>

                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                            <div class="field-wrapper">
                                                <select class="form-select" id="paymentMethod">
                                                    <option value="1">Mpesa</option>
                                                    <option value="2">Cash</option>
                                                </select>
                                                <div class="field-placeholder">Payment Method</div>
                                            </div>
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                                <button class="btn btn-success" id="addExpense">Save</button>
                                        </div>
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
    $('#addExpense').on('click',function () {
        $value = $('#productType').val();
        $name = $('#name').val();
        $desc = $('#desc').val();
        $amount = $('#amount').val();
        $date = $('#date').val();
        $payment_method = $('#paymentMethod').val();
        $end_date = $('#end_date').val();
        $.ajax({
            type:"get",
            url:"{{url('storeHotelExpense')}}",
            data:{'id':$value,'name':$name,'desc':$desc,'amount':$amount,'date':$date,'payment_method':$payment_method,'end_date':$end_date},
            success:function (data) {
                alert('SUCCESS')
            },
            error:function (error) {
                console.log(error)
                alert('error')
            }
        });
    });
$('#productType').on('change',function () {
   $('#expenseName').hide();
});
$('#expenseName').on('keyup',function () {
    $('#productT').hide();
});
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
