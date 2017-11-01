@extends('layouts.header_admin')
@section('content')
		<form action="{{route('pbpgs.store')}}" method="POST" role="form" id="form" enctype="multipart/form-data">
			
			<div class="form-group">
				<label for="">Username</label>
				<input type="text" class="form-control" id="username" name="username" placeholder="Input field">
			</div>

			<div class="form-group">
				<label for="">Passwprd</label>
				<input type="password" class="form-control" id="password"  name="password" placeholder="Input field">
			</div>

			<div class="form-group">
				<label for="">Full name</label>
				<input type="text" class="form-control" id="full_name" name="full_name" placeholder="Input field" >
			</div>
			
			<div class="form-group">
				<label for="">Gender</label>
				<input type="radio" name="gender" value="1" checked> Male
				<input type="radio" name="gender" value="2"> Female
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
				<input type="text" class="form-control" id="mobile"  name="mobile" placeholder="Input field" >
			</div>

			<div class="form-group">
				<label for="">Birthday</label>
				<input type="date" class="form-control" id="birthday"  name="birthday" placeholder="Input field" >
			</div>

			<div class="form-group">
				<label for="">Profile picture</label>
				<input type="file" class="form-control" id="profile_picture"  name="profile_picture" placeholder="Input field">
			</div>

			<div class="form-group">
				<label for="">City</label>
				<select name="city_id" class="form-control">
					@foreach($cities as $city)
						<option value="{{$city->id}}">{{$city->name}}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<label for="">Height</label>
				<input type="text" class="form-control" id="height"  name="height" placeholder="Input field" >
			</div>

			<div class="form-group">
				<label for="">Weight</label>
				<input type="text" class="form-control" id="weight"  name="weight" placeholder="Input field" >
			</div>

			<div class="form-group">
				<label for="">Description</label>
				<textarea class="form-control" name="description" id="description"></textarea>
			</div>
			{{csrf_field()}}
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		<script type="text/javascript">
			CKEDITOR.replace('description');
			$(function(){
				$('#form').validate({
					rules:{
						username : {
							required : true,
							minlength : 6,
						},
						password:{
							required : true,
							minlength : 6,
						},
						full_name: {
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
						height:{
							required : true,
							number : true,
						},
						weight:{
							required: true,
							number : true,
						},
						description:{
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
													window.location.href="/pbpgs";
												}, 1500);
											},
										});
									}
								},
							});
						});
					},
				});
			})
			
		</script>
@endsection
@section('footer_admin')
@include('layouts.footer_admin')
@endsection

