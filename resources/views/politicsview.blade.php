@extends('layouts.master-admin')

@section('content')




    <div class="content-wrapper">
      <div class="card">
<div class="card-body">
<h4 class="card-title">All Politics Post</h4>
<a href="/politics/create"> 
  <input type="submit" value="Create Politics Post" class="btn btn-primary ">
</a> 
<div class="row">
  <div class="col-12">
    <div class="table-responsive">
        <table id="order-listing" class="table">
          @if(count($politics)>0)
          <thead>
            <tr>
              <th>s/n</th>
              <th>title </th>
              <th>EDIT FUNCTION</th>
              <th>DELETE FUNCTION</th>
            </tr>
          </thead>
          <tbody>
            @foreach($politics as $politics)
            <tr>
              <td>{{$politics->id}}</td>
              <td>{{$politics->title}}</td>
              

              <td>

               
                <a href="/politics/{{$politics->id}}/edit"> 
                  <input type="submit" value="edit" class="btn btn-primary ">
                </a> 
              
              </td>
              <td>

                <form action="/politics/{{$politics->id}}" method="POST">
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
