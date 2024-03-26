@extends('admin/layouts.adminLayout')
@section('content')
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Dashboard</h2>
                           </div>
                        </div>
                     </div>
<style>
   .card {
    margin-top: 50px; /* Adjust the margin-top as needed */
}

.card-header {
    background-color: #f8f9fa; /* Light background color */
}

.card-body {
    font-weight: 400; /* Set font weight for the body */
    color: #333; /* Darken font color */
}


</style>
           <!-- start upload form           -->

           <div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header text-center">
                <h5 class="card-title">Upload News Article</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="title" style="color: #333;">Title:</label>
                            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" required>
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="date" style="color: #333;">Date:</label>
                            <input type="date" name="date" id="date" class="form-control @error('date') is-invalid @enderror" required>
                            @error('date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <strong><label for="Content">Content:</label></strong>
                            <textarea name="content" class="description ckeditor form-control" name="wysiwyg-editor">
                                {{ old('description')}}
                            </textarea>

                            @error('description')
                                <span class="invalid" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="required_image" style="color: #333;">Required Image:</label>
                            <input type="file" name="required_image" id="required_image" class="form-control-file @error('required_image') is-invalid @enderror" required accept="image/*">
                            @error('required_image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-4">
                            <label for="optional_image1" style="color: #333;">Optional Image 1:</label>
                            <input type="file" name="optional_image1" id="optional_image1" class="form-control-file @error('optional_image1') is-invalid @enderror" accept="image/*">
                            @error('optional_image1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-4">
                            <label for="optional_image2" style="color: #333;">Optional Image 2:</label>
                            <input type="file" name="optional_image2" id="optional_image2" class="form-control-file @error('optional_image2') is-invalid @enderror" accept="image/*">
                            @error('optional_image2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

        <!-- End Upload Form -->      
 </div>
 @endsection