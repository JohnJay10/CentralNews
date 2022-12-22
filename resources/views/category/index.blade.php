@extends('layouts.master-admin')

@section('content')




    <div class="content-wrapper">
      <div class="card">
<div class="card-body">
    <div class="d-flex justify-content-between">
        <a href="/category/create"> 
            <input type="submit" value="Create Category " class="btn btn-primary ">
        </a>
        <a href="/category/trash"> 
            <input type="submit" value=" trash " class="btn btn-danger ">
        </a>

    </div>
   
     <br><br>
<h2 class="card-title">All Categories</h2>

<div class="row">
  <div class="col-12">
    <div class="table-responsive">
        <table id="order-listing" class="table">
          @if(count($categories)>0)
          <thead>
            <tr>
           
              <th>title </th>
              <th>slug </th>
              <th>EDIT FUNCTION</th>
              <th>DELETE FUNCTION</th>
            </tr>
          </thead>
          <tbody>
            @foreach($categories as $category)
            <tr>
              
              <td>{{$category->name}}</td>
              <td>{{$category->slug}}</td>
              

              <td>

               
                <a href="/category/{{$category->id}}/edit"> 
                  <input type="submit" value="edit" class="btn btn-primary ">
                </a> 
              
              </td>
              <td>

                <form action="/category/{{$category->id}}" method="POST">
                  @csrf
                 {{method_field('DELETE')}}
                
                 <input type="submit" name ="submit" value ="delete" class="btn btn-danger">
              </form>
              </td>
             
            </tr>
            @endforeach
            {{-- {{ $politics->links()  }}   --}}
          </tbody>
          @else


          <p>You Have no post</p>
          
          @endif
        </table>
         
        
      </div>
    </div>
</div>
</div>

    </div>
    
   
@endsection

