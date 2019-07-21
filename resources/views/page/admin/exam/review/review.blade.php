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
			<a href="/dashboard/user">Exam Records</a>
			<span>/</span>
			<span>View Test</span>
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

				@foreach($exams as $exam)
				<div class="row">

					<div class="col-md-12">
						<p>{{$exam->examRecord_Question->question}}</p>
						<ul>
							@foreach($exam->examRecord_Question->question_answer as $value)
							<li><input type="radio" value="{{$value->id}}" {{(($exam->answer_id == $value->id)?"checked":"")}}>&nbsp;&nbsp;
								<span class="{{(($exam->correct && $exam->answer_id == $value->id)?"text-success":"")}} {{((!($exam->correct) && $exam->answer_id == $value->id)?"text-danger":"")}}" >{{$value->option}}</span> <span class="{{($value->correct)?'text-danger':''}}">{{($value->correct)?'(answer)':''}}</span></li>
								@endforeach
							</ul>
						</div>

					</div>
					@endforeach



				</div>

			</div>
			<!--/.Card-->

		</div>
		<!--Grid column-->

	</div>
	@stop
