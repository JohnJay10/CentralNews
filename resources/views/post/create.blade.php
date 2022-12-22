@extends('layouts.master-admin')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        
        <h3 class="card-description" style="font: 500;">
         Create a New post
        </h3>
        <form class="forms-sample" method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
          <div class="form-group">   
            <label for="exampleInputName1">Name</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Enter post Name" name="title" required>
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
            ></textarea>
          </div>

          <div class="form-group">
            <label for="preview">Preview Here</label>
            <textarea
                name="preview"
                id="preview"
                class="form-control"
            ></textarea>
        </div>

          <div class="form-group">
            <label for="category_id">Select Category</label>
            <select name="category_id" id="category_id" class="form-control">
                <option value="0">Please Select Category</option>
                @forelse($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
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
        <img src="" id="previewImg" width="500px" class="img-fluid">
        <i
            class="material-icons"
            style="cursor: pointer"
            onclick="removePreview()"
        >delete</i>
    </div> 
      <br><br>
        
          <button type="submit" value="draft" name="status" class="btn btn-primary mr-2">Save Post</button>
          <button class="btn btn-success rounded"
          type="submit" value="publish" name="status">Publish Post</button>
          
        </form>
      </div>
    </div>
  </div>

  
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

 @section('scripts')

 <script>
  function previewFile(input){
  let file = $("input[type=file]").get(0).files[0];
  if(file){
      let reader = new FileReader();
      reader.onload = function (){
          $("#previewImg").attr('src', reader.result);
          $("#previewBox").css('display', 'block');
      }
      $(".form-file-group").css('display', 'none');
      reader.readAsDataURL(file);
  }
}




function removePreview(){
  $("#previewImg").attr('src',"");
  $("#previewBox").css('display', 'none');
  $(".form-file-group").css('display', 'block');
}

 </script>
 
@endsection