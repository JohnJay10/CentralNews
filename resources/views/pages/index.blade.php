@extends('layouts.pages')
@section('content')

<div class="content-wrapper">
    <div class="container">
      <div class="row" data-aos="fade-up">
        <div class="col-xl-8 stretch-card grid-margin">
          <div class="position-relative">
            <img style="max-height: 100%"
              src="/site/assets/images/dashboard/bu.jpeg"
              alt="banner"
              class="img-fluid"
            />
            <div class="banner-content">
              
              <h1 class="mb-0">GLOBAL PANDEMIC</h1>
              <h1 class="mb-2">
                Coronavirus Outbreak LIVE Updates: ICSE, CBSE Exams
                Postponed, 168 Trains
              </h1>
              
            </div>
          </div>
        </div>
        <div class="col-xl-4 stretch-card grid-margin">
          <div class="card bg-dark text-white">
            
            <div class="card-body">
              <h2>Latest news</h2>
                 @if( count($latestnews) > 0 )
                @foreach($latestnews as $latestnews)
              
     
              <div
                class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
             
              
                <div class="pr-3">
                 
                  <h5> {{$latestnews-> title}}</h5>
                  <div class="fs-12">
                    <span class="mr-2">Photo </span>10 Minutes ago
                  </div>
                </div>
                <div class="rotate-img">
                  <img
                    src="/storage/image/{{$latestnews->image}}"
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
                  <li><a href="#">Politics</a></li>
                  <li><a href="#">International</a></li>
                  <li><a href="#">Finance</a></li>
                  
                </ul>
              </div>
            </div>
          </div>

       
        <div class="col-lg-9 stretch-card grid-margin">
          <div class="card">
            <div class="card-body">
              @if( count($politics) > 0 )
              @foreach($politics as $politic)
              <div class="row">
                <div class="col-sm-4 grid-margin">
                  <div class="position-relative">
                    <div class="rotate-img">
                      <img
                        src="/storage/image/{{$politic->image}}"
                        alt="thumb"
                        class="img-fluid"
                      >
                    </div>
                    <div class="badge-positioned">
                     
                    
                    </div>
                  </div>
                </div>
                <div class="col-sm-8  grid-margin">
                  <h2 class="mb-2 font-weight-600">
                    <a class="navbar" href="/politics/{{$politic->id}}">
                      {{$politic-> title}}</a>
                  </h2>
                  <div class="fs-13 mb-2">
                    <span class="mr-2">Photo </span>{{$politic -> created_at}}
                  </div>
                  <p class="mb-0">
                    {{$politic-> preview}}

                  </p>
                </div>
               
              </div>

              @endforeach

              @else
              @endif

              {{-- {{$politics->links()}} --}}
            </div>
          </div>

         
        </div>
      </div>
      
      <div class="row" data-aos="fade-up">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-xl-6">
                  <div class="card-title">
                  <h1>Sports</h1>
                  </div>
                  <div class="row">
                    <div class="col-xl-6 col-lg-8 col-sm-6">
                  
                      <div class="rotate-img">
                        <img
                          src="/site/assets/images/dashboard/rol.jpg"
                          alt="thumb"
                          class="img-fluid"
                        />
                      </div>
                      <h2 class="mt-3 text-primary mb-2">
                        Ronaldo Transfer News
                      </h2>
                      <p class="fs-13 mb-1 text-muted">
                        <span class="mr-2">Photo </span>10 Minutes ago
                      </p>
                      <p class="my-3 fs-15">
                        Ronaldo has been transferref
                      </p>
                      <a href="#" class="font-weight-600 fs-16 text-dark"
                        >Read more</a
                      >
                    </div>
                    <div class="col-xl-6 col-lg-4 col-sm-6">
                      @if( count($sport) > 0 )
                      @foreach($sport as $sport)
                      <div class="border-bottom pb-3 mb-3">
                       <a href="/sport/{{$sport->id}}"><h3 class="font-weight-600 mb-0">
                        {{$sport->title}}
                       </h3></a> 
                        
                        <p class="fs-13 text-muted mb-0">
                          <span class="mr-2">Photo </span>10 Minutes ago
                        </p>
                        <p class="mb-0">
                            {{$sport->body}}
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
                    <div class="col-sm-6">
                      <div class="card-title">
                        Sport light
                      </div>
                      <div class="border-bottom pb-3">
                        <div class="rotate-img">
                          <img
                            src="/site/assets/images/dashboard/home_17.jpg"
                            alt="thumb"
                            class="img-fluid"
                          />
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
                          <img
                            src="/site/assets/images/dashboard/home_18.jpg"
                            alt="thumb"
                            class="img-fluid"
                          />
                        </div>
                        <p class="fs-16 font-weight-600 mb-0 mt-3">
                          Kaine: Trump Jr. may have
                        </p>
                        <p class="fs-13 text-muted mb-0">
                          <span class="mr-2">Photo </span>10 Minutes ago
                        </p>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card-title">
                        Celebrity news
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="border-bottom pb-3">
                            <div class="row">
                              <div class="col-sm-5 pr-2">
                                <div class="rotate-img">
                                  <img
                                    src="/site/assets/images/dashboard/home_19.jpg"
                                    alt="thumb"
                                    class="img-fluid w-100"
                                  />
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
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="border-bottom pb-3 pt-3">
                            <div class="row">
                              <div class="col-sm-5 pr-2">
                                <div class="rotate-img">
                                  <img
                                    src="/site/assets/images/dashboard/home_20.jpg"
                                    alt="thumb"
                                    class="img-fluid w-100"
                                  />
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
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="border-bottom pb-3 pt-3">
                            <div class="row">
                              <div class="col-sm-5 pr-2">
                                <div class="rotate-img">
                                  <img
                                    src="/site/assets/images/dashboard/home_21.jpg"
                                    alt="thumb"
                                    class="img-fluid w-100"
                                  />
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
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="pt-3">
                            <div class="row">
                              <div class="col-sm-5 pr-2">
                                <div class="rotate-img">
                                  <img
                                    src="/site/assets/images/dashboard/home_22.jpg"
                                    alt="thumb"
                                    class="img-fluid w-100"
                                  />
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
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection