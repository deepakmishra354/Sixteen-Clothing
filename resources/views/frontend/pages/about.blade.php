@extends('frontend.main-layout')
@section('content')

<div class="page-heading about-heading header-text" data-aos="fade-up" data-aos-duration="800">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>about us</h4>
              <h2>our company</h2>
            </div>
          </div>
        </div>
      </div>
</div>

<div class="best-features about-features" data-aos="fade-right" data-aos-duration="800">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Background</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/feature-image.jpg" alt="" style="border-radius: 5%;">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Who we are &amp; What we do?</h4>
              <p>We are a group of creative individuals hailing from a wide range of industries and fields, from graphic design to marketing and hardcore programming to creative copywriting. "We use our personal experiences and interests to define our company values and offerings." This motley mix of skill sets that are available in our team allows us to take on a project with full force. we enjoy what we do, we enjoy creating perfect projects and we enjoy bringing that smile of ‘Oh yes, that’s it!’ on the faces of our clients when they see our output. We have completed projects for companies worldwide and received raving reviews from 99% of our clients. The feedback of our customers and their satisfaction with our work defines us more vividly than any other description.</p>
              <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
</div>

<div class="team-members" data-aos="fade-up" data-aos-duration="800">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Team Members</h2>
            </div>
          </div>
        </div>

        <!-- Team Members Section -->
        @foreach ($data as $key => $record)
          @if($key % 3 == 0)
            <div class="row"> <!-- New Row after every 3 team members -->
          @endif

          <div class="col-md-4"> 
            <div class="team-member" data-aos="zoom-in" data-aos-duration="800">
              <div class="thumb-container">
                <img src="{{asset('About/' . $record->image)}}" alt=""  style = "border-radius:10px">
                <div class="hover-effect">
                  <div class="hover-content">
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li> 
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="https://www.linkedin.com/in/deepak-mishra-9401442a3/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="https://github.com/deepakmishra354" target="_blank"><i class="fa fa-github"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>{{$record->name}}</h4>
                <span>{{$record->position}}</span>
                <p>{{$record->des}}</p>
              </div>
            </div>
          </div>

          @if(($key + 1) % 3 == 0)
            </div> <!-- Close Row after every 3 team members -->    
          @endif
        @endforeach

        @if(count($data) % 3 != 0)
          </div>
        @endif
      </div>
</div>


@endsection
