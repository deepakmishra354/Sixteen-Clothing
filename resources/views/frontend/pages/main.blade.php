@extends('frontend.main-layout')
@section('content')

<div class="banner header-text">
      <div class="owl-banner owl-carousel owl-loaded owl-drag">
      <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2758px, 0px, 0px); transition: all; width: 9653px;"><div class="owl-item cloned" style="width: 1349px; margin-right: 30px;"><div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div></div><div class="owl-item cloned" style="width: 1349px; margin-right: 30px;"><div class="banner-item-03">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
          </div>
        </div></div><div class="owl-item active" style="width: 1349px; margin-right: 30px;"><div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
          </div>
        </div></div><div class="owl-item" style="width: 1349px; margin-right: 30px;"><div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div></div><div class="owl-item" style="width: 1349px; margin-right: 30px;"><div class="banner-item-03">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
          </div>
        </div></div><div class="owl-item cloned" style="width: 1349px; margin-right: 30px;"><div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
          </div>
        </div></div><div class="owl-item cloned" style="width: 1349px; margin-right: 30px;"><div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div></div></div></div>
      </div>
    </div>

    <div class="latest-products" data-aos="fade-right" data-aos-duration="500">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading" data-aos="fade-right" data-aos-duration="800">
                    <h2>Latest Products</h2>
                    <a href="{{route('our-products')}}">view all products <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($data as $key => $record)
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="800">
                    <div class="product-item">
                        <a href="{{route('products-details' , $record->id)}}"><img src="{{ asset('Main-Products/' . $record->image) }}" alt=""></a>
                        <div class="down-content">
                            <a href="#"><h4>{{ $record->title }}</h4></a>
                            <h6>${{ $record->price }}</h6>
                            <p>{{ $record->des }}</p>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>Reviews ({{ $record->reviews }})</span>
                        </div>
                    </div>
                </div>

                @if (($key + 1) % 3 == 0 && !$loop->last)
                    </div><div class="row">
                @endif
            @endforeach
          </div>
    </div>
</div>
<div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Sixteen Clothing</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Looking for the best products?</h4>
              <p> Sixteen Clothing  customers receive extra benefits in the form of SuperCoins. Every month, Sixteen Clothing issues billions of SuperCoins for its regular customers. You will receive a Plus membership invitation once you have earned 200 SuperCoins in a calendar year. You must activate the invitation within 30 days of receiving it to have access to this Membership. 
              .</p>
              <ul class="featured-list">
                <li><a href="{{route('about')}}"> About Sixteen Clothing</a></li>
                <li><a href="#">Consectetur an adipisicing elit</a></li>
                <li><a href="#">Corporis, omnis doloremque</a></li>
              </ul>
              <a href="{{route('about')}}" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/feature-image.jpg" alt="" >
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
  $(document).ready(function(){
    $(".owl-banner").owlCarousel({
      loop: true,
      margin: 30,
      nav: true,
      dots: true,
      autoplay: true,
      autoplayTimeout: 1000,  
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    });
  });
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
@endsection