@extends('user.theme.layout')

@section('content')
    <!-- room-single-block -->
<section class="room-single-block">
    <div class="content-with-slider">
        <div class="container">
            <div class="content-photo-1 d-grid">
                <div class="content-photo-left text-center">
                    <h4>Congz Hotel</h4>
                    <h6>{{$p->TenPhong}}</h6>
                    <div class="border-line">
                        <div class="bg">
                            <span class="price">{{$p->GiaPhong}}</span>
                            <p> Một đêm</p>
                        </div>
                        <div class="book-btn px-2">
                            <a href="{{route('thue.create')}}" class="btn btn-style btn-secondary mt-3">Đặt ngay</a>
                        </div>
                    </div>
                    <ul class="room-amenities">
                        <li><a href="#url"><span class="fa fa-beer"></span> Quán bar mini</a></li>
                        <li><a href="#url"><span class="fa fa-users"></span> {{$p->Songuoi}} người</a></li>
                        <li><a href="#url"><span class="fa fa-bed"></span> Giường đôi</a></li>
                    </ul>
                    <a href="{{route('rooms')}}" class="back"> <span class="fa fa-long-arrow-left"></span> Trở về danh sách phòng</a>
                </div>
                <div class="content-photo-right">
                    <div class="csslider infinity" id="slider1">
                        <input type="radio" name="slides" checked="checked" id="slides_1" />
                        <input type="radio" name="slides" id="slides_2" />
                        <input type="radio" name="slides" id="slides_3" />
                        <input type="radio" name="slides" id="slides_4" />
                        <ul class="banner_slide_bg">
                            <li>
                                <img class="img" src="/larangu/public/images/{{$p->Hinhanh}}" alt="">
                            </li>
                            <li>
                                <img class="img" src="/larangu/public/user/images/slide4.jpg" alt="">
                            </li>
                            <li>
                                <img class="img" src="/larangu/public/user/images/slide2.jpg" alt="">
                            </li>
                            <li>
                                <img class="img" src="/larangu/public/user/images/slide3.jpg" alt="">
                            </li>
                        </ul>
                        <div class="arrows">
                            <label for="slides_1"></label>
                            <label for="slides_2"></label>
                            <label for="slides_3"></label>
                            <label for="slides_4"></label>
                        </div>
                        <div class="navigation">
                            <div>
                                <label for="slides_1"></label>
                                <label for="slides_2"></label>
                                <label for="slides_3"></label>
                                <label for="slides_4"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //room-single-block -->
<section class="w3l-roomsingleblock1 py-5">
	<div class="container py-sm-4">
		<div class="row">
			<div class="col-lg-3 col-md-4 col-6">
				<img src="/larangu/public/user/images/room3.jpg" alt="" class="img-fluid">
			</div>
			<div class="col-lg-3 col-md-4 col-6">
				<img src="/larangu/public/user/images/room4.jpg" alt="" class="img-fluid">
			</div>
			<div class="col-lg-6 roomsingle mt-lg-0 mt-4">
				<h3 class="title-small">{{$p->TenPhong}}</h3>
				<p class="roomsingle mt-3">{{$p->TenPhong}} được thiết kế tinh tế sang trọng nội thất đầy đủ tiện nghi hiện đại, cửa sổ kính rộng thoáng bao quát toàn cảnh thành phố mang đến cho bạn một không gian thanh bình và dễ chịu sẽ là sự lựa chọn cho những doanh nhân và khách du lịch.</p>
			</div>
		</div>
	</div>
</section>
<section class="w3l-roomsingleblock1 py-5">
	<div class="container py-sm-4">
		<div class="row">
			<div class="col-lg-7 roomsingle">
                <h3 class="title-small">Tiện nghi:</h3>
                <ul class="w3l-right-book mt-4">
                    <li><a hef="#url"><span class="fa fa-check" aria-hidden="true"></span>Tivi màn hình phẳng</a></li>
                    <li><a hef="#url"><span class="fa fa-check" aria-hidden="true"></span>WiFi tốc độ cao miễn phí</a></li>
                    <li><a hef="#url"><span class="fa fa-check" aria-hidden="true"></span>Phòng tắm riêng</a></li>
                    <li><a hef="#url"><span class="fa fa-check" aria-hidden="true"></span>Chỗ đậu xe miễn phí</a></li>
             
                    <li><a hef="#url"><span class="fa fa-check" aria-hidden="true"></span>Hồ bơi cực rộng</a></li>
                    <li><a hef="#url"><span class="fa fa-check" aria-hidden="true"></span>Máy lạnh xịn</a></li>
                    <li><a hef="#url"><span class="fa fa-check" aria-hidden="true"></span>Đồ vệ sinh cá nhân</a></li>
                    <li><a hef="#url"><span class="fa fa-check" aria-hidden="true"></span>Cho thuê xe đạp</a></li>
                </ul>
			</div>
			<div class="col-lg-5 mt-lg-0 mt-4">
				<img src="/larangu/public/user/images/facilities.jpg" alt="" class="img-fluid">
			</div>
		</div>
	</div>
</section>
@endsection