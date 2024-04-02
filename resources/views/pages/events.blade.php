@extends('layouts.shuleSample')

@section('content')


<body>      
    <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left section-heading probootstrap-animate">
                    <h1>School News & Events</h1>
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
                            <div class="text-uppercase probootstrap-uppercase">Featured Events</div>
                            <h3>Students Dance Competition for The Year 2024</h3>
                            <p>Quis explicabo veniam labore ratione illo vero voluptate a deserunt incidunt odio aliquam commodi </p>
                            <p>
                                <span class="probootstrap-date"><i class="icon-calendar"></i>March 9, 2020</span>
                                <span class="probootstrap-location"><i class="icon-location2"></i>School Playground</span>
                            </p>
                            <p><a href="#" class="btn btn-primary">Learn More</a></p>
                        </div>
                        <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/ev.jpeg)">
                            <a href="https://vimeo.com/45830194" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
<style>

.probootstrap-card {
    height: 100%;
    
}

.card-img-top {
    height: 350px; /* Set the height of the image */
    overflow: hidden; /* Hide overflow */
}

.card-img-top img {
    width: 100%; /* Make the image fill its container */
    height: auto; /* Preserve aspect ratio */
}

.probootstrap-text {
    padding: 20px;
}

.card-title {
    font-size: 20px;
    margin-bottom: 10px;
}

.card-text {
    font-size: 16px;
    margin-bottom: 10px;
}

    
</style>

<div class="row probootstrap-card-row">
    @foreach ($news as $item)
    <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate mb-4">
        <!-- Added mb-4 class to add margin-bottom -->
        <div class="card probootstrap-card">
        <a href="{{ route('news.show', $item->id) }}" class="probootstrap-featured-news-box">
                <div class="card-img-top">
                    <img src="{{ $item->required_image }}" alt="{{ $item->title }}" class="img-fluid">
                </div>
                <div class="card-body probootstrap-text">
                    <h3 class="card-title">{{ $item->title }}</h3>
                    <p class="card-text">{{ $item->date }}</p>
                </div>
            </a>
        </div>
    </div>
    @endforeach
</div>


</div> 

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

</body>

@endsection
