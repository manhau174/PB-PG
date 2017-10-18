@extends('layouts.header_admin')
@section('content')

		<form action="" method="POST" role="form">
			<legend>Add User</legend>
		
			<div class="form-group">
				<label for="">label</label>
				<input type="text" class="form-control" id="" placeholder="Input field">
			</div>
		
			
		
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
@endsection
@section('footer_admin')
@include('layouts.footer_admin')
@endsection