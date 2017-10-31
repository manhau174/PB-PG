@extends('layouts.header_admin')
@section('content')
		<ul>
			<li><b>UserName</b> : {{$user->username}}</li>
			<li><b>Email</b> : {{$pbpg->email}}</li>
			<li><b>Address</b> : {{$pbpg->address}}</li>
			<li><b>City</b> : {{$city->name}}</li>
			<li><b>Mobile</b> : {{$pbpg->mobile}}</li>
			<li><b>Birthday</b> : {{$pbpg->birthday}}</li>
			<li><b>Height</b> : {{$pbpg->height}}</li>
			<li><b>Weight</b> : {{$pbpg->weight}}</li>
			<li><b>Description</b> :
				<textarea class="form-control" id="about" name="about" disabled>{{$pbpg->description}}</textarea>
			</li>
			<li><b>Profile pictur</b> : 
				<img class="img-responsive" src="{{$pbpg->profile_picture}}" width="300px;" height="300px;">
			</li>
			<li><b>Images</b> : 
				<img class="img-responsive" src="{{$pbpg->images}}" width="300px;" height="300px;">
			</li>
		</ul>
		<script type="text/javascript">
			CKEDITOR.replace('about');
		</script>
@endsection
@section('footer_admin')
@include('layouts.footer_admin')
@endsection