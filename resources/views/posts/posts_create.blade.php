@extends('layouts.header_admin')
@section('content')
		<form action="{{route('posts.store')}}" method="POST" role="form" id="form">
		
			<div class="form-group">
				<label for="">Title</label>
				<input type="text" class="form-control" id="title" name="title" placeholder="Input field" ">
			</div>

			<div class="form-group">
				<label for="">Address</label>
				<input type="text" class="form-control" id="address"  name="address" placeholder="Input field" >
			</div>

			<div class="form-group">
				<label for="">Start Day</label>
				<input type="date" class="form-control" id="starting_day"  name="starting_day" placeholder="Input field">
			</div>

			<div class="form-group">
				<label for="">End Day</label>
				<input type="date" class="form-control" id="ending_day"  name="ending_day" placeholder="Input field">
			</div>

			<div class="form-group">
				<label for="">Salary</label>
				<input type="text" class="form-control" id="salary"  name="salary" placeholder="Input field">
			</div>

			<div class="form-group">
				<label for="">City</label>
				<select name="city_id" class="form-control">
					@foreach($cities as $city)
						<option value="{{$city->id}}">{{$city->name}}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group" >
				<label for="">City</label>
				<select name="recruitment_id" class="form-control">
					@foreach($recruitments as $recruitment)
						<option value="{{$recruitment->id}}">{{$recruitment->name}}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<label for="">Content</label>
				<textarea class="form-control" name="content" id="content"></textarea>
			</div>
			{{csrf_field()}}
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		<script type="text/javascript">
			CKEDITOR.replace('content');
			$(function(){
				$('#form').validate({
					rules:{
						title: {
							required: true,
							minlength:6,
						},
						address:{
							required :true,
							minlength : 10,
						},
						salary:{
							required : true,
							number : true,
						},
						content:{
							required: true,
						}
					},
					submitHandler:function(form){
						$('#form').submit(function(e){
					    	e.preventDefault();
					    	var form = $(this);
							var data = new FormData(this);
							$.ajax({
								url : form.prop('action'),
								data : data,
								type: 'POST',
								dataType: 'json',
								cache: false,
								contentType:false,
								processData:false,
								success:function(msg){
									toastr.success('Thêm mới thành công! Đang tải lại ... ');
									setTimeout(function() {
										window.location.href="/posts";
									}, 1000);
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

