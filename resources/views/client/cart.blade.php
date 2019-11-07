@extends('layouts.master')


@section('content')

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>winter</title>
  <link rel="icon" href="{{asset('img/favicon.png')}}">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <!-- animate CSS -->
  <link rel="stylesheet" href="{{asset('css/animate.css')}}">
  <!-- owl carousel CSS -->
  <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
  <!-- font awesome CSS -->
  <link rel="stylesheet" href="{{asset('css/all.css')}}">
  <!-- flaticon CSS -->
  <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
  <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
  <!-- font awesome CSS -->
  <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
  <!-- swiper CSS -->
  <link rel="stylesheet" href="{{asset('css/slick.css')}}">
  <!-- style CSS -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

 
 <!--================Cart Area =================-->
 <section class="cart_area section_padding">
  <div class="container">
    <div class="cart_inner">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Product</th>
              <th scope="col">Price</th>
              <th scope="col">Quantity</th>
              <th scope="col">Total</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="media">
                  <div class="d-flex">
                    <img src="img/arrivel/arrivel_1.png" alt="" />
                  </div>
                  <div class="media-body">
                    <p>Minimalistic shop for multipurpose use</p>
                  </div>
                </div>
              </td>
              <td>
                <h5>$360.00</h5>
              </td>
              <td>
                <div class="product_count">
                  <!-- <input type="text" value="1" min="0" max="10" title="Quantity:"
                    class="input-text qty input-number" />
                  <button
                    class="increase input-number-increment items-count" type="button">
                    <i class="ti-angle-up"></i>
                  </button>
                  <button
                    class="reduced input-number-decrement items-count" type="button">
                    <i class="ti-angle-down"></i>
                  </button> -->
                  <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                  <input class="input-number" type="text" value="1" min="0" max="10">
                  <span class="input-number-increment"> <i class="ti-plus"></i></span>
                </div>
              </td>
              <td>
                <h5>$720.00</h5>
              </td>
            </tr>
            <tr>
              <td>
                <div class="media">
                  <div class="d-flex">
                    <img src="img/arrivel/arrivel_2.png" alt="" />
                  </div>
                  <div class="media-body">
                    <p>Minimalistic shop for multipurpose use</p>
                  </div>
                </div>
              </td>
              <td>
                <h5>$360.00</h5>
              </td>
              <td>
                <div class="product_count">
                    <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                    <input class="input-number" type="text" value="1" min="0" max="10">
                    <span class="input-number-increment"> <i class="ti-plus"></i></span>
                </div>
              </td>
              <td>
                <h5>$720.00</h5>
              </td>
            </tr>
            <tr class="bottom_button">
              <td>
                <a class="btn_1" href="#">Update Cart</a>
              </td>
              <td></td>
              <td></td>
              <td>
                <div class="cupon_text float-right">
                  <a class="btn_1" href="#">Close Coupon</a>
                </div>
              </td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>
                <h5>Subtotal</h5>
              </td>
              <td>
                <h5>$2160.00</h5>
              </td>
            </tr>
            <tr class="shipping_area">
              <td></td>
              <td></td>
              <td>
                <h5>Shipping</h5>
              </td>
              <td>
                <div class="shipping_box">
                  <ul class="list">
                    <li>
                      Flat Rate: $5.00
                      <input type="radio" aria-label="Radio button for following text input">
                    </li>
                    <li>
                      Free Shipping
                      <input type="radio" aria-label="Radio button for following text input">
                    </li>
                    <li>
                      Flat Rate: $10.00
                      <input type="radio" aria-label="Radio button for following text input">
                    </li>
                    <li class="active">
                      Local Delivery: $2.00
                      <input type="radio" aria-label="Radio button for following text input">
                    </li>
                  </ul>
                  <h6>
                    Calculate Shipping
                    <i class="fa fa-caret-down" aria-hidden="true"></i>
                  </h6>
                  <select class="shipping_select">
                    <option value="1">Bangladesh</option>
                    <option value="2">India</option>
                    <option value="4">Pakistan</option>
                  </select>
                  <select class="shipping_select section_bg">
                    <option value="1">Select a State</option>
                    <option value="2">Select a State</option>
                    <option value="4">Select a State</option>
                  </select>
                  <input class="post_code" type="text" placeholder="Postcode/Zipcode" />
                  <a class="btn_1" href="#">Update Details</a>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="checkout_btn_inner float-right">
          <a class="btn_1" href="{{ url('/home') }}">Continue Shopping</a>
          <a class="btn_1 checkout_btn_1" href="{{ url('/order') }}">Proceed to checkout</a>
        </div>
      </div>
    </div>
</section>
<!--================End Cart Area =================-->
 <!--::footer_part end::-->

 <!-- jquery plugins here-->
 <script src="{{asset('js/jquery-1.12.1.min.js')}}"></script>
 <!-- popper js -->
 <script src="{{asset('js/popper.min.js')}}"></script>
 <!-- bootstrap js -->
 <script src="{{asset('js/bootstrap.min.js')}}"></script>
 <!-- easing js -->
 <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
 <!-- swiper js -->
 <script src="{{asset('js/swiper.min.js')}}"></script>
 <!-- swiper js -->
 <script src="{{asset('js/mixitup.min.js')}}"></script>
 <!-- particles js -->
 <script src="{{asset('js/owl.carousel.min.js')}}"></script>
 <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
 <!-- slick js -->
 <script src="{{asset('js/slick.min.js')}}"></script>
 <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
 <script src="{{asset('js/waypoints.min.js')}}"></script>
 <script src="{{asset('js/contact.js')}}"></script>
 <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
 <script src="{{asset('js/jquery.form.js')}}"></script>
 <script src="{{asset('js/jquery.validate.min.js')}}"></script>
 <script src="{{asset('js/mail-script.js')}}"></script>
 <!-- custom js -->
 <script src="{{asset('js/custom.js')}}"></script>

@endsection