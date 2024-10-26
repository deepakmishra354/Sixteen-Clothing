@extends('frontend.main-layout')
@section('content')
<div class="page-heading products-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h4>New Arrivals</h4>
                    <h2>Sixteen Products</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="products">
    <div class="container">
        <div class="filters">
            <ul>
               <a href="{{route('our-products')}}"><li class="active" data-filter="*">All Products</li></a> 
               <a href="{{route('products-mobile')}}"> <li data-filter=".des">Mobiles</li> </a> 
                <a href="{{route('products-book')}}"> <li data-filter=".dev">Books</li> </a> 
                <a href="{{route('products-clothes')}}"> <li data-filter=".dev">Clothes</li> </a> 

                </ul>
        </div>  
        <!-- Products Grid -->
        <div class="row">
            @foreach ($data as $record)
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 all des" data-aos="fade-right" data-aos-duration="900">
                   <div class="filters-content">
                    <div class="product-item">
                        <a href="{{route('products-details-mobiles' , $record->id)}}"><img src="{{ asset('Mobiles/' . $record->image) }}" alt="" class="img-fluid"></a>
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
                </div>
            @endforeach
        </div>

        <!-- Laravel Pagination Links -->
        <div class="row">
    <div class="col-md-12">
        <ul class="pagination justify-content-center">
            {{ $data->links('pagination::bootstrap-4') }}
        </ul>
    </div>
</div>
@endsection
