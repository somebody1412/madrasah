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
			<span>Exam Records</span>
		</h4>

		<form class="d-flex justify-content-center">
			<!-- Default input -->
			<input type="search" placeholder="Type your query" aria-label="Search" class="form-control">
			<button class="btn btn-primary" type="submit">
				<i class="fa fa-search"></i>
			</button>

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

				<div class="d-sm-flex justify-content-between mb-3">

					<h4 class="mb-2 mb-sm-0">
						<span>Exam Records</span>
					</h4>

					<div class="d-flex justify-content-center">
						<!-- Default input -->
						<!-- <a href="/dashboard/exam/examOverviewEdit" class="btn btn-primary mr-0">Add</a> -->

					</div>

				</div>

				<!-- Table  -->
				<table class="table table-hover">

					<!-- Table head -->
					<thead class="blue-grey lighten-4">
						<tr>
							<th>IC</th>
							<th>Name</th>
							<th>Score</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<!-- Table head -->

					<!-- Table body -->
					<tbody>
						@foreach($users as $user)
						<tr>
							<td>{{$user->nric}}</td>
							<td>{{$user->name}}</td>
							<td>{{$user->correct}}/{{$user->question}}</td>
							<td>{{App\Models\UserExamStatus::getStatus($user->exam_status_id)}}</td>
							<td>
								@if($user->exam_status_id == 4)
									<a class="btn btn-table btn-edit" data-toggle="modal" data-user_id="{{$user->id}}">Retake</a>
								@endif
								&nbsp;<a href="/dashboard/user/review/{{$user->id}}" class="btn btn-table btn-view">View</a>
							</td>
						</tr>
						@endforeach
					</tbody>
					<!-- Table body -->

				</table>
				<!-- Table  -->

			</div>

		</div>
		<!--/.Card-->

	</div>
	<!--Grid column-->
</div>
<!--Grid row-->

@include('modal.retakeExam')
@stop
