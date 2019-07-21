@extends("layout.layout")
@section('head')
@endsection

@section('content')

<!-- Heading -->
<div class="card mb-4 wow fadeIn">

	<!--Card content-->
	<div class="card-body d-sm-flex justify-content-between">

		<h4 class="mb-2 mb-sm-0">
			<span>Exam Management</span>
			<span>/</span>
			<span>Exam Notice</span>
		</h4>

		<form class="d-flex justify-content-center">
			<!-- Default input -->
			<!-- <input type="search" placeholder="Type your query" aria-label="Search" class="form-control"> -->
			<a href="/dashboard/exam/noticeEdit" class="btn btn-primary">
				<i class="fa fa-cogs mr-2"></i>Edit Notice
			</a>

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

				<div class="row w-100">
					<div class="col-md-12">

							<h3 class="text-center">Exam Notice</h3>
							<hr  />
							{!!$exam->exam_description!!}
					</div>

				</div>



			</div>

		</div>
		<!--/.Card-->

	</div>
	<!--Grid column-->

</div>

@stop
