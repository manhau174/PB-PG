
@extends('layouts.header')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="//code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
@extends('layouts.header')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-md-offset-1">
				<h3>Thông tin cá nhân:</h3>
				<img src="{{asset($pbpg->profile_picture)}}" width="300px">
				<h5>Tên: {{$pbpg->full_name}}</h5>
				<h5>Ngày sinh: {{$pbpg->birthday}}</h5>
				<h5>Địa chỉ: {{$pbpg->address}}</h5>
				<h5>Email: {{$pbpg->email}}</h5>
				<h5>Số điện thoại: {{$pbpg->mobile}}</h5>
			</div>  
		</div>
		<div class="row">
			<div class="col-md-9 col-md-offset-1">
				<h3><a href="{{ route('post.detail',['id' => $post->slug]) }}">{{$post->title}}</a></h3>
			</div>  
		</div>
		<div class="row">
			<div class="col-md-9 col-md-offset-1">
				@if (Data::check($post->id, $pbpg->id) == 0)
					<a href="{{ route('notifications.accept', ['post_id'=>$post->id, 'pbpg_id'=>$pbpg->id]) }}" class="btn btn-primary">Nhận</a>
				@endif
			</div>  
		</div>
	</div>
@endsection

@section('footer')
@include('layouts.footer')
@endsection