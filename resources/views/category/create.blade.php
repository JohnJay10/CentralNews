@extends('layouts.master-admin')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        
        <h3 class="card-description" style="font: 500;">
         Create a New Category
        </h3>
        <form class="forms-sample" method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
          <div class="form-group">   
            <label for="exampleInputName1">Name</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Enter Category Name" name="name" required>
          </div>
        
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          
        </form>
      </div>
    </div>
  </div>
@endsection
