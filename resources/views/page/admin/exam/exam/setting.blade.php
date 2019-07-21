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
			<span>Exam Settings</span>
		</h4>

	</div>

</div>
<!-- Heading -->

<!--Grid row-->
<div class="row wow fadeIn">

	<!--Grid column-->
	<div class="col-md-6 mb-4">

		<!--Card-->
		<div class="card h-100">

			<div class="card-header">Default Preferences</div>

			<!--Card content-->
			<div class="card-body">

				<div class="row w-100">
					<div class="col-md-12">

						<h5>Total Questions in Bank </h5>
						<h2 class="float-right font-weight-lighter">{{$question}} questions</h2><br />
						<hr  />
						<h5>Total Questions for Exam</h5>
						<h2 class="float-right font-weight-lighter">{{$exam->total_question}} questions</h2><br />
						<hr  />
						<h5>Minimum Correct Answer to Pass/Total Question</h5>
						<h2 class="float-right font-weight-lighter">{{$exam->pass_question}}/{{$exam->total_question}}</h2><br />
						<hr  />
						<h5>Exam Duration (HH:MM:SS)</h5>
						<h2 class="float-right font-weight-lighter">{{$hours}} : {{$minutes}} : {{$seconds}}</h2><br />
						<hr  />
					</div>

				</div>



			</div>

		</div>
		<!--/.Card-->

	</div>
	<!--Grid column-->

	<!--Grid column-->
	<div class="col-md-6 mb-4">

		<!--Card-->
		<div class="card h-100">
			<div class="card-header"><i class="fa fa-cogs mr-2"></i>Update Preferences</div>

			<!--Card content-->
			<div class="card-body">
				<div class="row w-100">
					<div class="col-md-12">
						{!! Form::open(['method' => 'POST', 'route' => ['dashboard.exam.setting.update']]) !!}
						<div class="form-group">
							<label class="control-label">Total questions</label>
							<input class="form-control" type="number" name="exam" value="{{$exam->total_question}}">
						</div>
						<div class="form-group mb-3">
							<label class="control-label">Minimum correct answer to pass | Total Questions: {{$question}}</label>
							<input class="form-control" type="number" name="question" value="{{$exam->pass_question}}">
						</div>
						<div class="form-group mb-5 row">
							<div class="col-md-12">
							<label class="control-label">Exam Duration</label>
							</div>
							<div class="col-md-3">
								<input class="form-control" type="number" name="duration_hour" value="{{$hours}}">
							</div>
							<div class="col-md-1">
								<h3 class="time-divider">HH</h3>
							</div>
							<div class="col-md-3">
								<input class="form-control" type="number" name="duration_minute" value="{{$minutes}}">
							</div>
							<div class="col-md-1">
								<h3 class="time-divider">MM</h3>
							</div>
							<div class="col-md-3">
								<input class="form-control" type="number" name="duration_second" value="{{$seconds}}">
							</div>
							<div class="col-md-1">
								<h3 class="time-divider">SS</h3>
							</div>
						</div>
						{!! Form::submit('Save changes', ['class' => 'btn btn-success ml-0']) !!}
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
		<!--/.Card-->

	</div>
	<!--Grid column-->

</div>
<!--Grid row-->

@include('modal.settingExam')
@stop
