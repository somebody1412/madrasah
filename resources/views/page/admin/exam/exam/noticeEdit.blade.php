@extends("layout.layout")
@section('head')
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
@endsection
@section('content')

<!-- Heading -->
<div class="card mb-4 wow fadeIn">

	<!--Card content-->
	<div class="card-body d-sm-flex justify-content-between">

		<h4 class="mb-2 mb-sm-0">
			<span>Exam Management</span>
			<span>/</span>
			<a href="/dashboard/exam/examOverview">Exam Notice</a>
			<span>/</span>
			<span>Edit Exam Notice</span>
		</h4>

		<form class="d-flex justify-content-center">

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

				<div class="row">
					<div class="col-md-12 text-center">
						{!! Form::open(['method' => 'POST', 'route' => ['dashboard.exam.notice.update']]) !!}
						<div class="form-group">
							<!-- <label class="control-label">Front Page Details</label> -->
							<textarea id="examDetail" class="examDetail" name=exam_description></textarea>
							<input type="hidden" id="old_value" value="{{$exam->exam_description}}">
						</div>
						{!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
						{!! Form::close() !!}
					</div>

				</div>



			</div>

		</div>
		<!--/.Card-->

	</div>
	<!--Grid column-->

</div>
<script>
$( document ).ready(function() {
	$('.examDetail').ckeditor();
	var editor = CKEDITOR.instances['examDetail'];
	editor.setData(document.getElementById('old_value').value);
});
</script>
@stop
