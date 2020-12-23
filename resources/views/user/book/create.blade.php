@extends('user.theme.layout')

@section('content')
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
                        <h6>Book Now</h6>
                        <form action="{{route('thue.store')}}" class="book-depature-6 signin-form" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="d-grid grid-col-2">
                                <div class="hny-frm_grid">
                                    <h5>MaPhong</h5>
                                    <input class="name" name="MaPhong" type="text" placeholder="Your Name" required="">
                                </div>
                                <div class="hny-frm_grid">
                                    <h5>MaKH</h5>
                                    <input class="name" name="MaKH" type="text" placeholder="Your Name" required="">
                                </div>
                                <div class="hny-frm_grid">
                                    <h5>Check-in Date</h5>
                                    <input class="date" name="NgayDen" type="date" placeholder="Date" required="">
                                </div>
                                <div class="hny-frm_grid">
                                    <h5>Check-out Date</h5>
                                    <input class="date" name="NgayDi" type="date" placeholder="Date" required="">
                                </div>
                                <div class="hny-frm_grid">
                                    <h5>ThanhTien</h5>
                                    <input class="name" name="ThanhTien" type="text" placeholder="Your Name" required="">
                                </div>
                            </div>
                            <div class="d-grid grid-col-2 mt-3">
                                <div class="hny-frm_grid">
                                    <h5>Adults</h5>
                                    <select id="category1" name="category1" required="">
                                        <option value="category1">01</option>
                                        <option value="category2">02</option>
                                        <option value="category3">03</option>
                                        <option value="category4">04</option>
                                        <option value="category2">05</option>
                                        <option value="category3">06</option>
                                    </select>
                                </div>
                                <div class="hny-frm_grid">
                                    <h5>Children</h5>
                                    <select id="category1" name="category1" required="">
                                        <option value="category1">01</option>
                                        <option value="category2">02</option>
                                        <option value="category3">03</option>
                                        <option value="category4">04</option>
                                        <option value="category2">05</option>
                                        <option value="category3">06</option>
                                    </select>
                                </div>
                            </div>
                            <button class="btn btn-style btn-secondary book mt-3">Book Now</button>
                            <p class="already">You are booking as guest.</p>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection