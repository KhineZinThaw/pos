@extends('layouts.master')

@section('title')
    Tracking
@endsection

@section('content')
 <!--================Home Banner Area =================-->
  <!-- breadcrumb start-->
  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <p>Home / tracking</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!--================Tracking Box Area =================-->
<section class="tracking_box_area section_padding">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-12">
        <div class="tracking_box_inner">
          <p>To track your order please enter your Order ID in the box below and press the "Track" button. This was
            given
            to you on your receipt and in the confirmation email you should have received.</p>
          <form class="row tracking_form" action="#" method="post" novalidate="novalidate">
            <div class="col-md-12 form-group">
              <input type="text" class="form-control" id="order" name="order" placeholder="Order ID">
            </div>
            <div class="col-md-12 form-group">
              <input type="email" class="form-control" id="email" name="email" placeholder="Billing Email Address">
            </div>
            <div class="col-md-12 form-group">
              <button type="submit" value="submit" class="btn_3">Track Order</button>
            </div>
          </form>
        </div>
      </div>

    </div>

  </div>
</section>
<!--================End Tracking Box Area =================-->

<!-- subscribe_area part start-->
<section class="instagram_photo">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
              <div class="instagram_photo_iner">
                  <div class="single_instgram_photo">
                      <img src="img/instagram/inst_1.png" alt="">
                      <a href="#"><i class="ti-instagram"></i></a> 
                  </div>
                  <div class="single_instgram_photo">
                      <img src="img/instagram/inst_2.png" alt="">
                      <a href="#"><i class="ti-instagram"></i></a> 
                  </div>
                  <div class="single_instgram_photo">
                      <img src="img/instagram/inst_3.png" alt="">
                      <a href="#"><i class="ti-instagram"></i></a> 
                  </div>
                  <div class="single_instgram_photo">
                      <img src="img/instagram/inst_4.png" alt="">
                      <a href="#"><i class="ti-instagram"></i></a> 
                  </div>
                  <div class="single_instgram_photo">
                      <img src="img/instagram/inst_5.png" alt="">
                      <a href="#"><i class="ti-instagram"></i></a> 
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!--::subscribe_area part end::-->
@endsection