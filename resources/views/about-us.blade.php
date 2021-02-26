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
            <h3 class="text-uppercase mt-15">Welcome To <span class="text-theme-color-2">  UC Alumni </span></h3>
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
                  <p>#405, Lan Streen, Los Vegas, USA</p>
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
          <form id="contact_form" name="contact_form" class="" action="#" method="post">

            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <input name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                </div>
              </div>
            </div>

            <div class="form-group">
              <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
            </div>
            <div class="form-group">
              <input name="form_botcheck" class="form-control" type="hidden" value="" />
              <button type="submit" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" data-loading-text="Please wait...">Send your message</button>
              <button type="reset" class="btn btn-flat btn-theme-colored text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Reset</button>
            </div>
          </form>

          <!-- Contact Form Validation-->
          <script type="text/javascript">
            $("#contact_form").validate({
              submitHandler: function(form) {
                var form_btn = $(form).find('button[type="submit"]');
                var form_result_div = '#form-result';
                $(form_result_div).remove();
                form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                var form_btn_old_msg = form_btn.html();
                form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                $(form).ajaxSubmit({
                  dataType:  'json',
                  success: function(data) {
                    if( data.status == 'true' ) {
                      $(form).find('.form-control').val('');
                    }
                    form_btn.prop('disabled', false).html(form_btn_old_msg);
                    $(form_result_div).html(data.message).fadeIn('slow');
                    setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                  }
                });
              }
            });
          </script>
        </div>
      </div>
    </div>
  </section>
@endsection