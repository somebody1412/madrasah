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
			<span>Expenses</span>
			<span>/</span>
			<span>Bills</span>
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
						<span>Manage Bills	</span>
					</h4>

					<div class="d-flex justify-content-center">
						<!-- Default input -->
						<a href="/dashboard/expenses/bill/add" class="btn btn-primary mr-0">Add</a>

					</div>

				</div>

				<!-- Table  -->
				<table class="table table-hover">

					<!-- Table head -->
					<thead class="blue-grey lighten-4">
						<tr>
							<th>Number</th>
							<th>Vendor</th>
							<th>Amount</th>
							<th>Bill Date</th>
							<th>Due Date</th>
							<th>Status</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<!-- Table head -->

					<!-- Table body -->
					<tbody>
			            <tr>
			                <td>000001</td>
			                <td>WebSoho</td>
			                <td>RM3500</td>
			                <td>22/06/2019</td>
			                <td>21/07/2019</td>
			                <td class="text-danger">Overdue</td>
			                <td>
			                    <a href="#" class="btn btn-table btn-view">View</a>
			                    <a href="/dashboard/expenses/bill/edit" class="btn btn-table btn-edit">Edit</a>
			                    <button type="button" class="btn btn-table btn-delete">Delete</button>
			                </td>
			            </tr>
			            <tr>
			                <td>000002</td>
			                <td>Telaga Biru</td>
			                <td>RM3120</td>
			                <td>22/06/2019</td>
			                <td>21/07/2019</td>
			                <td class="text-success">Paid</td>
			                <td>
			                    <a href="#" class="btn btn-table btn-view">View</a>
			                    <a href="/dashboard/expenses/bill/edit" class="btn btn-table btn-edit">Edit</a>
			                    <button type="button" class="btn btn-table btn-delete">Delete</button>
			                </td>
			            </tr>
			            <tr>
			                <td>000003</td>
			                <td>Dutch Lady</td>
			                <td>RM2300</td>
			                <td>12/07/2019</td>
			                <td>11/08/2019</td>
			                <td class="text-warning">Unpaid</td>
			                <td>
			                    <a href="#" class="btn btn-table btn-view">View</a>
			                    <a href="/dashboard/expenses/bill/edit" class="btn btn-table btn-edit">Edit</a>
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
