@extends('layouts.header');

@section('content')
	<div class="main-container col2-left-layout" style="width: 80%; margin: 0 auto; ">
      {{-- {{dd($recruitment->posts)}} --}}
      <h2 style="text-align: center;">Tin tuyển dụng</h2>
      
          
         @if (!empty($recruitment->posts))
          @foreach ($recruitment->posts as $post)
      <div class="col-lg-12 detail-recruitment">

        <div class="col-lg-3">logo</div>
        
        <div class="col-lg-9">
          <div class="jobbody col-lg-10">
            <div class="tittlejob"><h3>{{$post->title}}</h3></div>
            {{-- <div class="contentjob">
              <a href="http://mywork.com.vn/tuyen-dung/44/tiep-thi-quang-cao.html">Tiếp thị</a>,<a href="http://mywork.com.vn/tuyen-dung/63/tu-van.html"></a>
              {!!$post->content!!}
          </div> --}}
          </div>
          <div class="city_and_posted_date col-lg-2">
            <div class="city">{{$post->address}}</div>
            <div class="postdate">
              2017
            </div>
          </div>
        </div>
        
      </div>
  @endforeach
      @endif
  </div>

@endsection
@section('footer')
@include('layouts.footer')
@endsection