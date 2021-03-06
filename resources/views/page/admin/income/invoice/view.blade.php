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
		</h4>

		<form class="d-flex justify-content-center">
			{{ Form::open(array('method' =>'GET')) }}
            <!-- Default input -->
            <input type="search" name="query" placeholder="Type your query" aria-label="Search" class="form-control">
            <button class="btn btn-primary" type="submit">
                <i class="fa fa-search"></i>
            </button>
            {!! Form::close() !!}

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
						<span>Manage Invoices	</span>
					</h4>

					<div class="d-flex justify-content-center">
						<!-- Default input -->
						<a href="/dashboard/income/invoice/add" class="btn btn-primary mr-0">Add</a>

					</div>

				</div>

				<!-- Table  -->
				<table class="table table-hover">

					<!-- Table head -->
					<thead class="blue-grey lighten-4">
						<tr>
							<th>Number</th>
							<th>Customer</th>
							<th>Amount</th>
							<th>Invoice Date</th>
							<th>Due Date</th>
							<th>Status</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<!-- Table head -->

					<!-- Table body -->
					<tbody>
						@foreach($invoices as $invoice)
			            <tr>
			                <td>{{$invoice->id}}</td>
			                <td>{{$invoice->customer->name}}</td>
			                <td>{{$invoice->total}}</td>
			                <td>{{$invoice->invoice_date}}</td>
			                <td>{{$invoice->due_date}}</td>
			                <td class="text-danger">Overdue</td>
			                <td class="text-center">
			                    <a href="#" class="btn btn-table btn-view">View</a>
			                    <a href="/dashboard/income/invoice/edit/{{$invoice->id}}" class="btn btn-table btn-edit">Edit</a>
			                    <button type="button" class="btn btn-table btn-delete">Delete</button>
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
