@include('adminPartial.header')
        <!-- Page header ends -->
<title>Hotel Stock - Admin Dashboard</title>

        <!-- Content wrapper scroll start -->
        <div class="content-wrapper-scroll">

            <!-- Content wrapper start -->
            <div class="content-wrapper">

                <!-- Row start -->
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                        <div class="card">
                            <div class="card-body">
                                @include('flash-message')
                                <div class="table-responsive">
                                    <a href="{{url('addHotelProduct')}}"><button class="btn btn-info">Add Product</button></a>
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
                                            <th>Actions</th>
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
                                            @if(is_null($product->number_of_pack))
                                                @if($product->barcode=='0501'||$product->barcode=='0503'||$product->barcode=='0500'||$product->barcode=='0504')
                                            <td><b>{{$product->quantity}}</b></td>
                                                @else
                                                    <td><b>N/A</b></td>

                                                @endif

                                            @else
                                                <td><b>{{$product->number_of_pack*$product->quantity_of_pack+$product->quantity}}</b></td>
                                            @endif
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
                                            <td>
                                                <div class="actions">
                                                    <a href="#" class="view" title="View" id="{{$product->id}}" data-bs-toggle="modal" data-bs-target="#viewStock">
                                                        <i class="icon-eye text-info"></i>
                                                    </a>
                                                    <a href="{{url('stockHotelEdit',$product->id)}}" data-placement="top" title="Edit" data-original-title="Edit">
                                                        <i class="icon-edit1 text-info"></i>
                                                    </a>
                                                        <a href="#" class="delete" id="{{$product->id}}" data-bs-toggle="modal" data-bs-target="#deleteStock" data-placement="top" title="Delete" data-original-title="Delete">
                                                            <i class="icon-x-circle text-danger"></i>
                                                        </a>
                                                </div>
                                            </td>
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
            <div class="app-footer">?? Uni Pro Admin 2021</div>
            <!-- App footer end -->

        </div>
        <!-- Content wrapper scroll end -->
<div id="deleteStock" role="dialog" aria-modal="true" class="fade modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{url('dHotelStock')}}" method="post">
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
            url:"{{url('deleteHotelStock')}}",
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
            url:"{{url('viewHotelStock')}}",
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
</script>
</body>

<!-- Mirrored from bootstrap.gallery/unipro/v1-x/01-design-blue/products-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Aug 2021 04:49:15 GMT -->
</html>
