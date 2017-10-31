@extends('layouts.header_admin')
@section('content')
		<ul>
			<li><b>Username</b> : {{$user->username}}</li>
			<li><b>Email</b> : {{$user->email}}</li>
			<li><b>Type</b> : {{$permission}}</li>
		</ul>

@endsection
@section('footer_admin')
@include('layouts.footer_admin')
@endsection