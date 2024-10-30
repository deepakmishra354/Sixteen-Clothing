@extends('frontend.main-layout')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Bootstrap JS and dependencies -->
  <style>
 .btn-buy-now {
    display: inline-block;
    background-color: #ff9f00; /* Flipkart orange color */
    color: white;
    padding: 12px 30px;  /* Slightly bigger for emphasis */
    font-size: 18px;     /* Bold font size */
    font-weight: 600;    /* Semi-bold text */
    text-transform: uppercase; /* All caps for CTA feel */
    border: none;        /* No border */
    border-radius: 3px;  /* Slightly rounded corners */
    cursor: pointer;     /* Pointer cursor */
    transition: background-color 0.3s ease, box-shadow 0.3s ease; /* Smooth transitions */
    text-align: center;  /* Center the text */
}

/* Hover Effect */
.btn-buy-now:hover {
    background-color: #fb641b; /* Darker orange on hover */
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2); /* Slight shadow for emphasis */
}

/* Active Effect (Click) */
.btn-buy-now:active {
    background-color: #d35400; /* Even darker when clicked */
    box-shadow: none;  /* No shadow when pressed */
    transform: scale(0.98); /* Slight press down effect */
}
.img{
  border-radius: 10px;
}
.offcanvas-body.small {
      padding: 20px;  /* Adding some padding for better spacing */
  }
  
  .product-summary {
      text-align: center; /* Center-align the content */
  }

  .product-title {
      font-size: 22px;
      font-weight: 700;
      margin-bottom: 10px;
      color: #333;
  }

  .product-price {
      font-size: 20px;
      font-weight: bold;
      color: #28a745;
      margin-bottom: 10px;
  }

  .product-description {
      font-size: 16px;
      color: #666;
      margin-bottom: 15px;
  }

  .product-reviews {
      margin-bottom: 15px;
  }

  .review-count {
      font-weight: bold;
      color: #555;
  }

  .stars li {
      display: inline-block;
      color: #ffc107;
  }

  .payment-info h5 {
      font-weight: bold;
      margin-bottom: 10px;
  }

  .btn-success {
      font-size: 18px;
      padding: 10px 25px;
      text-transform: uppercase;
  }
  .modal-backdrop.show {
    opacity: 0;
}

  </style>
</head>
<body>
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
<div class="best-features about-features">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading" data-aos="fade-right" data-aos-duration="500">
                    <div class="row">
                        @foreach ($data as $key => $record)
                        <div class="col-md-12">
                            <div class="product-item">
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
                                <!-- Buy Now Button -->
    <button id="buyNowButton" class="btn-buy-now" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Buy Now
    </button>

    <script>
    document.getElementById('buyNowButton').addEventListener('click', function() {
        Swal.fire({
            icon: 'info',
            title: 'Account Deactivated',
            text: 'Your account has been deactivated So , You Can not buy anything.'
        });
    });
</script>

  

<!-- Bottom Offcanvas -->
    

</div>
                            </div>
                        </div>
                        
                        @if (($key + 1) % 3 == 0 && !$loop->last)
                            </div><div class="row">
                        @endif
                        <div class="col-md-12" data-aos="fade-right" data-aos-duration="900">
                          
                          <img src="{{asset('Main-Products/' . $record->image)}}" alt="" class="img">
                          <img src="{{asset('Mobiles/' . $record->image)}}" alt="" class="img">
                          <img src="{{asset('Books/' . $record->image)}}" alt="" class="img">
                          <img src="{{asset('Clothes/' . $record->image)}}" alt="" class="img">

                        </div>
                        @endforeach
                </div>
            </div>

            <ul class="social-icons" data-aos="fade-right" data-aos-duration="900">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>

@endsection
