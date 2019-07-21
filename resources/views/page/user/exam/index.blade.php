@extends("layout.layout")
@section('head')
@endsection

@section('content')

<!-- Heading -->
<div class="card mb-4 wow fadeIn">

	<!--Card content-->
	<div class="card-body d-sm-flex justify-content-between">

		<h4 class="mb-2 mb-sm-0">
			<span>Take Test</span>
		</h4>

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
					<div class="col-md-12 text-center">

							<h3 class="text-center">Exam Notice</h3>
							<hr  />
							{!!$exam->exam_description!!}
			                <a href="/user/exam/test/1" class="btn btn-primary"> START</a>
					</div>

				</div>



			</div>

		</div>
		<!--/.Card-->

	</div>
	<!--Grid column-->

</div>
@stop
