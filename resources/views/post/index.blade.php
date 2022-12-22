@extends('layouts.master-admin')

@section('content')




    <div class="content-wrapper">
      <div class="card">
<div class="card-body">
    <div class="d-flex justify-content-between">
        <a href="/post/create"> 
            <input type="submit" value="Create post " class="btn btn-primary ">
        </a>
        <a href="/post/trash"> 
            <input type="submit" value=" trash " class="btn btn-danger ">
        </a>

    </div>
   
     <br><br>
<h2 class="card-title">All posts</h2>

<div class="row">
  <div class="col-12">
    <div class="table-responsive">
        <table id="order-listing" class="table">
          @if(count($posts)>0)
          <thead>
            <tr>
           
              <th>title </th>
              <th>slug </th>
              <th>EDIT FUNCTION</th>
              <th>DELETE FUNCTION</th>
            </tr>
          </thead>
          <tbody>
            @foreach($posts as $post)
            <tr>
              
              <td>{{$post->title}}</td>
              <td>{{$post->slug}}</td>
              

              <td>

               
                <a href="/post/{{$post->id}}/edit"> 
                  <input type="submit" value="edit" class="btn btn-primary ">
                </a> 
              
              </td>
              <td>

                <form action="/post/{{$post->id}}" method="POST">
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

