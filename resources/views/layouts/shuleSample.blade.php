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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>



  </head>
  <style>
            /* Sticky navbar */
            .navbar.sticky {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
        body {
            padding-top: 20px; /* Adjust this value according to your navbar height */
        }

    .activee {
    font-weight: bold; /* For example, making the font bold */
    color: #007bff; /* For example, changing the text color to blue */
}
</style>
  <body>

    <div class="probootstrap-page-wrapper">
      <!-- Fixed navbar -->
      <nav class="navbar navbar-default probootstrap-navbar sticky">
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
            <li class="nav-item {{ request()->routeIs('index') ? 'activee' : '' }}">
						<a class="nav-link" href="{{ route('index')}}">Home</a>
					</li> 
					<li class="nav-item {{ request()->routeIs('courses') ? 'activee' : '' }}">
						<a class="nav-link" href="{{ route('courses')}}">Co-Curricular</a>
					</li> 
					<li class="nav-item {{ request()->routeIs('teachers') ? 'activee' : '' }}">
						<a class="nav-link" href="{{ route('teachers')}}">Teachers</a>
					</li> 
					<li class="nav-item {{ request()->routeIs('events') ? 'activee' : '' }}">
						<a class="nav-link" href="{{ route('events')}}">Events</a>
					</li> 
					<li class="nav-item {{ request()->routeIs('contact') ? 'activee' : '' }}">
						<a class="nav-link" href="{{ route('contact')}}">Contact</a>
					</li> 
               <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">School Portal</a>
                <ul class="dropdown-menu">
                  <li><a href="https://kenyademoschool.schooltry.com/admin/home">Admin/Subadmin</a></li>
                  <li><a href="https://kenyademoschool.schooltry.com/teacher/login">Teacher</a></li>
                  <li><a href="https://kenyademoschool.schooltry.com/parent/login">Parent</a></li>
                  <li><a href="https://kenyademoschool.schooltry.com/student/login">Student</a></li>
                </ul>
              </li>
              <li class="nav-item {{ request()->routeIs('login') ? 'activee' : '' }}" style="margin-right: 10px;">
             <a class="nav-link" href="{{ route('login')}}">
             <i class="fa fa-lock"></i> <!-- Icon for admin login -->
             </a>
          </li> 
            </ul>
          </div>
        </div>
      </nav>
      @yield('content')
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
                  <li><i class="icon-location2"></i> <span>Ongata Rongai, Kajiado</span></li>
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
