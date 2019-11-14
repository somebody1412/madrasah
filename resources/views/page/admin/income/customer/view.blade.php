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
						<span>Manage Customers	</span>
					</h4>

					<div class="d-flex justify-content-center">
						<!-- Default input -->
						<a href="/dashboard/income/customer/add" class="btn btn-primary mr-0">Add</a>

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
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<!-- Table head -->

					<!-- Table body -->
					<tbody>
						@foreach( $customers as $customer)
			            <tr>
			                <td>{{$customer->name}}</td>
							<td>{{$customer->email}}</td>
			                <td>{{$customer->phone}}</td>
			                <td class="text-center">
							{!! Form::open(['route' => 'dashboard.income.customer.delete', 'files' => true]) !!}
			                    <a href="#" class="btn btn-table btn-view">View</a>
			                    <a href="/dashboard/income/customer/edit/{{$customer->id}}" class="btn btn-table btn-edit">Edit</a>
								<button type="button" class="btn btn-table btn-delete">Delete</button>
                                <input type="hidden" name="id" value="{{$customer->id}}">
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
