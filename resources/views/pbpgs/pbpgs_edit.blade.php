@extends('layouts.header_admin')
@section('content')
		<form action="{{route('pbpgs.update',$pbpg->id)}}" method="POST" role="form" id="form">
		
			<div class="form-group">
				<label for="">Name</label>
				<input type="text" class="form-control" id="full_name" name="full_name" placeholder="Input field" value="{{$pbpg->full_name}}">
			</div>
		
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" class="form-control" id="email" name="email" placeholder="Input field" value="{{$pbpg->email}}">
			</div>

			<div class="form-group">
				<label for="">Address</label>
				<input type="text" class="form-control" id="address"  name="address" placeholder="Input field" value="{{$pbpg->address}}">
			</div>

			<div class="form-group">
				<label for="">Mobile</label>
				<input type="text" class="form-control" id="mobile"  name="mobile" placeholder="Input field" value="{{$pbpg->mobile}}">
			</div>

			<div class="form-group">
				<label for="">Location</label>
				<input type="radio" name="location" value="1" @if($pbpg->location == 1) {{'checked'}}@endif> Normal
				<input type="radio" name="location" value="2"  @if($pbpg->location == 2) {{'checked'}}@endif> Top
			</div>

			<div class="form-group">
				<label for="">Birthday</label>
				<input type="date" class="form-control" id="birthday"  name="birthday" placeholder="Input field" value="{{$pbpg->birthday}}">
			</div>

			<div class="form-group">
				<label for="">Profile picture</label>
				<input type="file" class="form-control" id="profile_picture"  name="profile_picture" placeholder="Input field" value="{{$pbpg->profile_picture}}">
			</div>


			<div class="form-group">
				<label for="">Height</label>
				<input type="text" class="form-control" id="height"  name="height" placeholder="Input field" value="{{$pbpg->height}}">
			</div>

			<div class="form-group">
				<label for="">Weight</label>
				<input type="text" class="form-control" id="weight"  name="weight" placeholder="Input field" value="{{$pbpg->weight}}">
			</div>

			<div class="form-group">
				<label for="">Description</label>
				<textarea class="form-control" name="description" id="description">{{$pbpg->description}}</textarea>
			</div>
			<input type="hidden" name="_method" value="PUT">
			{{csrf_field()}}
			<button type="submit" class="btn btn-primary">Update</button>
		</form>
		<script type="text/javascript">
			CKEDITOR.replace('description');
			$(function(){
				$('#form').validate({
					rules:{
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
										window.location.href="/pbpgs";
									}, 1000);
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

