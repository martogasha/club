@include('adminPartial.header')
        <!-- Page header ends -->
<title>Hardware Stock - Admin Dashboard</title>

        <!-- Content wrapper scroll start -->
        <div class="content-wrapper-scroll">

            <!-- Content wrapper start -->
            <div class="content-wrapper">
                <!-- Row start -->
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <form action="{{url('hardwareF')}}" method="post">
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

                                <div class="container">
                                    <div class="main">
                                        <h5>Stock Products</h5>
                                        <select name="productId">
                                            <option value="">Select Product</option>
                                            @foreach($products as $product)
                                                <option value="{{$product->barcode}}">{{$product->product_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Search</button>
                            </div>
                            <br>
                        </form>
                        <style>

                            @media(max-width:34em){
                                .main{
                                    min-width:150px;
                                    width:auto;
                                }
                            }
                            select {
                                display: none !important;
                            }

                            .dropdown-select {
                                background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0) 100%);
                                background-repeat: repeat-x;
                                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#40FFFFFF', endColorstr='#00FFFFFF', GradientType=0);
                                background-color: #fff;
                                border-radius: 6px;
                                border: solid 1px #eee;
                                box-shadow: 0px 2px 5px 0px rgba(155, 155, 155, 0.5);
                                box-sizing: border-box;
                                cursor: pointer;
                                display: block;
                                float: left;
                                font-size: 14px;
                                font-weight: normal;
                                height: 42px;
                                line-height: 40px;
                                outline: none;
                                padding-left: 18px;
                                padding-right: 30px;
                                position: relative;
                                text-align: left !important;
                                transition: all 0.2s ease-in-out;
                                -webkit-user-select: none;
                                -moz-user-select: none;
                                -ms-user-select: none;
                                user-select: none;
                                white-space: nowrap;
                                width: auto;

                            }

                            .dropdown-select:focus {
                                background-color: #fff;
                            }

                            .dropdown-select:hover {
                                background-color: #fff;
                            }

                            .dropdown-select:active,
                            .dropdown-select.open {
                                background-color: #fff !important;
                                border-color: #bbb;
                                box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05) inset;
                            }

                            .dropdown-select:after {
                                height: 0;
                                width: 0;
                                border-left: 4px solid transparent;
                                border-right: 4px solid transparent;
                                border-top: 4px solid #777;
                                -webkit-transform: origin(50% 20%);
                                transform: origin(50% 20%);
                                transition: all 0.125s ease-in-out;
                                content: '';
                                display: block;
                                margin-top: -2px;
                                pointer-events: none;
                                position: absolute;
                                right: 10px;
                                top: 50%;
                            }

                            .dropdown-select.open:after {
                                -webkit-transform: rotate(-180deg);
                                transform: rotate(-180deg);
                            }

                            .dropdown-select.open .list {
                                -webkit-transform: scale(1);
                                transform: scale(1);
                                opacity: 1;
                                pointer-events: auto;
                            }

                            .dropdown-select.open .option {
                                cursor: pointer;
                            }

                            .dropdown-select.wide {
                                width: 100%;
                            }

                            .dropdown-select.wide .list {
                                left: 0 !important;
                                right: 0 !important;
                            }

                            .dropdown-select .list {
                                box-sizing: border-box;
                                transition: all 0.15s cubic-bezier(0.25, 0, 0.25, 1.75), opacity 0.1s linear;
                                -webkit-transform: scale(0.75);
                                transform: scale(0.75);
                                -webkit-transform-origin: 50% 0;
                                transform-origin: 50% 0;
                                box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.09);
                                background-color: #fff;
                                border-radius: 6px;
                                margin-top: 4px;
                                padding: 3px 0;
                                opacity: 0;
                                overflow: hidden;
                                pointer-events: none;
                                position: absolute;
                                top: 100%;
                                left: 0;
                                z-index: 999;
                                max-height: 250px;
                                overflow: auto;
                                border: 1px solid #ddd;
                            }

                            .dropdown-select .list:hover .option:not(:hover) {
                                background-color: transparent !important;
                            }
                            .dropdown-select .dd-search{
                                overflow:hidden;
                                display:flex;
                                align-items:center;
                                justify-content:center;
                                margin:0.5rem;
                            }

                            .dropdown-select .dd-searchbox{
                                width:90%;
                                padding:0.5rem;
                                border:1px solid #999;
                                border-color:#999;
                                border-radius:4px;
                                outline:none;
                            }
                            .dropdown-select .dd-searchbox:focus{
                                border-color:#12CBC4;
                            }

                            .dropdown-select .list ul {
                                padding: 0;
                            }

                            .dropdown-select .option {
                                cursor: default;
                                font-weight: 400;
                                line-height: 40px;
                                outline: none;
                                padding-left: 18px;
                                padding-right: 29px;
                                text-align: left;
                                transition: all 0.2s;
                                list-style: none;
                            }

                            .dropdown-select .option:hover,
                            .dropdown-select .option:focus {
                                background-color: #f6f6f6 !important;
                            }

                            .dropdown-select .option.selected {
                                font-weight: 600;
                                color: #12cbc4;
                            }

                            .dropdown-select .option.selected:focus {
                                background: #f6f6f6;
                            }

                            .dropdown-select a {
                                color: #aaa;
                                text-decoration: none;
                                transition: all 0.2s ease-in-out;
                            }

                            .dropdown-select a:hover {
                                color: #666;
                            }

                        </style>

                        <div class="card">
                            <div class="card-body">
                                @include('flash-message')
                                <div class="table-responsive">
                                    <table id="copy-print-csv" class="table v-middle">
                                        <thead>
                                        <tr>
                                            <th>Products</th>
                                            <th>Total Qnty</th>
                                            <th>Packs</th>
                                            <th>Updated Date</th>
                                            @if(\Illuminate\Support\Facades\Auth::user()->role==0)
                                            <th>Buying Price</th>
                                            @endif
                                            <th>Selling Price</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($products as $product)
                                        <tr>
                                            <td>
                                                <div class="media-box">
                                                    <img src="{{asset('uploads/product/'.$product->image)}}" class="media-avatar" alt="">
                                                    <div class="media-box-body">
                                                        <a href="#" class="text-truncate">{{$product->product_name}}</a>
                                                        <p><b>barcode</b>: {{$product->barcode}}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><b>{{$product->quantity}}</b></td>
                                        @if(is_null($product->number_of_pack))
                                            <td><b>N/A</b></td>
                                            @else
                                                <td><b>{{$product->number_of_pack}}</b></td>
                                            @endif
                                            <td>{{$product->date}}</td>
                                            @if(\Illuminate\Support\Facades\Auth::user()->role==0)
                                            <td>{{$product->buying_price}}</td>
                                            @endif
                                            <td>{{$product->selling_price}}</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <!-- Button trigger modal -->
                                </div>
                                <!-- Modal -->
                                <div id="viewStock" role="dialog" aria-modal="true" class="fade modal" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content" id="basic1">

                                        </div>
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
<div id="deleteStock" role="dialog" aria-modal="true" class="fade modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{url('dStock')}}" method="post">
                @csrf
                <div class="modal-header" style="background-color: red" id="basic">
                </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Delete</button>
            </div>
            </form>
        </div>
    </div>
</div>
    </div>
    <!-- *************
        ************ Main container end *************
    ************* -->

</div>
<!-- Page wrapper end -->
<!-- Modal -->
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

<!-- Data Tables -->
<script src="{{asset('vendor/datatables/dataTables.min.js')}}"></script>
<script src="{{asset('vendor/datatables/dataTables.bootstrap.min.js')}}"></script>

<!-- Custom Data tables -->
<script src="{{asset('vendor/datatables/custom/custom-datatables.js')}}"></script>

<!-- Download / CSV / Copy / Print -->
<script src="{{asset('vendor/datatables/buttons.min.js')}}"></script>
<script src="{{asset('vendor/datatables/jszip.min.js')}}"></script>
<script src="{{asset('vendor/datatables/pdfmake.min.js')}}"></script>
<script src="{{asset('vendor/datatables/vfs_fonts.js')}}"></script>
<script src="{{asset('vendor/datatables/html5.min.js')}}"></script>
<script src="{{asset('vendor/datatables/buttons.print.min.js')}}"></script>

<!-- Main Js Required -->
<script src="{{asset('js/main.js')}}"></script>
<script>
    $(document).on('click','.delete',function () {
        $value = $(this).attr('id');
        $.ajax({
            type:"get",
            url:"{{url('deleteStock')}}",
            data:{'id':$value},
            success:function (data) {
                $('#basic').html(data);
            },
            error:function (error) {
                console.log(error)
                alert('error')
            }
        });
    });
    $(document).on('click','.view',function () {
        $value = $(this).attr('id');
        $.ajax({
            type:"get",
            url:"{{url('viewStock')}}",
            data:{'id':$value},
            success:function (data) {
                $('#basic1').html(data);
            },
            error:function (error) {
                console.log(error)
                alert('error')
            }
        });
    });
    function create_custom_dropdowns() {
        $('select').each(function (i, select) {
            if (!$(this).next().hasClass('dropdown-select')) {
                $(this).after('<div class="dropdown-select wide ' + ($(this).attr('class') || '') + '" tabindex="0"><span class="current"></span><div class="list"><ul></ul></div></div>');
                var dropdown = $(this).next();
                var options = $(select).find('option');
                var selected = $(this).find('option:selected');
                dropdown.find('.current').html(selected.data('display-text') || selected.text());
                options.each(function (j, o) {
                    var display = $(o).data('display-text') || '';
                    dropdown.find('ul').append('<li class="option ' + ($(o).is(':selected') ? 'selected' : '') + '" data-value="' + $(o).val() + '" data-display-text="' + display + '">' + $(o).text() + '</li>');
                });
            }
        });

        $('.dropdown-select ul').before('<div class="dd-search"><input id="txtSearchValue" autocomplete="off" onkeyup="filter()" class="dd-searchbox" type="text"></div>');
    }

    // Event listeners

    // Open/close
    $(document).on('click', '.dropdown-select', function (event) {
        if($(event.target).hasClass('dd-searchbox')){
            return;
        }
        $('.dropdown-select').not($(this)).removeClass('open');
        $(this).toggleClass('open');
        if ($(this).hasClass('open')) {
            $(this).find('.option').attr('tabindex', 0);
            $(this).find('.selected').focus();
        } else {
            $(this).find('.option').removeAttr('tabindex');
            $(this).focus();
        }
    });

    // Close when clicking outside
    $(document).on('click', function (event) {
        if ($(event.target).closest('.dropdown-select').length === 0) {
            $('.dropdown-select').removeClass('open');
            $('.dropdown-select .option').removeAttr('tabindex');
        }
        event.stopPropagation();
    });

    function filter(){
        var valThis = $('#txtSearchValue').val();
        $('.dropdown-select ul > li').each(function(){
            var text = $(this).text();
            (text.toLowerCase().indexOf(valThis.toLowerCase()) > -1) ? $(this).show() : $(this).hide();
        });
    };
    // Search

    // Option click
    $(document).on('click', '.dropdown-select .option', function (event) {
        $(this).closest('.list').find('.selected').removeClass('selected');
        $(this).addClass('selected');
        var text = $(this).data('display-text') || $(this).text();
        $(this).closest('.dropdown-select').find('.current').text(text);
        $(this).closest('.dropdown-select').prev('select').val($(this).data('value')).trigger('change');
    });

    // Keyboard events
    $(document).on('keydown', '.dropdown-select', function (event) {
        var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
        // Space or Enter
        //if (event.keyCode == 32 || event.keyCode == 13) {
        if (event.keyCode == 13) {
            if ($(this).hasClass('open')) {
                focused_option.trigger('click');
            } else {
                $(this).trigger('click');
            }
            return false;
            // Down
        } else if (event.keyCode == 40) {
            if (!$(this).hasClass('open')) {
                $(this).trigger('click');
            } else {
                focused_option.next().focus();
            }
            return false;
            // Up
        } else if (event.keyCode == 38) {
            if (!$(this).hasClass('open')) {
                $(this).trigger('click');
            } else {
                var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
                focused_option.prev().focus();
            }
            return false;
            // Esc
        } else if (event.keyCode == 27) {
            if ($(this).hasClass('open')) {
                $(this).trigger('click');
            }
            return false;
        }
    });

    $(document).ready(function () {
        create_custom_dropdowns();
    });
</script>
</body>

<!-- Mirrored from bootstrap.gallery/unipro/v1-x/01-design-blue/products-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Aug 2021 04:49:15 GMT -->
</html>
