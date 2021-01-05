@extends('user.theme.layout')

@section('content')
        <!-- main-slider -->
        <section class="w3l-main-slider" id="home">
        <div class="companies20-content">
            <div class="owl-one owl-carousel owl-theme">
                <div class="item">
                    <li>
                        <div class="slider-info banner-view bg bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg">
                                        <h5>Vị trí đắt địa. Đến và tận hưởng vẻ đẹp yên bình vào các ngày trong tuần
                                        </h5>
                                        <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="{{route('thue.create')}}"> ĐẶT PHÒNG NGAY</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info  banner-view banner-top1 bg bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg">
                                        <h5>Khách sạn của chúng tôi dẫn đầu trong việc thúc đẩy kinh tế thế giới.</h5>
                                        <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="{{route('thue.create')}}"> ĐẶT PHÒNG NGAY</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info banner-view banner-top3 bg bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg">
                                        <h5>Trải nghiệm tốt, uy tín đặt lên hàng đầu</h5>
                                        <a class="btn btn-style transparent-btn mt-sm-5 mt-4" href="{{route('thue.create')}}"> ĐẶT PHÒNG NGAY</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </section>
    <!-- /main-slider -->
        <section class="w3l-availability-form" id="booking">
        <!-- /w3l-availability-form-section -->
        <div class="w3l-availability-form-main py-5">
            
        </div>
    </section>
    <!-- //w3l-availability-form-section -->
    <!-- about -->
    <section class="w3l-about py-5">
        <div class="container py-sm-4">
            <div class="row">
                <div class="col-lg-6 about-left mb-md-0 mb-5">
                    <h3 class="title-big">Congz Hotel, thế giới của bạn</h3>
                    <h5>Chúng tôi luôn tạo điều kiện tốt nhất cho khách hàng của mình</h5>
                    <p class="mt-3">Tọa lạc tại Thành phố Hồ Chí Minh, cách Bảo tàng Chứng tích Chiến tranh 500 m, Orchids Saigon Hotel cung cấp chỗ nghỉ với nhà hàng, chỗ đỗ xe riêng miễn phí, trung tâm thể dục và quán bar. Phòng sạch đẹp , thoáng ... chất lượng rất tốt ... nhân viên nhiệt tình thân thiện.</p>
                    <a href="{{route('about')}}" class="btn btn-style btn-primary mt-sm-5 mt-4">Xem thêm về chúng tôi</a>
                </div>
                <div class="col-lg-6 about-right position-relative mt-lg-0 mt-5">
                    <img src="user/images/top.jpg" alt="" class="img-fluid img-border mt-4" />
                    <img src="user/images/bottom.jpg" alt="" class="img-fluid position-absolute img-position" />
                </div>
            </div>
        </div>
    </section>
    <!-- //about -->
    <div class="best-rooms py-5">
        <div class="container py-lg-5 py-sm-4">
            <h3 class="title-big text-center">Phòng tốt nhất của chúng tôi</h3>
            <div class="ban-content-inf row py-lg-3">
                <div class="maghny-gd-1 col-lg-6">
                    <div class="maghny-grid">
                        <figure class="effect-lily">
                            <img class="img-fluid" src="user/images/room1.jpg" alt="">
                            <figcaption class="w3set-hny">
                                <div>
                                    <h4 class="top-text">Khách sạn sang trọng và khu nghỉ dưỡng đỉnh cao
                                        <span>Đáng trải nghiệm</span></h4>
                                    <p>Chỉ từ 1.000.000</p>
                                </div>
                            </figcaption>
                        </figure>
                        <div class="room-info">
                            <h3 class="room-title"><a href="room-single.html">Phòng cao cấp</a></h3>
                            <ul class="mb-3">
                                <li><span class="fa fa-users"></span> 2 Guests</li>
                                <li><span class="fa fa-bed"></span> Double bed</li>
                                <li><span class="fa fa-bed"></span> 15sqft</li>
                            </ul>
                            <p>Phòng cao cấp đang là lựa chọn hot nhất bên chỗ chúng tôi với những trải nghiệm vượt tầm tưởng tượng của quý khách.</p>
                            <a href="{{route('rooms')}}" class="btn btn-style btn-primary mt-sm-4 mt-3">Xem các phòng</a>
                        </div>
                    </div>
                </div>
                <div class="maghny-gd-1 col-lg-6 mt-lg-0 mt-4">
                    <div class="row">
                        <div class="maghny-gd-1 col-6">
                            <div class="maghny-grid">
                                <figure class="effect-lily border-radius">
                                    <img class="img-fluid" src="user/images/room2.jpg" alt="" />
                                    <figcaption>
                                        <div>
                                            <h4><span>Phòng gia đình</span></h4>
                                            <p>Từ 1.000.000 </p>
                                        </div>

                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="maghny-gd-1 col-6">
                            <div class="maghny-grid">
                                <figure class="effect-lily border-radius">
                                    <img class="img-fluid" src="user/images/room3.jpg" alt="" />
                                    <figcaption>
                                        <div>
                                            <h4><span>Phòng đôi</span></h4>
                                            <p>Từ 1.200.000 </p>
                                        </div>

                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="maghny-gd-1 col-6 mt-4">
                            <div class="maghny-grid">
                                <figure class="effect-lily border-radius">
                                    <img class="img-fluid" src="user/images/room4.jpg" alt="" />
                                    <figcaption>
                                        <div>
                                            <h4> <span>Phòng cao cấp</span></h4>
                                            <p>Từ 1.500.000</p>
                                        </div>

                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="maghny-gd-1 col-6 mt-4">
                            <div class="maghny-grid">
                                <figure class="effect-lily border-radius">
                                    <img class="img-fluid" src="user/images/room5.jpg" alt="" />
                                    <figcaption>
                                        <div>
                                            <h4><span>Phòng giải trí</span></h4>
                                            <p>Từ ???? </p>
                                        </div>

                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="w3l-index3">
        <div class="midd-w3 py-5">
            <div class="container py-lg-5 py-md-3">
                <div class="row">
                    <div class="col-lg-6 left-wthree-img text-righ">
                        <div class="position-relative">
                            <img src="https://media-cdn.tripadvisor.com/media/photo-s/1a/34/56/0d/gic-land-luxury-hotel.jpg" alt="" class="img-fluid" />
                            <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                                <span class="video-play-icon">
                                    <span class="fa fa-play"></span>
                                </span>
                            </a>
                            <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                            <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                                <iframe src="https://player.vimeo.com/video/246941769" allow="autoplay; fullscreen" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-lg-0 mt-5 about-right-faq align-self">
                        <h6>Khám phá một vài điểm đặc biệt về chúng tôi</h6>
                        <h3 class="title-big">20 Kinh nghiệm trong ngành Nhà Hàng và Khách Sạn</h3>
                        <p class="mt-3">Khách sạn không chỉ là khách sạn, nó là thiên đường cho người trải nghiệm.</p>
                        <ul class="w3l-right-book mt-4">
                            <li><span class="fa fa-check" aria-hidden="true"></span>Chúng tôi tạo điều kiện tốt nhất cho khách hàng của mình</li>
                            <li><span class="fa fa-check" aria-hidden="true"></span>Theo dõi Congz Hotel</li>
                            <li><span class="fa fa-check" aria-hidden="true"></span>Khách sạn và khu nghĩ dưỡng cao cấp thuộc top</li>
                            <li><span class="fa fa-check" aria-hidden="true"></span>Có phòng cặp đôi và phòng cho hộ gia đình</li>
                            <li><span class="fa fa-check" aria-hidden="true"></span>Tận hưởng giay phút của bạn</li>
                        </ul>
                        <a href="{{route('thue.create')}}" class="btn btn-style btn-primary mt-4">ĐẶT PHÒNG NGAY</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- quotation -->
    <div class="quotation py-5">
        <div class="container py-xl-5 py-lg-3">
            <div class="welcome-left text-center py-md-5 py-3">
                <h3>Trải nghiệm sang trọng. Thư giãn và tận hưởng kỳ nghỉ của bạn</h3>
                <a href="{{route('thue.create')}}" class="btn btn-style transparent-btn mt-sm-5 mt-4 mr-2">ĐẶT PHÒNG NGAY</a>
                <a href="{{route('contact')}}" class="btn btn-style btn-primary mt-sm-5 mt-4">Liên hệ với chúng tôi</a>
            </div>
        </div>
    </div>
    <!-- //quotation -->

    <section class="w3l-logos py-5">
        <div class="container py-lg-3">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view">
                    <img src="user/images/logo1.jpg" alt="company-logo" class="img-fluid" />
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view">
                    <img src="user/images/logo2.jpg" alt="company-logo" class="img-fluid" />
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view mt-sm-0 mt-4">
                    <img src="user/images/logo3.jpg" alt="company-logo" class="img-fluid" />
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view mt-md-0 mt-4">
                    <img src="user/images/logo4.jpg" alt="company-logo" class="img-fluid" />
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view mt-lg-0 mt-4">
                    <img src="user/images/logo2.jpg" alt="company-logo" class="img-fluid" />
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 logo-view mt-lg-0 mt-4">
                    <img src="user/images/logo1.jpg" alt="company-logo" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
@endsection