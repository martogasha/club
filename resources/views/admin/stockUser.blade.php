@include('adminPartial.header')
<title>Edit {{$edit->first_name}} {{$edit->last_name}} - Admin Dashboard</title>

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
                                <div class="card-title">Edit <b style="color: red">{{$edit->first_name}} {{$edit->last_name}}</b></div>
                            </div>
                            <div class="card-body">
                                <form action="{{url('eUser')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{$edit->id}}" name="userId">
                                <div id="example-form">
                                    <h3>General Information</h3>
                                        <h6 class="h-0 m-0">&nbsp;</h6>
                                        <div class="row gutters">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                                    <div class="field-wrapper">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" value="{{$edit->first_name}}" name="first_name" required>
                                                        </div>
                                                        <div class="field-placeholder">First Name <span class="text-danger">*</span></div>
                                                    </div>

                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                                    <div class="field-wrapper">
                                                        <input type="text" value="{{$edit->last_name}}" placeholder="Enter Product Name" name="last_name" required>
                                                        <div class="field-placeholder">Last Name <span class="text-danger">*</span></div>
                                                    </div>

                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                                                    <div class="field-wrapper">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" value="{{$edit->phone}}" placeholder="Set Buying Price" name="phone" required>
                                                        </div>
                                                        <div class="field-placeholder">Phone Number <span class="text-danger">*</span></div>
                                                    </div>

                                                </div>
                                            @if($edit->role==1)
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="field-wrapper">
                                                <select class="form-select" id="paymentSelect" name="role">
                                                    <option value="1">Hotel</option>
                                                    <option value="2">Hardware</option>
                                                    <option value="0">ADMIN</option>
                                                </select>
                                                <div class="field-placeholder">Role</div>
                                            </div>
                                            </div>
                                            @elseif($edit->role==0)
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="field-wrapper">
                                                        <select class="form-select" id="paymentSelect" name="role">
                                                            <option value="0">ADMIN</option>
                                                            <option value="1">Hotel</option>
                                                            <option value="2">Hardware</option>
                                                        </select>
                                                        <div class="field-placeholder">Role</div>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                    <div class="field-wrapper">
                                                        <select class="form-select" id="paymentSelect" name="role">
                                                            <option value="2">Hardware</option>
                                                            <option value="1">Hotel</option>
                                                            <option value="0">ADMIN</option>
                                                        </select>
                                                        <div class="field-placeholder">Role</div>
                                                    </div>
                                                </div>
                                            @endif
                                            <br>
                                            <br>
                                            <br>
                                            <div class="row">
                                                <button type="submit" class="btn btn-success">Save</button>
                                                <hr>
                                            </div>

                                        </div>
                                </div>
                                </form>
                                <a href="{{url('reset',$edit->id)}}"><button class="btn btn-danger btn-lg btn-block">Reset Password</button></a>


                            </div>
                        </div>

                    </div>
                </div>
                <!-- Row end -->

            </div>
            <!-- Content wrapper end -->

            <!-- App footer start -->
            <div class="app-footer">?? Uni Pro Admin 2021</div>
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
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/modernizr.js')}}"></script>
<script src="{{asset('js/moment.js')}}"></script>

<!-- *************
    ************ Vendor Js Files *************
************* -->

<!-- Megamenu JS -->
<script src="{{asset('vendor/megamenu/js/megamenu.js')}}"></script>
<script src="{{asset('vendor/megamenu/js/custom.js')}}"></script>

<!-- Slimscroll JS -->
<script src="{{asset('vendor/slimscroll/slimscroll.min.js')}}"></script>
<script src="{{asset('vendor/slimscroll/custom-scrollbar.js')}}"></script>

<!-- Search Filter JS -->
<script src="{{asset('vendor/search-filter/search-filter.js')}}"></script>
<script src="{{asset('vendor/search-filter/custom-search-filter.js')}}"></script>

<!-- Rating JS -->
<script src="{{asset('vendor/rating/raty.js')}}"></script>
<script src="{{asset('vendor/rating/raty-custom.js')}}"></script>

<!-- Steps wizard JS -->
<script src="{{asset('vendor/wizard/jquery.steps.min.js')}}"></script>
<script src="{{asset('vendor/wizard/jquery.steps.custom.js')}}"></script>

<!-- Summernote JS -->
<script src="{{asset('vendor/summernote/summernote-bs4.js')}}"></script>

<!-- Bootstrap Select JS -->
<script src="{{asset('vendor/bs-select/bs-select.min.js')}}"></script>
<script src="{{asset('vendor/bs-select/bs-select-custom.js')}}"></script>

<!-- Dropzone JS -->
<script src="{{asset('vendor/dropzone/dropzone.min.js')}}"></script>

<!-- Input Tags JS -->
<script src="{{asset('vendor/input-tags/tagsinput.min.js')}}"></script>
<script src="{{asset('vendor/input-tags/typeahead.js')}}"></script>
<script src="{{asset('vendor/input-tags/tagsinput-custom.js')}}"></script>

<!-- Main Js Required -->
<script src="{{asset('js/main.js')}}"></script>

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
