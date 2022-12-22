@extends('layouts.master-admin')

@section('content')




    <div class="content-wrapper">
      <div class="card">
<div class="card-body">
    <div class="d-flex justify-content-between">

      <h2 class="card-title">Recycle Bin </h2>

        <a href="{{route('category.index')}}"> 
            <input type="submit" value="Back " class="btn btn-primary ">
        </a>
        

    </div> 
   
     <br><br>


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

                <div>
                  <form action="{{route('category.restore', [$category->id])}}" method="post">
                      @csrf
                      <button type="submit" class="btn btn-warning btn-sm rounded">
                          <i class="material-icons"></i>
                          Restore
                      </button>
                  </form>
                 </div>
              
              </td>
              <td>

                <form action="{{route('category.force.delete', [$category->id])}}" method="POST">
                  @csrf
                 {{method_field('DELETE')}}
                
                 <button type="submit" class="btn btn-danger btn-sm rounded">
                  <i class="material-icons"></i>
                  Force Delete
              </button>
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

