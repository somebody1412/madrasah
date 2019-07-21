@extends("layout.layout")
@section('head')
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css"> -->

<!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script> -->
@endsection

@section('content')

<!-- Heading -->
<div class="card mb-4 wow fadeIn">

	<!--Card content-->
	<div class="card-body d-sm-flex justify-content-between">

		<h4 class="mb-2 mb-sm-0">
			<span>Exam Management</span>
			<span>/</span>
			<a href="/dashboard/questions">Exam Questions</a>
			<span>/</span>
			<span>View Options</span>
		</h4>

		<form class="d-flex justify-content-center">
			<!-- Default input -->
			<!-- <input type="search" placeholder="Type your query" aria-label="Search" class="form-control"> -->
			<!-- <button type="button" data-toggle="modal" data-target="#addnewOption" class="btn btn-primary">
				<i class="fa fa-plus mr-2"></i>Add New Option
			</button> -->

		</form>

	</div>

</div>
<!-- Heading -->

<!--Grid row-->
<div class="row wow fadeIn">

	<!--Grid column-->
	<div class="col-md-12 mb-4">

		<!--Card-->
		<div class="card">

			<!--Card content-->
			<div class="card-body">

				<div class="d-sm-flex justify-content-between mb-3">

					<h4 class="mb-2 mb-sm-0 pl-0">
						<span>Manage Answers</span>
					</h4>

					<div class="d-flex justify-content-center">
						<!-- Default input -->
						<a data-toggle="modal" data-target="#addnewOption" class="btn btn-primary btn-table"><i class="fa fa-plus mr-2"></i>Add New Answer</a>

					</div>

				</div>
				<div class="d-sm-flex justify-content-between mb-3">

					<p class="mb-2 mb-sm-0">
						<span>Question: {{$question->question}}?</span>
					</p>

				</div>

				<!-- Table  -->
				<table class="table table-hover">

					<!-- Table head -->
					<thead class="blue-grey lighten-4">
						<tr>
							<th>Option</th>
							<th>Correct Answer</th>
							<th>Action</th>
						</tr>
					</thead>
					<!-- Table head -->

					<!-- Table body -->
					<tbody>
						@foreach($options as $value)
						<tr>
							<td>{{$value->option}}</td>
							<td class="{{($value->correct)?'text-success':'text-danger'}}">{{($value->correct)?'Yes':'No'}}</td>
							<td>
								{!! Form::open(['method' => 'POST', 'route' => ['dashboard.answer.delete']]) !!}
								<button type="button" class="btn btn-table btn-edit" data-id={{$value->id}} data-toggle="modal" data-target="#editOption">
									Edit
								</button>
								<input type="hidden" name="optionid" value="{{$value->id}}">
								<button type="button" class="btn btn-table btn-delete">Delete</button>
								{!! Form::close() !!}
							</td>
						</tr>
						@endforeach
					</tbody>
					<!-- Table body -->

				</table>
				<!-- Table  -->

			</div>

		</div>
		<!--/.Card-->

	</div>
	<!--Grid column-->
</div>
<!--Grid row-->
<script type="text/javascript">
$(document).ready( function () {
	$('#question').DataTable({
	});
} );
</script>



@include('modal.addOption')
@include('modal.editOption')
@include('script.option')
@stop
