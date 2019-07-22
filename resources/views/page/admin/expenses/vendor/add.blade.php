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
			<span>Vendor</span>
			<span>/</span>
			<span>Add Vendor</span>
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
						<span>Add New Vendor	</span>
					</h4>

				</div>

				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Name</label>
							<input type="text" name="name" class="form-control" />
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Email</label>
							<input type="email" name="amount" class="form-control" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Tax Number</label>
							<input type="text" name="amount" class="form-control" />
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Currency</label>
							<select class="form-control" name="customer">
								<option>Malaysian Ringgit</option>
								<option>Singapore Dollar</option>
								<option>Add new currency +</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Phone</label>
							<input type="text" name="name" class="form-control" />
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Website</label>
							<input type="text" name="amount" class="form-control" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<label class="control-label">Address</label>
							<textarea class="form-control" placeholder="Enter Address" rows="3"></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<a href="/dashboard/expenses/vendor" class="btn btn-success">Save</a>
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
