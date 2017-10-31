@extends('layouts.header_admin')
@section('content')
		<form action="{{route('recruitments.update',$recruitment->id)}}" method="POST" role="form" id="form">
		
			<div class="form-group">
				<label for="">Name</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Input field" value="{{$recruitment->name}}">
			</div>
		
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" class="form-control" id="email" name="email" placeholder="Input field" value="{{$recruitment->email}}">
			</div>

			<div class="form-group">
				<label for="">Address</label>
				<input type="text" class="form-control" id="address"  name="address" placeholder="Input field" value="{{$recruitment->address}}">
			</div>

			<div class="form-group">
				<label for="">Mobile</label>
				<input type="text" class="form-control" id="mobile"  name="mobile" placeholder="Input field" value="{{$recruitment->mobile}}">
			</div>

			<div class="form-group">
				<label for="">Rate</label>
				<input type="text" class="form-control" id="rate"  name="rate" placeholder="Input field" value="{{$recruitment->rate}}">
			</div>

			<div class="form-group">
				<label for="">About</label>
				<textarea class="form-control" name="about" id="about">{{$recruitment->about}}</textarea>
			</div>
			<input type="hidden" name="_method" value="PUT">
			{{csrf_field()}}
			<button type="submit" class="btn btn-primary">Update</button>
		</form>
		<script type="text/javascript">
			 CKEDITOR.replace('about');
				
			$('#form').on('submit',function(e){
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
				});
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
							window.location.href="/recruitments";
						}, 1000);
					},
				});
		    });
		   
		</script>
@endsection
@section('footer_admin')
@include('layouts.footer_admin')
@endsection

