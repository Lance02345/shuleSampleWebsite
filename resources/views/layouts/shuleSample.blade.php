<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Enlight School</title>
    <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">

  </head>

  <body>

    <div class="probootstrap-page-wrapper">
      <!-- Fixed navbar -->
      <nav class="navbar navbar-default probootstrap-navbar">
        <div class="container">
          <div class="navbar-header">
            <div class="btn-more js-btn-more visible-xs">
              <a href="#"><i class="icon-dots-three-vertical "></i></a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html" title="ProBootstrap:Enlight">EnLight</a>
          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
            <li class="nav-item {{ request()->routeIs('index') ? 'active' : '' }}">
						<a class="nav-link" href="{{ route('index')}}">Home</a>
					</li> 
					<li class="nav-item {{ request()->routeIs('courses') ? 'active' : '' }}">
						<a class="nav-link" href="{{ route('courses')}}">Co-Curricular</a>
					</li> 
					<li class="nav-item {{ request()->routeIs('teachers') ? 'active' : '' }}">
						<a class="nav-link" href="{{ route('teachers')}}">Teachers</a>
					</li> 
					<li class="nav-item {{ request()->routeIs('events') ? 'active' : '' }}">
						<a class="nav-link" href="{{ route('events')}}">Events</a>
					</li> 
					<li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
						<a class="nav-link" href="{{ route('contact')}}">Contact</a>
					</li> 
               <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Login</a>
                <ul class="dropdown-menu">
                  <li><a href="https://kenyademoschool.schooltry.com/admin/home">Admin/Subadmin</a></li>
                  <li><a href="https://kenyademoschool.schooltry.com/teacher/login">Teacher</a></li>
                  <li><a href="https://kenyademoschool.schooltry.com/parent/login">Parent</a></li>
                  <li><a href="https://kenyademoschool.schooltry.com/student/login">Student</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      @yield('content')
      <section class="probootstrap-cta">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Get your admission now!</h2>
              <a href="{{ route('contact')}}" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">Enroll</a>
            </div>
          </div>
        </div>
      </section>
      <footer class="probootstrap-footer probootstrap-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>About The School</h3>
                <p>Step into the halls of Enlight School, where every student's journey begins with a promise of discovery, growth, and success. Here, we foster a vibrant community where curiosity is ignited, talents are honed, and friendships flourish.</p>
              </div>
            </div>
            <div class="col-md-3 col-md-push-1">
              <div class="probootstrap-footer-widget">
                <h3>Links</h3>
                <ul>
                  <li><a href="{{ route('index')}}">Home</a></li>
                  <li><a href="{{ route('courses')}}">Co-Curricular</a></li>
                  <li><a href="{{ route('teachers')}}">Teachers</a></li>
                  <li><a href="{{ route('events')}}">Events</a></li>
                  <li><a href="{{ route('contact')}}">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>Contact Info</h3>
                <ul class="probootstrap-contact-info">
                  <li><i class="icon-location2"></i> <span>Ongata Rongai, Kajiadof</span></li>
                  <li><i class="icon-mail"></i><span>info@domain.com</span></li>
                  <li><i class="icon-phone2"></i><span>+123 456 7890</span></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- END row -->
          
        </div>
      </footer>

    </div>
    <!-- END wrapper -->
    

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>
