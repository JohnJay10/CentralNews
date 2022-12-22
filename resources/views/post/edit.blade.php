@extends('layouts.master-admin')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        
        <h3 class="card-description" style="font: 500;">
        Update {{$post->title}}
        </h3>
        <form class="forms-sample" method="post" action="{{ route('post.update', $post->id) }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
          <div class="form-group">   
            <label for="exampleInputName1">Name</label>
            <input type="text" class="form-control" id="exampleInputName1"  value="{{$post->title}}"placeholder="Enter post Name" name="title" required>
          </div>

          <div class="form-group">   
            <label for="exampleInputName1">Content Here</label>
            <textarea
            name="post_content"
            placeholder="Please type your content here"
            id="post_content"
            class="form-control"
            cols="30"
            rows="10"
            >{{$post->body}}</textarea>
          </div>

          <div class="form-group">
            <label for="preview">Preview Here</label>
            <textarea
                name="preview"
                id="preview"
                class="form-control"
            >{{$post->preview}} </textarea>
        </div>

          <div class="form-group">
            <label for="category_id">Select Category</label>
            <select name="category_id" id="category_id" class="form-control">
                <option value="0">Please Select Category</option>
                @forelse($categories as $category)
                    <option value="{{$category->id}}"
                      @if($post->category_id == $category->id)
                        selected
                        @endif
                      >{{$category->name}}</option>
                @empty
                @endforelse
            </select>
        </div>

        <div class="form-file-group">
          <input type="file"
                 name="feature_image"
                 style="display: none"
                 id="file-upload"
                 onchange="previewFile(this)">
          <p onclick="document.querySelector('#file-upload').click()">
              Drag Your File Here or Click in this area to Upload
          </p>
      </div>
      <div id="previewBox" style="display: none">
          <img src="{{$post->url}}" id="previewImg" width="500px" class="img-fluid">
          <i
              class="material-icons"
              style="cursor: pointer"
              onclick="removePreview()"
          >delete</i>
      </div>
      <br><br>
        
      @if($post->status == 'draft')
      <button
          class="btn btn-primary rounded"
          type="submit" value="draft" name="status">Save Post</button>
  @endif
  @if($post->status == 'publish')
      <button
          class="btn btn-success rounded"
          type="submit" value="publish" name="status">Update Post</button>
  @else
      <button
          class="btn btn-success rounded"
          type="submit" value="publish" name="status">Publish Post</button>
  @endif
          
        </form>
      </div>
    </div>
  </div>

  <script>

$(document).ready(function (){
           let url = "{{$post->url}}";
           if(url !== ""){
               $("#previewBox").css('display', 'block');
               $(".form-file-group").css('display', 'none');
           }
        });
  </script>
  
  
@endsection

@section('styles')
    <style>
        .form-file-group{
            width: 500px;
            height: 200px;
            border: 4px dashed #000;
        }
        .form-file-group p {
            width: 100%;
            height: 100%;
            text-align: center;
            line-height: 170px;
        }
    </style>
@endsection

{{-- @section('scripts')
<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>

<script>
  CKEDITOR.replace( 'post_content' );
</script>
@endsection --}}