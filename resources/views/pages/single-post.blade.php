
@extends('layouts.pages')
@section('content')

<div class="content-wrapper">
    <div class="container">
      <div class="col-sm-12">
        <div class="card" data-aos="fade-up">
          <div class="card-body">
            <div class="row">
             
              <div class="col-sm-12">
                <h1 class="font-weight-600 mb-4">
                  {{$post->title}}
                </h1>
              </div>
            </div>
           
            <div class="row">
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-sm-12 grid-margin">
                    <img style="width: 70%"
                    src="{{$post->url}}"
                    alt="banner"
                    class="img-fluid"
                  />
                  </div>
                  <div class="col-sm-12 grid-margin">
                 
                    <p class="fs-13 text-muted mb-0" ">
                      <span class="mr-2" >Posted </span>{{$post->created_at->diffForHumans()}}
                    </p>
                    <p class="fs-15">
                      {!!$post->body!!}
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


     
      <br><br>
      <div class="container">
     
    </div>
    <div class="card-body">
      @foreach($category_posts as $category)
      @foreach($category->posts as $key=>$item )
      @if($key === 0)
      <div class="row">
        <div class="col-lg-8">
          <h2 class="cat">
          <div class="card-title">
           {{$category->name}}
          </div>
        </h2>
          <div class="row">
            <div class="col-sm-6 grid-margin">
              <div class="">
                <div class="rotate-img">
                  <img src="{{$item->url}}" style="height:100%;"alt="{{route('single-post', [$item->slug])}}" class="img-fluid">
                </div>
                <div>
                  <p>{{ str_limit( $item->preview, 50, '...') }}</p>
                </div>
               
               
              </div>
            </div>
            <div class="col-sm-6 grid-margin">
              <div   grid-margin">
                  
                <a  style="font-size:20px;"href="{{route('single-post', [$item->slug])}}">
                  {{$item->title}}
                </a>
             
              
              <div class="fs-13 mb-2">
                <span class="mr-2">Category </span>{{$category->name}}
              </div>
              <div class="fs-13 mb-2">
                <span class="mr-2">Posted </span>{{$item->created_at->diffForHumans()}}
              </div>
              
            </div>
            </div>
          </div>
        </div>
        @else
        @if($key === 1)
        <div class="col-lg-4">
         
          <div class="d-flex justify-content-between align-items-center">
            <div class="card-title">
              <p style="font-weight: 700;">
                More {{$category->name}}
              </p>
             
            </div>
            <p class="mb-3">See all</p>
          </div>
          @endif
          <div class="d-flex justify-content-between align-items-center border-bottom pb-2">
            <div class="div-w-80 mr-3">
              <div class="rotate-img">
                <img src="{{$item->url}}" alt=" {{route('single-post', [$item->slug])}} class="img-fluid style="height: 50px ">
              </div>
            </div>
            
              <a   style="font-size:15px;"href="{{route('single-post', [$item->slug])}}">
                {{$item->title}}</a>
           
          </div>
          <hr>
          @endif
          @endforeach 
        </div>
        
        @endforeach 
        <hr>
      </div>
      <hr>
     
    </div>
    </div>
  </div>




             
     @endsection


   
