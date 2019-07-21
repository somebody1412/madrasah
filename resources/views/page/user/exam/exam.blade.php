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
			<span>Time Left: <span id="time">Loading...</span></span>
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

				<div class="row mb-2">
					<div class="col-md-12">
						{!! Form::open(['method' => 'post', 'route' => ['user.exam.update',$number], 'name' => 'examform']) !!}
						<input type="hidden" name="id" value="{{$question->id}}">
						<input type="hidden" name="number" value="{{$number}}">
						<p>{{$number}}. {{$question->examRecord_Question->question}}</p>
						<ul>
							@foreach($question->examRecord_Question->question_answer as $value)
							<li><input type="radio" name="answer" value="{{$value->id}}" {{(($question->answer_id == $value->id)?'checked':'')}}>&nbsp;&nbsp;{{$value->option}}</li>
							@endforeach
						</ul>
						{!! Form::submit('Submit', ['class' => 'btn btn-success']) !!}
						{!! Form::close() !!}
					</div>
				</div>

				<div class="row p-3">
					@foreach($pages as $page => $value)
					<a class="pagination {{(($number == ++$page)?'active':'')}} {{(($value->answer_id)?'done':'')}}" href="/user/exam/test/{{$page}}">{{$page}}</a>
					@endforeach
				</div>
			</div>
		</div>
		<!--/.Card-->
	</div>
	<!--Grid column-->
</div>

@include('script.exam_duration')
@stop
