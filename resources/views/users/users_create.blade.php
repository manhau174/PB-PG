@extends('layouts.header_admin')
@section('content')

		<form action="{{route('users.store')}}" method="POST" role="form" id="form">
			<legend>Add User</legend>
		
			<div class="form-group">
				<label for="">Name</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Input field">
			</div>
		
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" class="form-control" id="email" name="email" placeholder="Input field">
			</div>

			<div class="form-group">
				<label for="">Password</label>
				<input type="password" class="form-control" id="password"  name="password" placeholder="Input field">
			</div>

			<select name="permission">
				<option value="1">Admin</option>
				<option value="2">Recuitment</option>
				<option value="3">Pb/Pg</option>
			</select>
			
			{{csrf_field()}}
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		<script type="text/javascript">
			$('#form').submit(function(e){
				e.preventDefault();
				var form = $(this);
				form.validate({
					rules:{
						name: {
							required: true,
							minlength:6,
						},
						email: {
							required : true,
							email:true,
						},
						password:{
							required : true,
							minlength : 6,
						},
					},
				});
				if({{count($errors) == 0}}){
					var data = new FormData(this);
					$.ajax({
						url : form.prop('action'),
						data : data,
						type: 'POST',
						dataType: 'json',
						cache: false,
						contentType:false,
						process:false,
						success:function(msg){
							window.location.href="/users"
						},
					});
				}
			});
		</script>
@endsection
@section('footer_admin')
@include('layouts.footer_admin')
@endsection