@extends('user.theme.layout')

@section('content')
<section class="w3l-breadcrumb">
    <div class="breadcrum-bg py-sm-5 py-4">
        <div class="container py-lg-3">

            <h2>Các phòng</h2>
            <p><a href="index.html">Trang chủ</a> &nbsp; / &nbsp; các phòng</p>

        </div>
    </div>
</section>



<div class="best-rooms w3l-blog py-5">
    <div class="container py-lg-5 py-sm-4">


    <div class="input-group mt-3 mb-3">
    <div class="input-group-prepend">
        <button id="btnsele" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown">
        Lọc theo loại
        </button>
        <div class="dropdown-menu">
        @foreach($lps ?? '' as $l)
        <a id="sele" class="dropdown-item" href="{{route('loc',$l->MaLoai)}}">{{$l->TenLoai}}</a>
        @endforeach
        </div>
    </div>

    </div>

        <div class="ban-content-inf row">
        @foreach($ps ?? '' as $p)
            <div class="maghny-gd-1 col-lg-4 col-md-6 mt-md-5 mt-4">
                <div class="maghny-grid">
                    <figure class="effect-lily">
                        <img class="img-fluid" src="/larangu/public/images/{{$p->Hinhanh}}" alt="">
                        <figcaption>
                            <div>
                                <h4 class="top-text">{{$p->TenPhong}}
                                    <ul>
                                        <li> <span class="fa fa-star"></span></li>
                                        <li> <span class="fa fa-star"></span></li>
                                        <li> <span class="fa fa-star"></span></li>
                                        <li> <span class="fa fa-star"></span></li>
                                        <li> <span class="fa fa-star-o"></span></li>
                                    </ul>
                                </h4>
                                <p></p>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="room-info">
                        <h3 class="room-title"><a href="#url">{{$p->GiaPhong}} VND</a></h3>
                        <ul class="mb-3">
                            <li><span class="fa fa-users"></span> {{$p->loaiphong->TenLoai}}</li>
                            <li><span class="fa fa-bed"></span> {{$p->Songuoi}} người</li>
                        </ul>
                        <p>{!!$p->loaiphong->Mota!!}</p>
                        <a href="{{route('thue.create')}}" class="btn mt-sm-4 mt-3">ĐẶT NGAY</a>
                        <div class="room-info-bottom">
                            <ul class="room-amenities">
                                <li><a href="#url"><span class="fa fa-bed" title="Beds"></span></a></li>
                                <li><a href="#url"><span class="fa fa-television" title="Television"></span></a></li>
                                <li><a href="#url"><span class="fa fa-bath" title="Private Bathroom"></span></a></li>
                                <li><a href="#url"><span class="fa fa-motorcycle" title="Bike Rental"></span></a></li>
                            </ul>
                            <a href="{{route('room',$p->MaPhong)}}" class="btn view">Xem chi tiết →</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center mt-5 mb-0">
                <li class="page-item disabled">
                    <a class="page-link page-prev" href="#previous" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link page-number" href="#1">1</a></li>
                <li class="page-item active"><a class="page-link page-number" href="#2">2</a></li>
                <li class="page-item"><a class="page-link page-number" href="#3">3</a></li>
                <li class="page-item"><a class="page-link page-next" href="#next">→</a></li>
            </ul>
        </nav>
    </div>
</div>
@endsection