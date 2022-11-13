
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
                  {{$sport-> title}}
                </h1>
              </div>
            </div>
           
            <div class="row">
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-sm-12 grid-margin">
                    <img style="width: 80%% "
                        src="/storage/image/{{$sport->image}}"
                        alt="banner"
                        class="img-fluid"
                      />
                   
                  </div>
                  <div class="col-sm-12 grid-margin">
                 
                    <p class="fs-13 text-muted mb-0">
                      <span class="mr-2">Photo </span>{{$sport -> created_at}}
                    </p>
                    <p class="fs-15">
                      {{$sport-> body}}
                    </p>
                  </div>
                  



                  
                </div>
              </div>
              @endsection
