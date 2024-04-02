@extends('layouts.shuleSample')

@section('content')
<body>      


    <section class="probootstrap-section" style="padding-bottom:20px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset($news->required_image) }}" alt="{{ $news->title }}" class="img-fluid" style="width: 100%; height:450px">
                </div>
                <div class="col-md-6">
                    <div class="probootstrap-text probootstrap-animate">
                    <h1>{{ $news->title }}</h1>

                        <p>{!! $news->content !!}</p>
                        <p>
                            <span class="probootstrap-date"><i class="icon-calendar"></i>{{ $news->date }}</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
@endsection
