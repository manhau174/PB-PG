
@extends('layouts.header')
<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="//code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-9 col-sm-offset-1">
				<h2>{{$post->title}}</h2>
				<h4>{!!$post->content!!}</h4>
				<h4><b>Địa chỉ:</b></h4> {{$post->address}}
				<h4><b>Ngày bắt đầu:</b></h4> {{$post->starting_day}}
				<h4><b>Ngày kết thúc:</b></h4> {{$post->ending_day}}
				<h4><b>Lương:</b></h4> <h3>{{number_format($post->salary)}} VNĐ</h3>
			</div>
		</div>
		
	</div>
@endsection

@section('footer')
@include('layouts.footer')
@endsection