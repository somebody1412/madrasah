@extends("layout.layout")
@section('head')
@endsection

@section('content')
<!-- Heading -->
<div class="card mb-4 wow fadeIn">

	<!--Card content-->
	<div class="card-body d-sm-flex justify-content-between">

		<h4 class="mb-2 mb-sm-0">
			<span>Exam Summary</span>
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
						<h3 class="mb-3">Result: {{$total}}/{{$exam->total_question}}</h3>
						<h3 class="mb-3">Pass Marks: {{$exam->pass_question}}/{{$exam->total_question}}</h3>
						<h3 class="mb-3">Status: {!!(($total < $exam->pass_question)?'<span class="text-danger">FAILED</span>':'<span class="text-success">PASSED</span>')!!}</h3>
						<a href="/user/exam/" class="btn btn-primary"> Home</a>
					</div>

				</div>



			</div>

		</div>
		<!--/.Card-->

	</div>
	<!--Grid column-->

</div>

@stop
