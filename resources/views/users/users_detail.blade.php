@extends('layouts.header_admin')
@section('content')
		<ul>
			<li>Name : {{$user->name}}</li>
			<li>Email : {{$user->email}}</li>
			<li>Email : {{$user->email}}</li>
		</ul>

@endsection
@section('footer_admin')
@include('layouts.footer_admin')
@endsection