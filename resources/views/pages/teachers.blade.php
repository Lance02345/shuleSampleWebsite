@extends('layouts.shuleSample')
@section('content')
<body>
      
      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>Our Teachers</h1>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section" style="padding-bottom:20px;">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="probootstrap-flex-block">
                <div class="probootstrap-text probootstrap-animate">
                  <h3>We Hired Certified Teachers For Our Students</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis explicabo veniam labore ratione illo vero voluptate a deserunt incidunt odio aliquam commodi blanditiis voluptas error non rerum temporibus optio accusantium!</p>
                  <p><a href="#" class="btn btn-primary">Learn More</a></p>
                </div>
                <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/ws.jpg)">
                  <a href="https://vimeo.com/45830194" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      
      
      <section class="probootstrap-section" style="padding-top:10px;">
    <div class="container">
        <div class="row">
            @foreach($teachers as $teacher)
            <div class="col-md-3 col-sm-6">
                <div class="probootstrap-teacher text-center probootstrap-animate">
                    <figure class="media">
                    <img src="{{ asset($teacher->avatar) }}" alt="{{ $teacher->name }}" style="height:170px; width:170px;">
                    </figure>
                    <div class="text">
                        <h3>{{ $teacher->name }}</h3>
                        <p>{{ $teacher->subject }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
          
    
    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
@endsection