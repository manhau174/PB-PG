@extends('layouts.header_admin')
@section('content')
		<ul>
			<li><b>Username</b> : {{$user->username}}</li>
			<li><b>Email</b> : {{$recruitment->email}}</li>
			<li><b>Address</b> : {{$recruitment->address}}</li>
			<li><b>Mobile</b> : {{$recruitment->mobile}}</li>
			<li><b>Rate</b> : {{$recruitment->rate}}</li>
			<li><b>About</b> :
				<textarea class="form-control" id="about" name="about" disabled>{{$recruitment->about}}</textarea>
			</li>
		</ul>
		<script type="text/javascript">
			CKEDITOR.replace('about');
		</script>
@endsection
@section('footer_admin')
@include('layouts.footer_admin')
@endsection