@extends('admin/layouts.adminLayout')

@section('content')
    <div class="midde_cont">
        <div class="container-fluid">
            <div class="row column_title">
                <div class="col-md-12">
                    <div class="page_title">
                        <h2>Add Teacher</h2>
                    </div>
                </div>
            </div>
            
            <!-- Add Teacher Form -->
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center">
                            <h5 class="card-title">Add Teacher</h5>
                        </div>
                        <div class="card-body">
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form action="{{ route('teachers.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" required>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="subject">Subject:</label>
                                    <input type="text" id="subject" name="subject" class="form-control @error('subject') is-invalid @enderror" required>
                                    @error('subject')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="avatar">Avatar:</label>
                                    <input type="file" id="avatar" name="avatar" class="form-control-file @error('avatar') is-invalid @enderror" accept="image/*">
                                    @error('avatar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Add Teacher</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Add Teacher Form -->
        </div>
    </div>
@endsection

