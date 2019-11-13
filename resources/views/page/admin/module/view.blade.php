@extends("layout.layout")
@section('head')
<link rel="stylesheet" type="text/css" href="/css/page/question.css">
@endsection

@section('content')

<!-- Heading -->
<div class="card mb-4 wow fadeIn">

	<!--Card content-->
	<div class="card-body d-sm-flex justify-content-between">

		<h4 class="mb-2 mb-sm-0">
			<span>Module</span>
			<span>/</span>
			<span>View Module</span>
		</h4>

		<form class="d-flex justify-content-center">
			<!-- Default input -->
			<input type="search" placeholder="Type your query" aria-label="Search" class="form-control">
			<button class="btn btn-primary" type="submit">
				<i class="fa fa-search"></i>
			</button>

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

					<h4 class="mb-2 mb-sm-0">
						<span>Manage Module	</span>
					</h4>

					<div class="d-flex justify-content-center">
						<!-- Default input -->
						<a href="/dashboard/module/add" class="btn btn-primary mr-0">Add</a>

					</div>

				</div>

				<!-- Table  -->
				<table class="table table-hover">

					<!-- Table head -->
					<thead class="blue-grey lighten-4">
						<tr>
							<th>Course</th>
							<th>Title</th>
							<th>Description</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<!-- Table head -->

					<!-- Table body -->
					<tbody>
						@foreach($modules as $module)
			            <tr>
			                <td>{{$module->course}}</td>
							<td>{{$module->title}}</td>
			                <td>{{$module->description}}</td>
			                <td>
			                    <a href="/{{$module->file_url}}" class="btn btn-table btn-view">View</a>
								<a href="/dashboard/module/edit/{{$module->id}}" class="btn btn-table btn-edit">Edit</a>
								{!! Form::open(['route' => 'dashboard.module.delete', 'files' => true]) !!}
								<button type="button" class="btn btn-table btn-delete">Delete</button>
								<input type="hidden" name="id" value="{{$module->id}}">
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
@stop
