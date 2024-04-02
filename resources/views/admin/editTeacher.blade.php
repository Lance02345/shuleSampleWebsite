@extends('admin.layouts.adminLayout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Edit Teacher
                    </div>
                    <div class="card-body">
                        <form action="{{ route('teachers.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $teacher->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject:</label>
                                <input type="text" name="subject" id="subject" class="form-control" value="{{ $teacher->subject }}" required>
                            </div>
                            <div class="form-group">
                                <label for="avatar">Avatar:</label>
                                <input type="file" name="avatar" id="avatar" class="form-control-file">
                                @if ($teacher->avatar)
                                    <img src="{{ asset($teacher->avatar) }}" alt="Avatar" class="mt-2" style="max-width: 200px;">
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary">Update Teacher</button>
                            <a href="{{ route('home') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
