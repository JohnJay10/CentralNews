@extends('layouts.pages')
@section('content')
<style>
.navba{
  color:white;
}
.cat{
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
.post{
  font-family: Roboto;
}

</style>
<div class="content-wrapper">
    <div class="container">
      <div class="row" data-aos="fade-up">
        <div class="col-xl-8 stretch-card grid-margin">
          @if( count($latest) > 0 )
          @foreach($latest as $single_post)
          <div class="position-relative">
            <img style="max-height: 100%"
              src="{{$single_post->url}}"
              alt="banner"
              class="img-fluid"
            />
            <div class="banner-content">
              
              <h1 class="mb-0">{{$single_post->title}}</h1>
              <h1 class="mb-2">
                
              </h1>
              
            </div>
          </div>
          @endforeach

                @else
                @endif
        </div>
        <div class="col-xl-4 stretch-card grid-margin">
          <div class="card bg-dark text-white">
            
            <div class="card-body">
              <h2 style="font-family: Roboto;">Latest Post</h2>
                 @if( count($latestPost) > 0 )
                @foreach($latestPost as $single_post)
              
     
              <div
                class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
             
              
                <div class="pr-3">
                    
                    
                 
                  <h5 > 
                  
                   <a class="navba" style="font-size:14px color:white" href="{{route('single-post', [$single_post->slug])}}">
                    {{$single_post->title}}  
                  </a>
                  </h5>
                  <div class="fs-12">
                    <span class="mr-2"></span>
                  </div>
                </div>
                <div class="rotate-img">
                  <img
                    src="{{$single_post->url}}"
                    alt="thumb"
                    class="img-fluid img-lg"
                    
                  />
                </div>
                
              </div>

               @endforeach

                @else
                @endif

              
            </div>
          </div>
        </div>
      </div>
      <div class="row" data-aos="fade-up">

        <div class="row" data-aos="fade-up">
          <div class="col-lg-3 stretch-card grid-margin">
            <div class="card">
              <div class="card-body">
                <h2>Category</h2>
                <ul class="vertical-menu">
                  
                  <li>
                    @forelse($categories as $category)
                    
                      <h5 class="font-weight-600">
                        <a  href="{{route('category-post', [$category->slug])}}"  >
                        {{$category->name}}
                      </a>
                      </h5>
                     
                @empty
                @endforelse
                  
                  </li>
                 
                  
                </ul>
              </div>
            </div>
          </div>

         
        <div class="col-lg-9 stretch-card grid-margin" id="pol_data">
          <div class="card">
            <div class="card-body">
              @if( count($posts) > 0 )
              @foreach($posts as $post)
            
             
              <div class="row">
                <div class="col-sm-4 grid-margin">
                  <div class="position-relative">
                    <div class="rotate-img">
                      <img
                        src="{{ ($post->url)}}"
                        alt="thumb"
                        class="img-fluid"
                      >
                    </div>
                    <div class="badge-positioned">
                     
                    
                    </div>
                  </div>
                </div>
                <div class="col-sm-8  grid-margin">
                  <h2 class=" font-weight-600">
                    <a  class="post" style="font-size:15px; font-weight:700;"href="{{route('single-post', [$post->slug])}}">
                      {{$post->title}}</a>
                  </h2>
                  <div class="fs-13 mb-2">
                    <span class="mr-2">Category </span>{{$post->category->name}}
                  </div>
                  <div class="fs-13 mb-2">
                    <span class="mr-2">Posted </span>{{date('F,j,Y',strtotime($post->created_at))}}
                    {{-- {{$post->created_at->diffForHumans()}} --}}
                  </div>
                  <p class="mb-0">
                    {{$post->preview}}

                  </p>
                </div>
               
              </div>

              @endforeach

              @else
              @endif

             
            </div>
          </div>

         
        </div>
      </div>
      
     

      <div class="col-sm-12">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-xl-6">
                <div class="card-title">
                 FLASH NEWS
                </div>
                <div class="row">



                  <div class="col-xl-6 col-lg-8 col-sm-6">
                    @if( count($latest) > 0 )
                    @foreach($latest as $single_post)
                    <div class="rotate-img">
                      <img src="{{$single_post->url}}" alt="thumb" class="img-fluid">
                    </div>
                    <h2 style="font-size:20px"class="mt-3 text-primary mb-2">
                      <a class="navba" style=" color:black" href="{{route('single-post', [$single_post->slug])}}">
                        {{$single_post->title}}  
                      </a>
                    </h2>
                    <p class="fs-13 mb-1 text-muted">
                      <span class="mr-2">Posted </span>{{$post->created_at->diffForHumans()}}
                    </p>
                    <p class="my-3 fs-15">
                      {{$single_post->preview}}
                    </p>
                    <a href="#" class="font-weight-600 fs-16 text-dark">Read more</a>
                  </div>
                  @endforeach

                  @else
                  @endif

                 
                  <div class="col-xl-6 col-lg-4 col-sm-6">
                    <div class="card-title">
                      MOST VIEWED
                     </div>
                     @if( count($mostviewed) > 0 )
                    @foreach($mostviewed as $single_post)
                    <div class="border-bottom pb-3 mb-3">
                      <h3 class="font-weight-600 mb-0">
                        <a class="navba" style=" color:black; font-size:15px;" href="{{route('single-post', [$single_post->slug])}}">
                          {{$single_post->title}}  
                        </a>
                      </h3>
                      <p class="fs-13 text-muted mb-0">
                        <span class="mr-2">Photo </span>{{$post->created_at->diffForHumans()}}
                      </p>
                      
                    </div>
                    @endforeach

                    @else
                    @endif
                   
                    
                
                  </div>
                </div>
              </div>
              <div class="col-xl-6">
                <div class="row">
                  {{-- <div class="col-sm-6">
                    <div class="card-title">
                      Sport light
                    </div>
                    <div class="border-bottom pb-3">
                      <div class="rotate-img">
                        <img src="assets/images/dashboard/home_17.jpg" alt="thumb" class="img-fluid">
                      </div>
                      <p class="fs-16 font-weight-600 mb-0 mt-3">
                        Kaine: Trump Jr. may have
                      </p>
                      <p class="fs-13 text-muted mb-0">
                        <span class="mr-2">Photo </span>10 Minutes ago
                      </p>
                    </div>
                    <div class="pt-3 pb-3">
                      <div class="rotate-img">
                        <img src="assets/images/dashboard/home_18.jpg" alt="thumb" class="img-fluid">
                      </div>
                      <p class="fs-16 font-weight-600 mb-0 mt-3">
                        Kaine: Trump Jr. may have
                      </p>
                      <p class="fs-13 text-muted mb-0">
                        <span class="mr-2">Photo </span>10 Minutes ago
                      </p>
                    </div>
                  </div> --}}
                  <div class="col-sm-6">
                    {{-- <div class="card-title">
                      Celebrity news
                    </div> --}}
                    <div class="row">
                      {{-- <div class="col-sm-12">
                        <div class="border-bottom pb-3">
                          <div class="row">
                            <div class="col-sm-5 pr-2">
                              <div class="rotate-img">
                                <img src="assets/images/dashboard/home_19.jpg" alt="thumb" class="img-fluid w-100">
                              </div>
                            </div>
                            <div class="col-sm-7 pl-2">
                              <p class="fs-16 font-weight-600 mb-0">
                                Online shopping ..
                              </p>
                              <p class="fs-13 text-muted mb-0">
                                <span class="mr-2">Photo </span>10
                                Minutes ago
                              </p>
                              <p class="mb-0 fs-13">
                                Lorem Ipsum has been
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> --}}
                    {{-- <div class="row">
                      <div class="col-sm-12">
                        <div class="border-bottom pb-3 pt-3">
                          <div class="row">
                            <div class="col-sm-5 pr-2">
                              <div class="rotate-img">
                                <img src="assets/images/dashboard/home_20.jpg" alt="thumb" class="img-fluid w-100">
                              </div>
                            </div>
                            <div class="col-sm-7 pl-2">
                              <p class="fs-16 font-weight-600 mb-0">
                                Online shopping ..
                              </p>
                              <p class="fs-13 text-muted mb-0">
                                <span class="mr-2">Photo </span>10
                                Minutes ago
                              </p>
                              <p class="mb-0 fs-13">
                                Lorem Ipsum has been
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> --}}
                    {{-- <div class="row">
                      <div class="col-sm-12">
                        <div class="border-bottom pb-3 pt-3">
                          <div class="row">
                            <div class="col-sm-5 pr-2">
                              <div class="rotate-img">
                                <img src="assets/images/dashboard/home_21.jpg" alt="thumb" class="img-fluid w-100">
                              </div>
                            </div>
                            <div class="col-sm-7 pl-2">
                              <p class="fs-16 font-weight-600 mb-0">
                                Online shopping ..
                              </p>
                              <p class="fs-13 text-muted mb-0">
                                <span class="mr-2">Photo </span>10
                                Minutes ago
                              </p>
                              <p class="mb-0 fs-13">
                                Lorem Ipsum has been
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> --}}
                    {{-- <div class="row">
                      <div class="col-sm-12">
                        <div class="pt-3">
                          <div class="row">
                            <div class="col-sm-5 pr-2">
                              <div class="rotate-img">
                                <img src="assets/images/dashboard/home_22.jpg" alt="thumb" class="img-fluid w-100">
                              </div>
                            </div>
                            <div class="col-sm-7 pl-2">
                              <p class="fs-16 font-weight-600 mb-0">
                                Online shopping ..
                              </p>
                              <p class="fs-13 text-muted mb-0">
                                <span class="mr-2">Photo </span>10
                                Minutes ago
                              </p>
                              <p class="mb-0 fs-13">
                                Lorem Ipsum has been
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
  
  <script>
      
      $(document).ready(function(){
       $(document).on('click','.pagination a', function(event){
           
           event.preventDefault();
           var page = $(this).attr('href').split('page=')[1];
           getmorepol(page);
       });
          
      });
      
      
      function getmorepol(page){
          $.ajax({
              type: "GET",
              url: "{{route('get-more-pol')}}",
              success: function(data){
               $('#pol_data'). html(data); 
                  
              }
          })
      }
  </script>

@endsection