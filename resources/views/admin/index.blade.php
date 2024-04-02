@extends('admin/layouts.adminLayout')
@section('content')
<!-- dashboard inner -->
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title text-center">
                    <h2>Dashboard</h2>
                </div>
            </div>
        </div>

        
        <!-- Manage Teachers -->
                <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Manage Teachers</h2>
                </div>
            </div>
        </div>

        <div class="row probootstrap-card-row">
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
                            <div class="text-center">
                                <div>
                                    <a href="{{ route('teachers.destroy', $teacher->id) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $teacher->id }}').submit();">
                                        <i class="fa fa-trash" style="margin-right:20px;"></i>
                                    </a>
                                    <form id="delete-form-{{ $teacher->id }}" action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <a href="{{ route('teachers.edit', $teacher->id)}}"><i class="fa fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>


        <!-- Manage Events and news  -->
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
                                    <i class="fa fa-trash" style="margin-right:20px;"></i>
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
