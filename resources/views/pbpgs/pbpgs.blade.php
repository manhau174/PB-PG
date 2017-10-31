@extends('layouts.header_admin')
@section('content')
	<h1>PB/PG</h1>
	<hr>
	<table class="table table-hover">
		<thead>
			<tr>
				<th>#</th>
				<th>Full Name</th>
				<th>Email</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($pbpgs as $pbpg)
			<tr id="row{{$pbpg->id}}">
				<td>{{$pbpg->id}}</td>
				<td>{{$pbpg->full_name}}</td>
				<td>{{$pbpg->email}}</td>
				<td>
					<a href="{{route('pbpgs.show', $pbpg->id)}}" class="btn btn-primary btn-sm" style="float:left">Details</a>
					<a href="{{route('pbpgs.edit', $pbpg->id)}}" class="btn btn-success btn-sm" style="float:left">Update</a>
					<button type="submit" name="submit" class="btn btn-danger btn-sm delete" data-id="{{$pbpg->id}}">Delete</button>
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
					url : 'pbpgs/' + id,
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