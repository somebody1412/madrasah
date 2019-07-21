@extends("layout.layout")
@section('head')

<link rel="stylesheet" href="/css/page/dashboard.editquestion.css{{ config('app.link_version') }}">
<script type="text/javascript" src="/js/page/dashboard.editquestion.js{{ config('app.link_version') }}"></script>

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
			<span>Edit Question</span>
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
						{!! Form::open(['method' => 'POST', 'route' => ['dashboard.questions.update']]) !!}
						<input type="hidden" name="id" value="{{$id}}">
						<div class="form-group">
							<label class="control-label">Question:</label>
							<textarea class="form-control" name="question" placeholder="Enter Question here...">{{$question->question}}</textarea>
						</div>
						{!! Form::submit('Save', ['class' => 'btn btn-success ml-0']) !!}
						{!! Form::close() !!}
					</div>

				</div>



			</div>

		</div>
		<!--/.Card-->

	</div>
	<!--Grid column-->

</div>
@stop
