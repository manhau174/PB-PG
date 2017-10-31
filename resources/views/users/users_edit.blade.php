@extends('layouts.header_admin')
@section('content')
		<form action="{{route('users.update',$user->id)}}" method="POST" role="form" id="form">
			<legend>Add User</legend>
		
			<div class="form-group">
				<label for="">Name</label>
				<input type="text" class="form-control" id="username" name="username" placeholder="Input field" value="{{$user->username}}">
			</div>
		
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" class="form-control" id="email" name="email" placeholder="Input field" value="{{$user->email}}">
			</div>

			<div class="form-group">
				<label for="">Password</label>
				<input type="password" class="form-control" id="password"  name="password" placeholder="Input field">
			</div>

			<select name="permission">
				<option value="1" <?php if($user->permission==1) echo 'selected';?>>Admin</option>
				<option value="2" <?php if($user->permission==2) echo 'selected';?>>Recuitment</option>
				<option value="3" <?php if($user->permission==3) echo 'selected';?>>Pb/Pg</option>
			</select>
			<input type="hidden" name="_method" value="PUT">
			{{csrf_field()}}
			<button type="submit" class="btn btn-primary">Update</button>
		</form>
		<script type="text/javascript">
			
			$('#form').submit(function(e){
				e.preventDefault();
				var form = $(this);
				form.validate({
					rules:{
						username: {
							required: true,
							minlength:6,
						},
						email: {
							required : true,
							email:true,
						},
					},
				});
				if({{count($errors) == 0}}){
					var data = new FormData(this);
					$.ajax({
						url : form.prop('action'),
						data : data,
						dataType: 'json',
						cache: false,
						contentType:false,
						processData:false,
						type: 'POST',
						success:function(msg){
							toastr.success('Thêm mới thành công! Đang tải lại ... ');
							setTimeout(function() {
								window.location.href="/users";
							}, 1500);
						},
					});
				}
			});
		</script>
@endsection
@section('footer_admin')
@include('layouts.footer_admin')
@endsection

