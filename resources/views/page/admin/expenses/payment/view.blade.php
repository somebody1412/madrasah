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
			<span>Payments</span>
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
						<span>Manage Payments	</span>
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
							<th>Date</th>
							<th>Amount</th>
							<th>Vendor</th>
							<th>Category</th>
							<th>Account</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<!-- Table head -->

					<!-- Table body -->
					<tbody>
						<tr>
							<td>21/07/2019</td>
							<td>RM3500</td>
							<td>WebSoho</td>
							<td>Tuition Fees</td>
							<td>5129874154</td>
							<td>
								<a href="#" class="btn btn-table btn-view">View</a>
								<a data-toggle="modal" data-target="" data-id="" class="btn btn-table btn-edit">Edit</a>
								<button type="button" class="btn btn-table btn-delete">Delete</button>
							</td>
						</tr>
						<tr>
							<td>21/07/2019</td>
							<td>RM3120</td>
							<td>Telaga Biru</td>
							<td>Tuition Fees</td>
							<td>68746354135</td>
							<td>
								<a href="#" class="btn btn-table btn-view">View</a>
								<a data-toggle="modal" data-target="" data-id="" class="btn btn-table btn-edit">Edit</a>
								<button type="button" class="btn btn-table btn-delete">Delete</button>
							</td>
						</tr>
						<tr>
							<td>21/07/2019</td>
							<td>RM2300</td>
							<td>Dutch Lady</td>
							<td>Tuition Fees</td>
							<td>98616546151</td>
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
