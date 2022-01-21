@include('adminPartial.header')
<!-- Page header ends -->
<title>Hotel Dashboard - POS</title>

<!-- Content wrapper scroll start -->
<div class="content-wrapper-scroll">
    <!-- Content wrapper start -->
    <div class="content-wrapper">
        <h2>Hotel Dashboard</h2>

        @if(\Illuminate\Support\Facades\Auth::user()->role==0)
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
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="container">
                            <div class="main">
                                <h5>Stock Products</h5>
                                <select name="productId">
                                    <option value="">Select Product</option>
                                    @foreach($products as $product)
                                        @if($product->id==1||$product->id==2||$product->id==3||$product->id==4)
                                        <option value="{{$product->barcode}}">{{$product->product_name}}</option>
                                            @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Search</button>
                    <h4>DAILY REPORT</h4>
                </div>
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

            </form>
        @endif
        @include('flash-message')
    <!-- Row start -->
        @if(\Illuminate\Support\Facades\Auth::user()->role==0)
            <div class="row gutters">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="stats-tile">
                        <div class="sale-icon">
                            <i class="icon-shopping-bag1"></i>
                        </div>
                        <div class="sale-details">
                            <h2>ksh {{\App\Models\salesHotel::sum('profit')-\App\Models\Hotelexpense::where('end_date',null)->sum('amount')}}</h2>
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
                            <h2>Ksh {{\App\Models\salesHotel::where('date',\Carbon\Carbon::now()->format('Y-m-d'))->sum('total')}}</h2>
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
                            <h2>Ksh {{\App\Models\Hotelexpense::where('end_date',null)->sum('amount')}}</h2>
                            <p>EXPENSE</p>
                        </div>
                    </div>
                </div>
            </div>
    @endif
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
                        <div class="card-title">Todays Sales  <b style="color: red;font-size: 20px">{{\Carbon\Carbon::now()->format('Y-m-d')}}</b></div>
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
<!-- Mirrored from bootstrap.gallery/unipro/v1-x/01-design-blue/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Aug 2021 04:43:13 GMT -->
</html>
