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
			<span>Income</span>
			<span>/</span>
			<span>Customers</span>
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
						<span>Manage Customers	</span>
					</h4>

					<div class="d-flex justify-content-center">
						<!-- Default input -->
						<a href="/dashboard/questions/create" class="btn btn-primary mr-0">Add</a>

					</div>

				</div>

				<!-- Table  -->
				<table class="table table-hover">

					<!-- Table head -->
					<thead class="blue-grey lighten-4">
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Unpaid</th>
							<th>Status</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<!-- Table head -->

					<!-- Table body -->
					<tbody>
			            <tr>
			                <td>Shawn Mendez</td>
							<td>shawnmendez@gmail.com</td>
			                <td>0126549872</td>
			                <td>1 Bill</td>
			                <td class="text-danger">Overdue</td>
			                <td>
			                    <a href="#" class="btn btn-table btn-view">View</a>
			                    <a data-toggle="modal" data-target="" data-id="" class="btn btn-table btn-edit">Edit</a>
			                    <button type="button" class="btn btn-table btn-delete">Delete</button>
			                </td>
			            </tr>
			            <tr>
			                <td>Camilla Cabello</td>
							<td>camillaxoxo@gmail.com</td>
			                <td>015254651</td>
			                <td>No</td>
			                <td class="text-success">Paid</td>
			                <td>
			                    <a href="#" class="btn btn-table btn-view">View</a>
			                    <a data-toggle="modal" data-target="" data-id="" class="btn btn-table btn-edit">Edit</a>
			                    <button type="button" class="btn btn-table btn-delete">Delete</button>
			                </td>
			            </tr>
			            <tr>
			                <td>Anne Marie</td>
							<td>anne.marie@gmail.com</td>
			                <td>0154164632</td>
			                <td>1 Bill</td>
			                <td class="text-warning">Pending</td>
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
@include('modal.question')
@include('script.question')
@stop
