
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
                  POLITICS
                </h1>
              </div>
            </div>
        
            <div class="row">
              <div class="col-lg-8">
                @if( count($politics) > 0 )
                @foreach($politics as $politics)
                <div class="row">
                 
                  <div class="col-sm-4 grid-margin">
                    <div class="rotate-img">
                      <img
                        src="/storage/image/{{$politics->image}}"
                        alt="banner"
                        class="img-fluid"
                      />
                    </div>
                  </div>
                  <div class="col-sm-8 grid-margin">
                    <h2 class="font-weight-600 mb-2">
                      <a class="navbar" href="/politics/{{$politics->id}}">
                      {{$politics-> title}}</a>
                      
                    </h2>
                    <p class="fs-13 text-muted mb-0">
                      <span class="mr-2">Photo </span>{{$politics -> created_at}}
                    </p>
                    <p class="fs-15">
                      {{$politics-> preview}}
                    </p>
                  </div>
                </div>
                @endforeach

                @else
                @endif
               
              </div>
              
              
              <div class="col-lg-4">
                <h2 class="mb-4 text-primary font-weight-600">
                  Latest news
                </h2>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="border-bottom pb-4 pt-4">
                      <div class="row">
                        @if( count($latestnews) > 0 )
                         @foreach($latestnews as $latestnews)
                        <div class="col-sm-8">
                          
                          <h5 class="font-weight-600 mb-1">
                            {{$latestnews-> title}}
                          </h5>
                          <p class="fs-13 text-muted mb-0">
                            <span class="mr-2">Photo </span>{{$latestnews-> created_at}}
                          </p>
                        </div>
                        <div class="col-sm-4">
                          <div class="rotate-img">
                            <img
                              src="/storage/image/{{$latestnews->image}}"
                              alt="banner"
                              class="img-fluid"
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
                
                
                <div class="trending">
                  <h2 class="mb-4 text-primary font-weight-600">
                    Trending
                  </h2>
                  <div class="mb-4">
                    <div class="rotate-img">
                      <img
                        src="../site/assets/images/politics/Politics_4.jpg"
                        alt="banner"
                        class="img-fluid"
                      />
                    </div>
                    <h3 class="mt-3 font-weight-600">
                      Virus Kills Member Of Advising Iran’s Supreme
                    </h3>
                    <p class="fs-13 text-muted mb-0">
                      <span class="mr-2">Photo </span>10 Minutes ago
                    </p>
                  </div>
                  <div class="mb-4">
                    <div class="rotate-img">
                      <img
                        src="../site/assets/images/politics/Politics_5.jpg"
                        alt="banner"
                        class="img-fluid"
                      />
                    </div>
                    <h3 class="mt-3 font-weight-600">
                      Virus Kills Member Of Advising Iran’s Supreme
                    </h3>
                    <p class="fs-13 text-muted mb-0">
                      <span class="mr-2">Photo </span>10 Minutes ago
                    </p>
                  </div>
                  <div class="mb-4">
                    <div class="mb-4">
                      <div class="rotate-img">
                        
                        <img
                          src="..site/assets/images/politics/Politics_6.jpg"
                          alt="banner"
                          class="img-fluid"
                        />
                      </div>
                    <h3 class="mt-3 font-weight-600">
                      Virus Kills Member Of Advising Iran’s Supreme
                    </h3>
                    <p class="fs-13 text-muted mb-0">
                      <span class="mr-2">Photo </span>10 Minutes ago
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

@endsection
