@extends('master')
@section("content")
<div class="custom-product">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          @foreach ($products as $item)
        <div class="item {{$item['id']==1?'active':''}}">
        <a href="detail/{{$item['id']}}">
              <img class="slider-img" src="{{$item['gallery']}}">
            <div class="carousel-caption slider-text" style="background-color: transparent !important">
              <h1 style="text-shadow: none; color: #002147; font-weight: bold;">{{$item['name']}}</h1>
              <h2 style="text-shadow: none; color: #2F8F9D; ">{{$item['description']}}</h2>
            </div>
            </a>
          </div>
    
          @endforeach
        </div>
      
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="trending-wrapper text-center" style="margin: 0;"> 
        <h1 style="margin: 0 0 30px 0;padding: 40px; background: #B3E8E5; font-weight:bold"> Products</h1>
        

          @foreach($products as $item)
        <div class="trening-item" style="border: 1px solid #ccc; padding: 10px">
          <a href="detail/{{$item['id']}}">
          <img class="trending-image" src="{{$item['gallery']}}">
          <div class="" style="margin-top: 10px; margin-bottom: 10px; padding: 2px;">
            <h3>{{$item['name']}}</h3>
          </div>
        </a>
        </div>
        @endforeach
      </div>
      </div>
</div>
@endsection