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
			<span>Revenues</span>
			<span>/</span>
			<span>Edit Revenue</span>
		</h4>

		<form class="d-flex justify-content-center">
			<!-- Default input -->
			<!-- <input type="search" placeholder="Type your query" aria-label="Search" class="form-control">
			<button class="btn btn-primary" type="submit">
			<i class="fa fa-search"></i>
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

					<h4 class="mb-2 mb-sm-0">
						<span>Edit Revenue	</span>
					</h4>

				</div>

				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Date</label>
							<input type="date" name="date" class="form-control" />
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Amount</label>
							<input type="text" name="amount" class="form-control" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Account</label>
							<select class="form-control" name="account">
								<option>Cash</option>
								<option>Maybank</option>
								<option>Add New Item +</option>
							</select>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Customer</label>
							<select class="form-control" name="customer">
								<option>Shawn Mendez</option>
								<option>Camilla Cabello</option>
								<option>Anne Marie</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<label class="control-label">Description</label>
							<textarea class="form-control" placeholder="Enter Description" rows="3"></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Category</label>
							<select class="form-control" name="category">
								<option>Fee Payment</option>
								<option>Bill Payment</option>
								<option>Add New Item +</option>
							</select>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Recurring</label>
							<select class="form-control" name="recurring">
								<option>No</option>
								<option>Daily</option>
								<option>Monthly</option>
								<option>Add New Item +</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Payment Method</label>
							<select class="form-control" name="payment">
								<option>Cash</option>
								<option>Bank Transfer</option>
								<option>Add New Item +</option>
							</select>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Reference</label>
							<input type="text" name="ref" class="form-control" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<label class="control-label">Attachment</label>
							<input type="file" class="form-control" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<a href="/dashboard/income/revenue" class="btn btn-success">Save</a>
						<button class="btn btn-light">Cancel</button>
					</div>
				</div>

			</div>

		</div>
		<!--/.Card-->

	</div>
	<!--Grid column-->
</div>
<!--Grid row-->
@stop
