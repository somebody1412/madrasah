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
							<th>e-notes</th>
							<th>Status</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<!-- Table head -->

					<!-- Table body -->
					<tbody>
			            <tr>
			                <td>Mathematics</td>
							<td>Counting Objects</td>
			                <td>A module that assists the teaching of counting objects for kids from 4 to 5 years old.</td>
			                <td>Available</td>
			                <td class="text-success">Active</td>
			                <td>
			                    <a href="#" class="btn btn-table btn-view">View</a>
			                    <a data-toggle="modal" data-target="" data-id="" class="btn btn-table btn-edit">Edit</a>
			                    <button type="button" class="btn btn-table btn-delete">Delete</button>
			                </td>
			            </tr>
			            <tr>
			                <td>Bahasa Melayu</td>
							<td>Haiwan</td>
			                <td>A module that assists the teaching of recognizing objects for kids from 4 to 5 years old.</td>
			                <td>Available</td>
			                <td class="text-danger">Inactive</td>
			                <td>
			                    <a href="#" class="btn btn-table btn-view">View</a>
			                    <a data-toggle="modal" data-target="" data-id="" class="btn btn-table btn-edit">Edit</a>
			                    <button type="button" class="btn btn-table btn-delete">Delete</button>
			                </td>
			            </tr>
			            <tr>
			                <td>English Language</td>
							<td>People</td>
			                <td>A module that assists the teaching of recognizing people for kids from 4 to 5 years old.</td>
			                <td>Unavailable</td>
			                <td class="text-danger">Inactive</td>
			                <td>
			                    <a href="#" class="btn btn-table btn-view">View</a>
			                    <a data-toggle="modal" data-target="" data-id="" class="btn btn-table btn-edit">Edit</a>
			                    <button type="button" class="btn btn-table btn-delete">Delete</button>
			                </td>
			            </tr>
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
