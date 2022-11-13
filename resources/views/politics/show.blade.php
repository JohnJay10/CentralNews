
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
                  {{$politics-> title}}
                </h1>
              </div>
            </div>
           
            <div class="row">
              <div class="col-lg-12">
                <div class="row">
                  <div class="col-sm-12 grid-margin">
                    <img style="width: 70%"
                    src="/storage/image/{{$politics->image}}"
                    alt="banner"
                    class="img-fluid"
                  />
                  </div>
                  <div class="col-sm-12 grid-margin">
                 
                    <p class="fs-13 text-muted mb-0">
                      <span class="mr-2">Photo </span>{{$politics -> created_at}}
                    </p>
                    <p class="fs-15">
                      {{$politics-> body}}
                    </p>
                  </div>
                </div>
              </div>
     @endsection
