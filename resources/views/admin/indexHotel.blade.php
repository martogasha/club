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
                        <label for="myHouse">Choose Product:</label>
                        <input list="magicHouses" id="myHouse" name="productId" placeholder="type here..." />
                        <datalist id="magicHouses">
                            @foreach($products as $product)
                                <option value="{{$product->barcode}}">{{$product->product_name}}</option>
                            @endforeach

                        </datalist>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-sm">
                        <label class="checkbox-inline"><input type="checkbox" value="1" name="pMeth">Mpesa</label>
                        </div>
                        <div class="col-sm">
                        <label class="checkbox-inline"><input type="checkbox" value="2" name="pMeth">Cash</label>
                        </div>
                        <div class="col-sm">
                        <label class="checkbox-inline"><input type="checkbox" value="3" name="pMeth">Credit</label>
                        </div>
                    </div>
                    <style>
                        /* Only for styling, not required for it to work */
                        form label {
                            font-family: "Open Sans", sans-serif;
                            font-size: 1.2rem;
                            margin-bottom: 12px;
                        }

                        form input {
                            border: 2px solid lightslategray;
                            height: 40px;
                            border-radius: 3px;
                            padding: 5px;
                            font-size: 1rem;
                        }

                        form input:focus {
                            outline: none;
                            border: 2px solid darkslategray;
                        }

                    </style>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Search</button>
                    <h4>DAILY REPORT</h4>
                </div>

            </form>

        @endif
        @include('flash-message')
        <div id="printDiv">

            <div class="container">
                <header class="center">
                    <h4>Simumu Hotel</h4>
                </header>
                <section>
                    <table class="summary" cellspacing="0">
                        <tbody>
                        <tr>
                            <td>Till No</td>
                            <td>247247</td>
                        </tr>
                        <tr></tr>
                        <tr>
                            <td>Contact</td>
                            <td>0790436545, 0728930978, 0714395000</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="separator"></div>
                    <table>
                        <thead>
                        <tr>
                            <th scope="col">Item</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>


                            <th scope="col">Qnty</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>

                            <th scope="col">Price</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>


                            <th scope="col">Amount</th>


                        </tr>
                        </thead>
                        <tbody id="returnPrint">

                        </tbody>
                    </table>
                    <div class="separator"></div>
                    <table class="summary" cellspacing="0">
                        <tbody>
                        <tr>
                            <td>Total TAX 16%</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="separator"></div>
                    <table class="summary" cellspacing="0">
                        <tbody>
                        <tr>
                            <td>Total</td>
                            <td><span id="calTotal"></span></td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="summary" cellspacing="0">
                        <tbody>
                        <tr>
                            <td>Served By:</td>
                            <td>{{\Illuminate\Support\Facades\Auth::user()->first_name}} {{\Illuminate\Support\Facades\Auth::user()->last_name}}</td>
                        </tr>
                        </tbody>
                    </table>
                    <div id="paymentMeth">

                    </div>
                    <div class="separator"></div>
                </section>
            </div>
            <p>Thank you for your service</p>

            <style>
                .container {
                    border: 1px solid crimson;
                    width: 100%;
                }
                body {
                    font-family: monospace;
                    width: 100%;
                    color: #000;
                    margin: 0;
                    padding: 0 0 50mm;
                    font-size: 11pt;
                }

                .center {
                    text-align: center;
                }

                img, .margin {
                    margin: 15px;
                }

                .separator {
                    display: block;
                    width: 100%;
                    height: 0;
                    margin: 10px 0;
                    border-bottom: 1px dashed black;
                }

                .product-list {
                    width: 100%;
                    padding-bottom: 50px;
                    word-break: break-word;
                }
                .product-list thead th{
                    font-weight: normal;
                }

                .summary {
                    width: 100%;
                }

                .summary td:last-child {
                    text-align: right;
                }

                .info {
                    margin: 50px 0;
                }

            </style>
        </div>

        <!-- Row start -->
        @if(\Illuminate\Support\Facades\Auth::user()->role==0)
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="stats-tile">
                        <div class="sale-icon">
                            <i class="icon-shopping-bag1"></i>
                        </div>
                        <div class="sale-details">
                            <h2 style="color: black">Ksh {{$totalProfit}}</h2>
                            <p>Total Profit</p>
                        </div>

                    </div>
                </div>
            </div>
                <div class="row gutters">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="stats-tile">
                        <div class="sale-icon">
                            <i class="icon-shopping-bag1"></i>
                        </div>
                        <div class="sale-details">
                            <h2>ksh {{$takeAwayProf}}</h2>
                            <p>Take Away + Others Profit</p>
                        </div>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="stats-tile">
                        <div class="sale-icon">
                            <i class="icon-shopping-bag1"></i>
                        </div>
                        <div class="sale-details">
                            <h2>ksh {{$chipsProf}}</h2>
                            <p>Chips Profit</p>
                        </div>

                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="stats-tile">
                        <div class="sale-icon">
                            <i class="icon-shopping-bag1"></i>
                        </div>
                        <div class="sale-details">
                            <h2>ksh {{$sodaProf}}</h2>
                            <p>Soda Profit</p>
                        </div>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="stats-tile">
                        <div class="sale-icon">
                            <i class="icon-shopping-bag1"></i>
                        </div>
                        <div class="sale-details">
                            <h2>ksh {{$smokieProf}}</h2>
                            <p>Smokie Profit</p>
                        </div>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="stats-tile">
                        <div class="sale-icon">
                            <i class="icon-shopping-bag1"></i>
                        </div>
                        <div class="sale-details">
                            <h2>Ksh {{$dailySales}}</h2>
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
                            <h2>Ksh {{$expe}}</h2>
                            <p>EXPENSE</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="stats-tile">
                        <div class="sale-icon">
                            <i class="icon-shopping-bag1"></i>
                        </div>
                        <div class="sale-details">
                            <h2 style="color: red">Ksh {{$credit}}</h2>
                            <p>Credits</p>
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
                                    <th>client Name</th>
                                    <th>Payment Method</th>
                                    <th>Date</th>
                                    <th>Print</th>
                                    <th>View Products</th>
                                    <th>Pay</th>
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
                                        @if(!empty($sale->name))
                                            <td>{{$sale->name}}</td>
                                        @else
                                            <td><span class="badge badge-warning">N/A</span></td>

                                        @endif
                                        @if($sale->payment_method==1)
                                            <td>Mpesa</td>
                                            @elseif($sale->payment_method==3)
                                            <td>Credit</td>
                                        @else
                                            <td>Cash</td>
                                        @endif
                                        <td>{{$sale->date}}</td>
                                        <td><button class="btn btn-danger print" id="{{$sale->id}}">Reprint</button> </td>
                                        <td><button class="btn btn-success view" id="{{$sale->id}}" data-bs-toggle="modal" data-bs-target="#viewOrderProducts">View</button> </td>
                                        @if($sale->payment_method==3)
                                        <td><button class="btn btn-info pay" id="{{$sale->id}}" data-bs-toggle="modal" data-bs-target="#payOrder">Pay</button> </td>
                                        @endif
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
<div class="modal fade" id="payOrder" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Make payment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('creditPay')}}" method="post">
                @csrf
                <div class="modal-body" id="payC">


                </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">PAY</button>
            </div>
            </form>
        </div>
    </div>
</div>

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
    $(document).ready(function () {
        $('#printDiv').hide();
    });
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
    $(document).on('click','.print',function () {
        $value = $(this).attr('id');
        $.ajax({
            type:"get",
            url:"{{url('reprintReceipt')}}",
            data:{'id':$value},
            success:function (data) {
                $('#returnPrint').html(data);
                $.ajax({
                    type:"get",
                    url:"{{url('CalTotalHotel')}}",
                    success:function (data) {
                        $('#calTotal').html(data);
                        $.ajax({
                            type:"get",
                            url:"{{url('receiptF')}}",
                            data:{'id':$value},
                            success:function (data) {
                                $('#paymentMeth').html(data);
                                var printContents = document.getElementById('printDiv').innerHTML;
                                var originalContents = document.body.innerHTML;

                                document.body.innerHTML = printContents;

                                window.print();

                                document.body.innerHTML = originalContents;
                                location.reload();

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

            },
            error:function (error) {
                console.log(error)
                alert('error')
            }
        });
    });

    $(document).on('click','.pay',function () {
        $value = $(this).attr('id');
        $.ajax({
            type:"get",
            url:"{{url('payCredit')}}",
            data:{'id':$value},
            success:function (data) {
                $('#payC').html(data);
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
