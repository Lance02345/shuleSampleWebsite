@extends('admin/layouts.adminLayout')
@section('content')
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title text-center" >
                              <h2>Dashboard</h2>
                           </div>
                        </div>
                     </div>
<style>

.probootstrap-card {
    height: 100%;
    
}

.card-img-top {
    height: 250px; /* Set the height of the image */
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


<div class="row column_title">
 <div class="col-md-12">
   <div class="page_title">
       <h2>Manage School Events & News</h2>
   </div>
 </div>
</div>
<div class="row probootstrap-card-row">
    @foreach ($news as $item)
    <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate mb-4">
        <!-- Added mb-4 class to add margin-bottom -->
        <div class="card probootstrap-card">
            <a href="#" class="probootstrap-featured-news-box">
                <div class="card-img-top">
                    <img src="{{ $item->required_image }}" alt="{{ $item->title }}" class="img-fluid">
                </div>
                <div class="card-body probootstrap-text">
                    <h3 class="card-title">{{ $item->title }}</h3>
                    <p class="card-text">{{ $item->date }}</p>
                </div>
                <div class="text-center">
                    <div>
                    <a href="{{ route('news.destroy', $item->id) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $item->id }}').submit();">
    <i class="fa fa-trash"  style="margin-right:20px;"></i>
</a>

<form id="delete-form-{{ $item->id }}" action="{{ route('news.destroy', $item->id) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>
                        <a href="{{ route('news.edit', $item->id)}}"><i class="fa fa-pencil"></i></a>
                    </div>
                </div>
            </a>
        </div>
    </div>
    @endforeach
</div>


</div>
               <!-- end dashboard inner -->
 @endsection