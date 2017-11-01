@extends('layouts.header_admin')
@section('content')
	<h1>Recruitments</h1>
	<hr>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Mobile</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($recruitments as $recruitment)
			<tr id="row{{$recruitment->id}}">
				<td>{{$recruitment->id}}</td>
				<td>{{$recruitment->name}}</td>
				<td>{{$recruitment->mobile}}</td>
				<td>
					<a href="{{route('recruitments.show', $recruitment->id)}}" class="btn btn-primary btn-sm" style="float:left">Details</a>
					<a href="{{route('recruitments.edit', $recruitment->id)}}" class="btn btn-success btn-sm" style="float:left">Update</a>
					<button type="submit" name="submit" class="btn btn-danger btn-sm delete" data-id="{{$recruitment->id}}">Delete</button>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<script type="text/javascript">
		$('.delete').click(function(){
			var id = $(this).data('id');
			swal({
				  title: "Are you sure?",
				  type: "warning",
				  showCancelButton: true,
				  confirmButtonColor: "#DD6B55",
				  confirmButtonText: "Yes, delete it!",
				},
			function(){
			  $.ajax({
			  		type : "DELETE",
					url : 'recruitments/' + id,
					success: function(msg){
						toastr.success('Xoa thanh cong!');
						setTimeout(function() {
							$('#row'+id).remove();
						}, 1000);
					},
			  	});
			});
		});
	</script>
@endsection
@section('footer_admin')
@include('layouts.footer_admin')
@endsection