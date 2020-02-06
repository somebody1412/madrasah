@extends("layout.layout")
@section('head')

@endsection

@section('content')

<!-- Heading -->
<div class="card mb-4 wow fadeIn">

	<!--Card content-->
	<div class="card-body d-sm-flex justify-content-between">

		<h4 class="mb-2 mb-sm-0">
			<a href="{{env('APP_URL')}}" target="_blank">Home Page</a>
			<span>/</span>
			<span>Dashboard</span>
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
	<div class="col-md-9 mb-4">

		<!--Card-->
		<div class="card">

			<!--Card content-->
			<div class="card-body">

				<canvas id="myChart"></canvas>

			</div>

		</div>
		<!--/.Card-->

	</div>
	<!--Grid column-->

	<!--Grid column-->
	<div class="col-md-3 mb-4">

		<!--Card-->
		<div class="card">

			<!--Card content-->
			<div class="card-body">

				<!-- List group links -->
				<div class="list-group list-group-flush">
					<a class="list-group-item list-group-item-action waves-effect">Staff
						<span class="badge badge-success badge-pill pull-right">10
							<i class="fa fa-arrow-up ml-1"></i>
						</span>
					</a>
					<a class="list-group-item list-group-item-action waves-effect">Student
						<span class="badge badge-danger badge-pill pull-right">60
							<i class="fa fa-arrow-down ml-1"></i>
						</span>
					</a>
					<a class="list-group-item list-group-item-action waves-effect">Exam
						<span class="badge badge-primary badge-pill pull-right">5</span>
					</a>
				</div>
				<!-- List group links -->

			</div>

		</div>
		<!--/.Card-->

	</div>
	<!--Grid column-->

</div>
<!--Grid row-->


@stop
