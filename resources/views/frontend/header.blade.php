
<div id="preloader" style="opacity: 0; visibility: hidden; display: none;">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
<header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{route('/')}}"><h2>Sixteen <em>Clothing</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('/') }}">Home</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ Request::is('our-products') ? 'active' : '' }}" href="{{ route('our-products') }}">Our Products</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ Request::is('about-us') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ Request::is('content-us') ? 'active' : '' }}" href="{{ route('content') }}">Contact Us</a>
</li>

            </ul>
          </div>
        </div>
      </nav>
    </header>