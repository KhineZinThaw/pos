@extends('layouts.master')

@section('content')
<!-- banner part start-->
<section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="banner_slider">
                    <div class="single_banner_slider">
                        <div class="banner_text">
                            <div class="banner_text_iner">
                                <h3>Melody Shop Fashion </h3>
                                <h1>One Month Internship Result...</h1>
                                <a href="#" class="btn_1">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner part start-->

<!-- feature_part start-->
<section class="feature_part pt-4">
    <div class="container-fluid p-lg-0 overflow-hidden">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-4 col-sm-6">
                <div class="single_feature_post_text">
                    <img src="img/feature_1.png" alt="#">
                    <div class="hover_text">
                        <a href="{{ url('/product-detail') }}" class="btn_2">shop for male</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_feature_post_text">
                    <img src="img/feature_2.png" alt="#">
                    <div class="hover_text">
                        <a href="{{ url('/product-detail') }}" class="btn_2">shop for male</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_feature_post_text">
                    <img src="img/feature_3.png" alt="#">
                    <div class="hover_text">
                        <a href="{{ url('/product-detail') }}" class="btn_2">shop for male</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- upcoming_event part start-->

<!-- new arrival part here -->
<section class="new_arrival section_padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="arrival_tittle">
                    <h2>new arrival</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="arrival_filter_item filters">
                    <ul>
                        <li class="active controls" data-filter="*">all</li>
                        <li class="controls" data-toggle=".men">men</li>
                        <li class="controls" data-toggle=".women">women</li>
                        <li class="controls" data-toggle=".shoes">shoes</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        
           
                <div class="new_arrival_iner filter-container">
                    <div class="row">
                            @foreach ($products as $product)
                            <div class="col-3 col-xs-12 col-md-3 mb-3">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ $product->image }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                        <p class="card-text">{{  Str::limit('The PHP framework for web artisans.', '7')}}</p>
                                        <a href="#" class="btn btn-primary">Add To Cart</a>
                                    </div>
                                </div> 
                            </div>
                            
                            @endforeach
                    </div>
                    
                    
                    
                </div>
               
           
        </div>
    </section>
    <!-- new arrival part end -->
    
    <!-- free shipping here -->
    <section class="shipping_details section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="img/icon/icon_1.png" alt="">
                        <h4>Free shipping</h4>
                        <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="img/icon/icon_2.png" alt="">
                        <h4>Free shipping</h4>
                        <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="img/icon/icon_3.png" alt="">
                        <h4>Free shipping</h4>
                        <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="img/icon/icon_4.png" alt="">
                        <h4>Free shipping</h4>
                        <p>Divided face for bearing the divide unto seed winged divided light Forth.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- free shipping end -->
    
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