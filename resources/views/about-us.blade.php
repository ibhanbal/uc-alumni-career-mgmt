@extends('layout.master')
@section('title')
	About Us
@endsection
@section('content')
  <section id="about">
    <div class="container mt-50 pb-70 pt-0">
      <div class="section-content">
        <div class="row mt-10">
          <div class="col-sm-12 col-md-6 mb-sm-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <h3 class="text-uppercase mt-15">Welcome To <span class="text-theme-color-2"> UC Alumni </span></h3>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Quos dolo rem consequ untur, natus laudantium commodi earum aliquid in ullam.Lorem ipsum.</p>
            <p class="mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt ut dolorem laboriosam culpa excepturi sed distinctio eius! Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.</p>
            <p class="mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt ut dolorem laboriosam culpa excepturi sed distinctio eius! Ut magnam numquam libero quia vero blanditiis fugit corporis quisquam, debitis quidem laudantium deleniti.</p>
            <a class="btn btn-colored btn-theme-colored btn-lg text-uppercase font-13 mt-0" href="#">View Details</a>
          </div>
          <div class="col-sm-12 col-md-6 mt-10 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="video-popup">
              <a href="https://www.youtube.com/watch?v=pW1uVUg5wXM" data-lightbox-gallery="youtube-video" title="Video">
                <img alt="" src="images/about/5.jpg" class="img-responsive img-fullwidth mt-10 ml-30 ml-xs-0 ml-sm-0">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: teachers -->

  <section class="divider">
    <div class="container">
      <div class="row pt-30">
        <div class="col-md-4">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
                <div class="media-body"> <strong>OUR OFFICE LOCATION</strong>
                  <p>Gov. Pack Rd, Baguio City</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-12">
              <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
                <div class="media-body"> <strong>OUR CONTACT NUMBER</strong>
                  <p>+325 12345 65478</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-12">
              <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
                <div class="media-body"> <strong>OUR CONTACT E-MAIL</strong>
                  <p>supporte@yourdomin.com</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-12">
              <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-film text-theme-colored"></i></a>
                <div class="media-body"> <strong>Make a Video Call</strong>
                  <p>Skype</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <h3 class="line-bottom mt-0 mb-20">Interested in discussing?</h3>
          <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error optio in quia ipsum quae neque alias eligendi, nulla nisi. Veniam ut quis similique culpa natus dolor aliquam officiis ratione libero. Expedita asperiores aliquam provident amet dolores.</p>
          <!-- Contact Form -->
        </div>
      </div>
    </div>
  </section>
@endsection