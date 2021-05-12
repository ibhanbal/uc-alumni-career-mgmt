<!DOCTYPE html>
<html dir="ltr" lang="en">
<!-- page-about-style217:23-->
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="UC Career Guidance" />
<meta name="keywords" content="university, career, guidance, cordilleras, baguio, alumni," />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<!-- Page Title -->
<title>UC Career Guidance</title>

<!-- Favicon and Touch Icons -->
<link href="{{asset('/images/favicon.png')}}" rel="shortcut icon" type="image/png">
<link href="{{asset('/images/apple-touch-icon.png')}}" rel="apple-touch-icon">
<link href="{{asset('/images/apple-touch-icon-72x72.png')}}" rel="apple-touch-icon" sizes="72x72">
<link href="{{asset('/images/apple-touch-icon-114x114.png')}}" rel="apple-touch-icon" sizes="114x114">
<link href="{{asset('/images/apple-touch-icon-144x144.png')}}" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="{{asset('/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

<link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('/css/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('/css/css-plugin-collections.css')}}" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="{{asset('/css/menuzord-skins/menuzord-rounded-boxed.css')}}" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="{{asset('css/style-main.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="{{asset('/css/preloader.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="{{asset('/css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="{{asset('/css/responsive.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="{{asset('/css/colors/theme-skin-color-set-1.css')}}" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="{{asset('/js/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="{{asset('js/jquery-plugin-collection.js')}}"></script>

<!-- Additional plugins and files for other features -will remove if this causes problems -->

<!-- Page level plugins -->
<script src="{{asset('/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('js/demo/datatables-demo.js')}}"></script>

<!-- Additional plugins and files for other features -will remove if this causes problems -->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="">

<div id="wrapper" class="clearfix">
  <div class="section-content">
    <div class="row">
      <div>
        <h3>{{ $basic_info['name'] }}</h3>
        <h4 class="text-theme-colored">{{ $basic_info['grad_course'] }}</h4>
        <h4 class="text-theme-colored">{{ $basic_info['ter_course'] }}</h4>
      </div>
      <br />
      <h4 class="line-bottom">Contact Information:</h4>
      <div class="row">
        <div class="col-sx-12 col-sm-4 col-md-4">
          <div class="bg-light media border-bottom-theme-colored-2px p-15 mb-20">
            <div class="media-left">
              <i class="fa fa-map-marker text-theme-colored font-24 mt-5"></i>
            </div>
            <div class="media-body">
              <h5 class="mt-0 mb-0">Address:</h5>
              <p>{{ $basic_info['address'] }}</p>
            </div>
          </div>
        </div>
        <div class="col-sx-12 col-sm-4 col-md-4">
          <div class="bg-light media border-bottom-theme-colored-2px p-15 mb-20">
            <div class="media-left">
              <i class="fa fa-phone text-theme-colored font-24 mt-5"></i>
            </div>
            <div class="media-body">
              <h5 class="mt-0 mb-0">Phone:</h5>
              <p>{{ $basic_info['contact_num'] }}</p>
            </div>
          </div>
        </div>
        <div class="col-sx-12 col-sm-4 col-md-4">
          <div class="bg-light media border-bottom-theme-colored-2px p-15 mb-20">
            <div class="media-left">
              <i class="fa fa-envelope-o text-theme-colored font-24 mt-5"></i>
            </div>
            <div class="media-body">
              <h5 class="mt-0 mb-0">Email:</h5>
              <p>{{ $basic_info['email'] }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- end main-content -->

  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{asset('/js/custom.js')}}"></script>




</body>

<!-- job-list18:09-->
</html>
