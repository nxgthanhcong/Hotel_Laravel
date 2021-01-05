@extends('user.theme.layout')

@section('content')
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
@if(Session::has('message'))
                <div class="alert alert-success">
                  {{ Session::get('message') }}
                </div>
@endif
<section class="w3l-booking-top">
    <!-- /form-16-section -->
    <div class="booking-form-61">
        <div class="container">
            <div class="booking-top-gds">
                <div class="booking-forms-16-info align-self">
                    <h5>Your Reservation</h5>
                    <h3 class="title-big">Select the Room, check for availability and book it.</h3>
                    <p>Lorem ipsum dolor sit amet,Ea consequuntur illum facere aperiam sequi optio consectetur
                        adipisicing elit Ea consequuntur illum.</p>
                </div>
                <div class="form-right-inf">
                    <div class="booking-form-content">
                        <h6 style="margin-bottom: 0px;">Kiểm tra book của bạn</h6>
                        @if(Session::has('ok'))
                            <div class="alert alert-success">
                                    {{ Session::get('message2') }}
                            </div>
                        @endif
                        <form class="card-body" action="{{route('thue.search')}}" method="GET" role="search">
                            {{ csrf_field() }}
                            <div class="input-group">
                            
                                <input id="input_value" name="input_value"  type="text" class="form-control" placeholder="Nhập số điện thoại ..." name="q">
                                
                                <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="submit">Tìm</button>
                                </span>
                            </div>
                        </form>
                        
                        <h6>hoặc book ngay nào</h6>
                        <form action="{{route('thue.store')}}" class="book-depature-6 signin-form" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                            <div class="d-grid grid-col-2">
                                <div class="hny-frm_grid">
                                    <h5>Họ và tên: </h5>
                                    <input id="TenKH" class="TenKH" name="TenKH" type="text" placeholder="Họ và tên" required="">
                                </div>
                                <div class="hny-frm_grid">
                                    <h5>Địa chỉ: </h5>
                                    <input id="DiaChi" class="name" name="DiaChi" type="text" placeholder="Địa chỉ" required="">
                                </div>
                                <div class="hny-frm_grid">
                                    <h5>Số dt: </h5>
                                    <input id="Sdt" class="name" name="Sdt" type="text" placeholder="Số điện thoại" required="">
                                </div>
                                <div class="hny-frm_grid">
                                    <label for="idcat">Phong:</label>
                                        <select id="val" name="MaPhong" class="form-control">
                                            @foreach ($ps ?? '' as $key =>$p)
                                            <option  value="{{$p->loaiphong->MaLoai}}">{{($key+1).'. '.$p->TenPhong}}</option>
                                            @endforeach
                                        </select>
                                </div>
                                
                                <div class="hny-frm_grid">
                                    <h5>Check-in Date</h5>
                                    <input id="NgayDen" class="date" name="NgayDen" type="date" placeholder="Date" required="">
                                </div>
                                <div class="hny-frm_grid">
                                    <h5>Check-out Date</h5>
                                    <input id="NgayDi" class="date" name="NgayDi" type="date" placeholder="Date" required="">
                                </div>
                                <div class="hny-frm_grid">
                                    <h5>Giá phòng</h5>
                                    <input id="Gia" class="gia" name="ThanhTien" type="text" value="1000000" required="" readonly>
                                </div>
                            </div>
                            
                            <button class="btn btn-style btn-secondary book mt-3">Đặt</button>
                            <p class="already">Chúng tôi sử dụng thông tin của bạn cho đơn đặt.</p>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@if(Session::has('ok'))
    <div class="alert alert-success">
                    {{ Session::get('message') }}
    </div>
    <script>

        $('#input_value').val('{{ Session::get('sdt')}}');
        $('#TenKH').val('{{ Session::get('name')}}');
        $('#Gia').val('{{ Session::get('gia')}}');
        $('#DiaChi').val('{{ Session::get('diachi')}}');
        $('#Sdt').val('{{ Session::get('sdt')}}');
        $('#val').val('{{ Session::get('phong')}}');
        $('#NgayDen').val('{{ Session::get('ngayden')}}');
        $('#NgayDi').val('{{ Session::get('ngaydi')}}');
    </script>
@endif
<script>
    $('select').on('change', function() {
        if(this.value == 1){
            $('.gia').val("1000000");
        }
        if(this.value == 2){
            $('.gia').val("1200000");
        }
        if(this.value == 3){
            $('.gia').val("1500000");
        }
        if(this.value == 4){
            $('.gia').val("2000000");
        }
    });

    //alert( this.value );
     $('#btnSearch').on('click',function(){

                 var value = $('#search_value').val();

                  $.ajax({
                      type: "post",
                     url: "{{ URL::to('thue/search') }}",
                    data: {
                        'search': value
                   },
                   success:function(output){
                        $('.TenKH').val(output.TenKH);
                   }
               });
             })
             $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
 });
</script>
@endsection