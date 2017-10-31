@extends('layouts.header_admin')
@section('content')
		<form action="{{route('users.store')}}" method="POST" role="form" id="form">
		
			<div class="form-group">
				<label for="">Username</label>
				<input type="text" class="form-control" id="username" name="username" placeholder="Input field">
			</div>
		
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" class="form-control" id="email" name="email" placeholder="Input field">
				<span style="color: red" class="error_email"></span>
			</div>
			<div class="form-group">
				<label for="">Passwprd</label>
				<input type="password" class="form-control" id="password"  name="password" placeholder="Input field">
			</div>

			<div class="form-group">
				<label for="">Permission</label>
				<select name="permission" class="form-control">
					<option value="1" selected>Admin</option>
					<option value="2">Recuitment</option>
					<option value="3">Pb/Pg</option>
				</select>
			</div>
			<div class="receiver">
				
			</div>

			{{csrf_field()}}
			<button type="submit" id="submit" class="btn btn-primary" style="margin-top: 10px;">Submit</button>
		</form>
		<script type="text/javascript">
			$('select').on('change',function(){
				var value = $(this).val();
				var container = $('.receiver');
				container.empty();
				if(value != 1){
					$.ajax({
						url : 'getView/' + value,
						success:function(msg){
							container.append(msg);
						},
					});
				}
			});
			$(function(){
				$('#form').validate({
					rules:{
						username: {
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
					submitHandler:function(form){			
						$('#form').submit(function(e){
							e.preventDefault();
							var container = $('.error_email');
							var data = $('#email').val();
							$.ajax({
								url : 'checkEmail/' + data,
								dataType : 'json',
								success:function(msg){
									if(msg.error != 0) {
										container.append(msg.error_msg);
										setTimeout(function(){
											container.empty();
										},1500);
									}else{
										var form = $('#form');
										var data = new FormData('#form');
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
								},
							});
						});
					}
				});
			});
		</script>
@endsection
@section('footer_admin')
@include('layouts.footer_admin')
@endsection