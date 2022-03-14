@include('adminPartial.header')
<title>Pos Sell Hardware - HARDWARE</title>

<!-- Content wrapper scroll start -->
<div class="content-wrapper-scroll">

    <!-- Content wrapper start -->
    <div class="content-wrapper">
        <form action="{{url('highly')}}" method="post">
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
                @if(!empty($start_date))
                <h4>DAILY REPORT <h5>From <b style="color: red">{{$start_date}}</b> To <b style="color: red">{{$end_date}}</b></h5></h4>
                @else
                    <h4>DAILY REPORT <h5>From <b style="color: red">{{$today}}</b></h5></h4>

                @endif
                    <br>
                <br>
            </div>
        </form>
        <!-- Row start -->
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <!-- Row start -->
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card h-475">
                            <div class="card-body pt-0" style="height: 300px;overflow: auto">

                                <div class="earnings-detail">
                                    <div class="earnings-info">
                                        <h5 class="text-danger">Hardware Highly moving Products</h5>
                                    </div>
                                </div>
                                @include('flash-message')

                                <div class="table-responsive">
                                    <table class="table products-table">
                                        <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(!empty($sals))
                                        @foreach($sals as $sal)
                                            <tr>
                                                <td>
                                                    <div class="media-box">
                                                        <img class="media-avatar" src="{{asset('uploads/product/'.$sal->image)}}" alt="">
                                                        <div class="media-box-body text-truncate">
                                                            <a href="#">{{$sal->product_name}}</a>
                                                            <p>#{{$sal->barcode}}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><b>{{\App\Models\Sales::where('barcode',$sal->barcode)->whereBetween('date',array($start_date, $end_date))->sum('quantity')}}</b></td>
                                            </tr>
                                        @endforeach
                                        @else
                                            @foreach($sales as $sale)
                                                <tr>
                                                    <td>
                                                        <div class="media-box">
                                                            <img class="media-avatar" src="{{asset('uploads/product/'.$sale->image)}}" alt="">
                                                            <div class="media-box-body text-truncate">
                                                                <a href="#">{{$sale->product_name}}</a>
                                                                <p>#{{$sale->barcode}}</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><b>{{\App\Models\Sales::where('barcode',$sale->barcode)->where('date',\Carbon\Carbon::now()->format('Y-m-d'))->sum('quantity')}}</b></td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row end -->

            </div>
        </div>
    </div>
    <!-- Content wrapper end -->

    <!-- App Footer start -->
    <div class="app-footer">© Uni Pro Admin 2021</div>
    <!-- App footer end -->

</div>
<!-- Content wrapper scroll end -->

</div>
<!-- *************
    ************ Main container end *************
************* -->

</div>
<!-- Payment Modal -->
<!-- Modal start -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Make payment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="field-wrapper">
                    <select class="form-select" id="paymentMethod">
                        <option value="1">Mpesa</option>
                        <option value="2">Cash</option>
                    </select>
                    <div class="field-placeholder">Payment Method</div>
                </div>
                <div class="field-wrapper" id="phon">
                    <input type="text" class="form-control" id="phone">
                    <div class="field-placeholder">Phone Number</div>
                </div>
                <div class="field-wrapper" id="amount">
                    <input type="text" value="{{\App\Models\Sell::sum('total')}}" class="form-control" required>
                    <div class="field-placeholder">Amount</div>
                </div>
                <div class="field-wrapper">
                    <div class="input-group">
                        <input type="date" class="form-control" id="date" required>
                    </div>
                    <div class="field-placeholder">Date</div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-success" id="sellButton">PAY</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="updSell" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{url('burgain')}}" method="post">
            @csrf
            <div class="modal-content">
                <div id="updateSell">
                </div>
                <h4>Discount <span id="ddd"></span></h4>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" id="burgainButton">UPDATE</button>
                </div>
            </div>
        </form>
    </div>
</div>


<!-- Modal end -->
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
<script src="vendor/apex/custom/reports/sales.js"></script>
<script src="vendor/apex/custom/reports/sales2.js"></script>
<script src="vendor/apex/custom/reports/revenue.js"></script>
<script src="vendor/apex/custom/reports/orders.js"></script>
<script src="vendor/apex/custom/reports/sparkline.js"></script>

<!-- Rating JS -->
<script src="vendor/rating/raty.js"></script>
<script src="vendor/rating/raty-custom.js"></script>

<!-- Main Js Required -->
<script src="js/main.js"></script>

</body>
<script>
    $(document).ready(function () {
        $('#printDiv').hide();
    });
    $('#paymentMethod').change(function () {
        var value = $(this).val();
        if (value==2){
            $('#phon').hide();
            $('#amount').show();
        }
        else{
            $('#phon').show();

        }
    });
    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable div").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });

    $(document).on('click','.sell',function () {
        $value = $(this).attr('id');
        $.ajax({
            type:"get",
            url:"{{url('sellStock')}}",
            data:{'id':$value},
            success:function (data) {
                location.reload();
            },
            error:function (error) {
                console.log(error)
                alert('error')
            }
        });
    });
    $(document).on('click','.add',function () {
        $value = $(this).attr('id');
        $.ajax({
            type:"get",
            url:"{{url('add')}}",
            data:{'id':$value},
            success:function (data) {
                location.reload();
            },
            error:function (error) {
                console.log(error)
                alert('error')
            }
        });
    });
    $(document).on('click','.minus',function () {
        $value = $(this).attr('id');
        $.ajax({
            type:"get",
            url:"{{url('minus')}}",
            data:{'id':$value},
            success:function (data) {
                location.reload();
            },
            error:function (error) {
                console.log(error)
                alert('error')
            }
        });
    });
    $(document).on('click','.del',function () {
        $value = $(this).attr('id');
        $.ajax({
            type:"get",
            url:"{{url('del')}}",
            data:{'id':$value},
            success:function (data) {
                location.reload();
            },
            error:function (error) {
                console.log(error)
                alert('error')
            }
        });
    });
    $(document).on('click','.uSell',function () {
        $value = $(this).attr('id');
        $.ajax({
            type:"get",
            url:"{{url('uSell')}}",
            data:{'id':$value},
            success:function (data) {
                $('#updateSell').html(data);
            },
            error:function (error) {
                console.log(error)
                alert('error')
            }
        });
    });
    $('#sellButton').on('click',function () {
        $paymentMethod = $('#paymentMethod').val();
        $phone = $('#phone').val();
        $.ajax({
            type:"get",
            url:"{{url('sales')}}",
            data:{'paymentMethod':$paymentMethod,'phone':$phone},
            success:function (data) {
                $('#returnPrint').html(data);
                $.ajax({
                    type:"get",
                    url:"{{url('CalTotal')}}",
                    success:function (data) {
                        $('#calTotal').html(data);
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
    });
    $(document).on('change','.sel',function () {
        $selling_p = $(this).val();
        $buying_p = $('#buying_p').val();
        $quantity = $('#quant').val();
        $realSelling_p = $('#realSelling').val();
        $dis = $realSelling_p-$selling_p;
        $discount = $dis*$quantity;
        $calPercent = $discount/$realSelling_p;
        $percentageDiscount = $calPercent*100;

        $('#ddd').append($percentageDiscount,'%');
        if ($percentageDiscount>5){
            alert('DISCOUNT HIGH')
            location.reload();
        }
    });
</script>
<!-- Mirrored from bootstrap.gallery/unipro/v1-x/01-design-blue/reports.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Aug 2021 04:47:02 GMT -->
</html>
