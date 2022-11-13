@extends('layouts.master-admin')

@section('content')




    <div class="content-wrapper">
      <div class="card">
<div class="card-body">
<h4 class="card-title">All Politics Post</h4>
<div class="row">
  <div class="col-12">
    <div class="table-responsive">
        <table id="order-listing" class="table">
          @if(count($politics)>0)
          <thead>
            <tr>
              <th>s/n</th>
              <th>title </th>
              
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($politics as $politics)
            <tr>
              <td>i++</td>
              <td>{{$politics->title}}</td>
              

              <td>
                <a href=""> <i class="fa fa-edit text-blue">Edit</i></a> /
                <a href=""> <i class="fa fa-trash "></i>Delete</a>
              </td>
              <td>
                
               
              </td>
            </tr>
            @endforeach
            {{-- {{ $politics->links()  }}  --}}
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
