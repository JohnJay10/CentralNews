@extends('layouts.master-admin')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        
        <h3 class="card-description" style="font: 500;">
         EDIT Category
        </h3>
        <form class="forms-sample" method="post" action="{{ route('category.update', $category->id) }}"  enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
           
           
          <div class="form-group">
            <label for="exampleInputName1">Title</label>
            <input type="text" class="form-control" id="exampleInputName1" value="{{ $category->name }}"  name="name" required>
          </div>
        
          
          
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
@endsection
