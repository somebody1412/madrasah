@extends("layout.layout")
@section('head')
<link rel="stylesheet" type="text/css" href="/css/page/question.css">
@endsection

@section('content')

<!-- Heading -->
<div class="card mb-4 wow fadeIn">

	<!--Card content-->
	<div class="card-body d-sm-flex justify-content-between">

		<h4 class="mb-2 mb-sm-0">
			<span>Exam Management</span>
			<span>/</span>
			<span>Exam Questions</span>
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
						<span>Manage Questions</span>
					</h4>

					<div class="d-flex justify-content-center">
						<!-- Default input -->
						<a href="/dashboard/questions/create" class="btn btn-primary mr-0">Add</a>

					</div>

				</div>

				<!-- Table  -->
				<table class="table table-hover">

					<!-- Table head -->
					<thead class="blue-grey lighten-4">
						<tr>
							<th>Question</th>
							<th>Number Of Option</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<!-- Table head -->

					<!-- Table body -->
					<tbody>
						@forelse($questions as $value)
			            <tr>
			                <td>{{$value->question}}</td>
			                <td class="text-center">{{$value->question_answer->count()}}</td>
			                <td>
			                    {!! Form::open(['method' => 'POST', 'route' => ['dashboard.questions.delete']]) !!}
			                    <a href="/dashboard/questions/view/{{$value->id}}" class="btn btn-table btn-view">View</a>
			                    <a data-toggle="modal" data-target="#editQuestion" data-id="{{$value->id}}" class="btn btn-table btn-edit">Edit</a>
			                    <a href="/dashboard/answer/viewOption/{{$value->id}}" class="btn btn-table btn-view">View Answers</a>
			                    <input type="hidden" name="questionid" value="{{$value->id}}">
			                    <button type="button" class="btn btn-table btn-delete">Delete</button>
			                    {!! Form::close() !!}
			                </td>
			            </tr>
						@empty
						<tr>
							<td colspan="4" class="text-center">
								<p class="text-dark">
									No Data Available!
								</p>
							</td>

						</tr>
			            @endforelse
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
@include('modal.question')
@include('script.question')
@stop
