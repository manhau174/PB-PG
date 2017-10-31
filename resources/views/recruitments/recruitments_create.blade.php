@extends('layouts.header_admin')
@section('content')
		<form action="{{route('recruitments.store')}}" method="POST" role="form" id="form">
			
			<div class="form-group">
				<label for="">Username</label>
				<input type="text" class="form-control" id="username" name="username" placeholder="Input field">
			</div>

			<div class="form-group">
				<label for="">Passwprd</label>
				<input type="password" class="form-control" id="password"  name="password" placeholder="Input field">
			</div>

			<div class="form-group">
				<label for="">Name</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Input field">
			</div>
		
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" class="form-control" id="email" name="email" placeholder="Input field" >
				<span style="color: red" class="error_email"></span>
			</div>

			<div class="form-group">
				<label for="">Address</label>
				<input type="text" class="form-control" id="address"  name="address" placeholder="Input field">
			</div>

			<div class="form-group">
				<label for="">Mobile</label>
				<input type="text" class="form-control" id="mobile"  name="mobile" placeholder="Input field">
			</div>

			<div class="form-group">
				<label for="">Rate</label>
				<input type="text" class="form-control" id="rate"  name="rate" placeholder="Input field">
			</div>

			<div class="form-group">
				<label for="">About</label>
				<textarea class="form-control" name="about" id="about"></textarea>
			</div>
			{{csrf_field()}}
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		<script type="text/javascript">
			CKEDITOR.replace('about');
			
			$(function(){
				$('#form').validate({
					rules:{
						username : {
							required : true,
							minlength : 6,
						},
						password : {
							required : true,
							minlength : 6,
						},
						name: {
							required: true,
							minlength:6,
						},
						email: {
							required : true,
							email:true,
						},
						address:{
							required :true,
							minlength : 10,
						},
						mobile:{
							required : true,
							number : true,
						},
						rate:{
							required : true,
							number : true,
						},
						about:{
							required: true,
						}
					},
					submitHandler:function(form){
						$('#form').on('submit',function(e){
							e.preventDefault();
							var container = $('.error_email');
							var data = $('#email').val();
							$.ajax({
								url : 'checkEmail/' + data,
								dataType : 'json',
								success:function(msg){
									if(msg.error != 0) {
										container.html(msg.error_msg);
										setTimeout(function(){
											container.empty();
										},5000);
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
													window.location.href="/recruitments";
												}, 1500);
											},
										});
									}
								},
							});
						});
					},
				});
			});
			
		   
		</script>
@endsection
@section('footer_admin')
@include('layouts.footer_admin')
@endsection

