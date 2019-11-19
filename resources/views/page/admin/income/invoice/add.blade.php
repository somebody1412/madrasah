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
			<span>Invoices</span>
			<span>/</span>
			<span>Add Invoice</span>
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
			{!! Form::open(['route' => 'dashboard.income.invoice.store', 'files' => true]) !!}
				<div class="d-sm-flex justify-content-between mb-3">

					<h4 class="mb-2 mb-sm-0">
						<span>Add New Invoice	</span>
					</h4>

				</div>

				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Customer</label>
							<select class="form-control" name="customer">
								@foreach( $customers as $customer)
								<option value="{{$customer->id}}">{{$customer->name}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Currency</label>
							<select class="form-control" name="currency">
								<option value="MYR" selected="selected">Malaysian Ringgit (MYR)</option>
								<option value="SGD" >Singapore Dollar (SGD)</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Invoice Date</label>
							<input type="date" name="invoice_date" class="form-control" />
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Due Date</label>
							<input type="date" name="due_date" class="form-control" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Invoice Number</label>
							<input type="text" name="invoice_no" class="form-control" />
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Order Number</label>
							<input type="text" name="order_no" class="form-control" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<h5>Items</h5>
						<div class="row">
							<div class="col-6">
								<div class="form-group">
									<label class="control-label">Name</label>
									<select class="form-control" name="item">
										<option value="fee" >Fee Payment</option>
										<option value="bill">Bill Payment</option>
									</select>
								</div>
							</div>
							<div class="col-6">
								<div class="form-group row">
									<div class="col-2">
										<label class="control-label w-100 text-right">Quantity</label>
										<input type="text" name="quantity" placeholder="1" class="form-control"/>
									</div>
									<div class="col-4">
										<label class="control-label w-100 text-right">Price</label>
										<input type="number" min=0.00 name="price" placeholder="RM0.00" class="form-control"/>
									</div>
									<div class="col-2">
										<label class="control-label w-100 text-right">Tax</label>
										<input type="text" name="tax" placeholder="Insert Tax" class="form-control"/>
									</div>
									<div class="col-4">
										<label class="control-label w-100 text-right">Total</label>
										<input type="number" min=0.00 name="total" placeholder="0" class="form-control"/>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<label class="control-label">Notes</label>
							<textarea class="form-control" name="notes" placeholder="Enter Notes" rows="3"></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Category</label>
							<select class="form-control" name="category">
								<option value="fee">Fee Payment</option>
								<option value="bill">Bill Payment</option>
							</select>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Recurring</label>
							<select class="form-control" name="recurring">
								<option value="no">No</option>
								<option value="daily">Daily</option>
								<option value="monthly">Monthly</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<label class="control-label">Attachment</label>
							<input type="file" name="file" class="form-control" />
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
