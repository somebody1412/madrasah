@extends("layout.layout")
@section('head')
<style type="text/css">
ul {
	list-style-type: none;
}
</style>
@endsection

@section('content')

<!-- Heading -->
<div class="card mb-4 wow fadeIn">

	<!--Card content-->
	<div class="card-body d-sm-flex justify-content-between">

		<h4 class="mb-2 mb-sm-0">
			<span>Exam Management</span>
			<span>/</span>
			<a href="/dashboard/questions">Exam Questions</a>
			<span>/</span>
			<span>View Question</span>
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

				<div class="row">
					<div class="col-md-12">
						<p>{{$question->question}}</p>
						<ul>
							@foreach($question->question_answer as $value)
							<li><input type="radio" >&nbsp;&nbsp;{{$value->option}} {!!($value->correct)?'<span style="color: red">(answer)</span>':''!!}</li>
							@endforeach
						</ul>
					</div>

				</div>
			</div>

		</div>
		<!--/.Card-->

	</div>
	<!--Grid column-->

</div>
<script type="text/javascript">
	$(document).ready( function () {
		$('#question').DataTable({
			"columns": [
			null,
			{ "width": "20%" }
			]
		});
	} );
</script>
@stop
