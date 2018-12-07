@extends('layouts.admin_layout')
@section('content')



<div class="container-fluid">
      <div class="row">

        <div class="col-sm-3">
          <div class="inner-mid-left">
            <ul>
              <li class="border-menu"><a href="#"> > Product1</a></li>
              <li class="border-menu"><a href="#"> > Product2</a></li>
            </ul>
          </div>
        </div>


            <div class="col-sm-9">              
              <div class="inner-right">
                <div class="reating-text">
                <p>100</p>
              </div>
                <div class="col-sm-2">
                  <div class="inner-img"><img src="{{url('public/assets/images/cup.png')}}"></div>
                </div>
                <div class="col-sm-8">
                  <div class="inner-content">
                    <h3>Twitter name @ Twitter screen name</h3>
                    <p>........................................................................................................................................................<br>........................................................................................................................................................<br>....................................................................................</p>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="inner-right-btn">
                    <button type="button" class="btn btn-default"><img src="{{url('public/assets/images/suer-love.png')}}">Default</button>
                    <button type="button" class="btn btn-default"><img src="{{url('public/assets/images/spek.png')}}"></button>
                    <h2 class="text-center">75 Rs -</h2>
                  </div>
                </div>
              </div>

                  <div class="inner-right">
                <div class="reating-text">
                <p>100</p>
              </div>
                <div class="col-sm-2">
                  <div class="inner-img"><img src="{{url('public/assets/images/cup.png')}}"></div>
                </div>
                <div class="col-sm-8">
                  <div class="inner-content">
                    <h3>Twitter name @ Twitter screen name</h3>
                    <p>........................................................................................................................................................<br>........................................................................................................................................................<br>....................................................................................</p>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="inner-right-btn">
                    <button type="button" class="btn btn-default"><img src="{{url('public/assets/images/suer-love.png')}}">Default</button>
                    <button type="button" class="btn btn-default"><img src="{{url('public/assets/images/spek.png')}}"></button>
                    <h2 class="text-center">75 Rs -</h2>
                  </div>
                </div>
              </div>

            </div>

      </div>
    </div>
    

@endsection