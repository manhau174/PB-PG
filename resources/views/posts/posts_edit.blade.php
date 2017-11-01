@extends('layouts.header_admin')
@section('content')
		<form action="{{route('posts.update',$post->id)}}" method="POST" role="form" id="form">
		
			<div class="form-group">
				<label for="">Title</label>
				<input type="text" class="form-control" id="title" name="title" placeholder="Input field" value="{{$post->title}}">
			</div>

			<div class="form-group">
				<label for="">Address</label>
				<input type="text" class="form-control" id="address"  name="address" placeholder="Input field" value="{{$post->address}}">
			</div>

			<div class="form-group">
				<label for="">Start Day</label>
				<input type="date" class="form-control" id="starting_day"  name="starting_day" placeholder="Input field" value="{{$post->starting_day}}">
			</div>

			<div class="form-group">
				<label for="">End Day</label>
				<input type="date" class="form-control" id="ending_day"  name="ending_day" placeholder="Input field" value="{{$post->ending_day}}">
			</div>

			<div class="form-group">
				<label for="">Salary</label>
				<input type="text" class="form-control" id="salary"  name="salary" placeholder="Input field" value="{{$post->salary}}">
			</div>

			<div class="form-group">
				<label for="">Status</label>
				<input type="radio" name="location" value="1" @if($post->location == 1) {{'checked'}}@endif> Normal
				<input type="radio" name="location" value="2"  @if($post->location == 2) {{'checked'}}@endif> Top
			</div>

			<div class="form-group">
				<label for="">Location</label>
				<input type="radio" name="status" value="0" @if($post->status == 0) {{'checked'}}@endif> Draft
				<input type="radio" name="status" value="1"  @if($post->status == 1) {{'checked'}}@endif> Waiting
				<input type="radio" name="status" value="2"  @if($post->status == 2) {{'checked'}}@endif> Publish
			</div>

			<div class="form-group">
				<label for="">City</label>
				<select name="city_id" class="form-control">
					@foreach($cities as $city)
						<option value="{{$city->id}}" @if($city->id == $post->city_id) {{'selected'}} @endif>{{$city->name}}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group" >
				<label for="">City</label>
				<select name="recruitment_id" class="form-control">
					@foreach($recruitments as $recruitment)
						<option value="{{$recruitment->id}}" @if($recruitment->id == $post->recruitment_id) {{'selected'}} @endif>{{$recruitment->name}}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<label for="">Content</label>
				<textarea class="form-control" name="content" id="content">{{$post->content}}</textarea>
			</div>

			<input type="hidden" name="_method" value="PUT">
			{{csrf_field()}}
			<button type="submit" class="btn btn-primary">Update</button>
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
									toastr.success('Update thành công! Đang tải lại ... ');
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

