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
			<span>Customer</span>
			<span>/</span>
			<span>Edit Customer</span>
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
			{!! Form::open(['route' => 'dashboard.income.customer.update', 'files' => true]) !!}
				<div class="d-sm-flex justify-content-between mb-3">

					<h4 class="mb-2 mb-sm-0">
						<span>Edit Customer	</span>
					</h4>

				</div>
				<input type="hidden" name="id" value="{{$customer->id}}">
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Name</label>
							<input type="text" name="name" value="{{$customer->name}}" class="form-control" />
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Email</label>
							<input type="email" name="email" value="{{$customer->email}}" class="form-control" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Tax Number</label>
							<input type="text" name="tax_no" value="{{$customer->tax_no}}" class="form-control" />
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Currency</label>
							<select class="form-control" name="currency">
								<option value="MYR" selected="selected">Malaysian Ringgit</option>
								<option value="SGD">Singapore Dollar</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Phone</label>
							<input type="text" name="phone" value="{{$customer->phone}}" class="form-control" />
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Website</label>
							<input type="text" name="website" value="{{$customer->website}}" class="form-control" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<label class="control-label">Address</label>
							<textarea class="form-control" name="address" placeholder="Enter Address" rows="3">{{$customer->address}}</textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
					{!! Form::submit('Save',['class'=>'btn btn-success']) !!}
						<button class="btn btn-light">Cancel</button>
					</div>
				</div>
				{!! Form::close() !!}
			</div>

		</div>
		<!--/.Card-->

	</div>
	<!--Grid column-->
</div>
<!--Grid row-->
@stop
