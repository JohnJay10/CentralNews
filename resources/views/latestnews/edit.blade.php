@extends('layouts.master-admin')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        
        <h3 class="card-description" style="font: 500;">
         EDIT LATEST NEWS POST
        </h3>
        <form class="forms-sample" method="post" action="{{ route('latestnews.update', $latestnews->id) }}"  enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
           
           
          <div class="form-group">
            <label for="exampleInputName1">Title</label>
            <input type="text" class="form-control" id="exampleInputName1" value="{{ $latestnews->title }}" placeholder="Title of your post" name="title" required>
          </div>
        
          
          <div class="form-group">
            <label for="exampleTextarea1">Preview</label>
            <textarea class="  form-control"   name="preview" id="exampleTextarea1"  rows="4" required>{!! $latestnews->preview !!}</textarea>
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Textarea</label>
            <textarea class="  form-control"  name="body" id="exampleTextarea1" rows="4" required>{!! $latestnews->body !!}</textarea>
          </div>
          <div class="form-group">
            <label>File upload</label>
            <input type="file" name="image"   class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info"   disabled placeholder="Upload Image">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
              </span>
            </div>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
@endsection
