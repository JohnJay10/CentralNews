@extends('layouts.master-admin')

@section('content')




    <div class="content-wrapper">
      <div class="card">
<div class="card-body">
<h4 class="card-title">All Sport Post</h4>
<a href="/sport/create"> 
  <input type="submit" value="Create Sport Post" class="btn btn-primary ">
</a> 
<div class="row">
  <div class="col-12">
    <div class="table-responsive">
        <table id="order-listing" class="table">
          @if(count($sports)>0)
          <thead>
            <tr>
              <th>s/n</th>
              <th>title </th>
              
              <th>EDIT FUNCTION</th>
              <th>DELETE FUNCTION</th>
            </tr>
          </thead>
          <tbody>
            @foreach($sports as $sport)
            <tr>
              <td>{{$sport->id}}</td>
              <td>{{$sport->title}}</td>
              

              <td>

               
                <a href="/sport/{{$sport->id}}/edit"> <button type="submit"  class="btn btn-primary ">EDIT </button></a> 

              </td>

              <td>

                <form action="/sport/{{$sport->id}}" method="POST">
                  @csrf
              
                 {{method_field('DELETE')}}
                
                 <button type="submit" name ="submit"  class="btn btn-danger">DELETE</button>
              </form>
              </td>
             
            </tr>
            @endforeach
             {{-- {{ $sport->links()  }} --}}
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
