@extends("layout.layout")
@section('head')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="/js/page/dashboard.newquestion.js{{ config('app.link_version') }}"></script>
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
			<span>Add New Question</span>
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
						{!! Form::open(['method' => 'POST', 'route' => ['dashboard.questions.store']]) !!}
						<div class="form-group">
							<label class="control-label">Question:</label>
							<textarea class="form-control" name="question" placeholder="Enter Question here..."></textarea>
						</div>
						<div class="option-area">
							<div class="form-group">
								<label class="control-label">Option #1: *</label>
								<input class="form-control" type="text" name="option[]" value="">
							</div>
						</div>
						<div class="form-group">
							<i class="fa fa-plus-circle add-option" aria-hidden="true"></i>&nbsp;&nbsp;<span class="number-of-option">1</span>&nbsp;Option&nbsp;&nbsp;<i class="fa fa-minus-circle minus-option" aria-hidden="true"></i>
							<input type="hidden" id="optionanswer" value="1">
						</div>

						<div class="form-group">
							<label class="control-label">Answer : </label>
							<select class="form-control option-answer-area" name="answer">
								<option class="option-answer" value="1">Option #1</option>
							</select>
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
<script type="text/javascript">
	$(document).ready( function () {
		$('#question').DataTable();
	} );
</script>
@stop
