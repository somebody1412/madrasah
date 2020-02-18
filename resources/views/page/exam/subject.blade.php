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
            <span>Murid</span>
            <span>/</span>
            <span>View Result</span>
            
        </h4>

        <form class="d-flex justify-content-center">
            {{ Form::open(array('method' =>'GET')) }}
            <!-- Default input -->
            <!-- <input type="search" name="query" placeholder="Type your query" aria-label="Search" class="form-control">
            <button class="btn btn-primary" type="submit">
                <i class="fa fa-search"></i>
            </button> -->
            {!! Form::close() !!}
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
			@if(isset($user) && ($user->role_id == 1||$user->role_id == 1))
			<form action="/staff/pelajar/exam/update" method='POST'>
				@csrf
			@endif

				<div class="d-sm-flex justify-content-between mb-3">

					<h4 class="mb-2 mb-sm-0">
						@if(isset($user) && ($user->role_id == 1||$user->role_id == 1))
						<span>Edit Exam	</span>
						@endif
						<span>Exam	</span>
					</h4>

				</div>
				<input type="hidden" name="id" value="{{$student_id}}">
				<div class="row">
					<div class="col-12">
						<div class="form-group">
							@if(isset($student_id))
							<label class="control-label">Jenis Peperiksaan</label>
							@if(isset($user) && ($user->role_id == 1||$user->role_id == 1))
							<select name="exam" id="mySelect" onchange="getExam()" class="form-control">
								<option value=null>Please Select Exam</option>
								@foreach($exams as $exam)
								<option value="{{$exam->id}}" {{app('request')->input('exam') == $exam->id? 'selected':''}} >{{$exam->name}}</option>
								@endforeach
							</select>
							@endif
							@if(!isset($user))
							<select name="exam" id="mySelect" onchange="getExam()" class="form-control">
								<option value=null hidden>Please Select Exam</option>
								@foreach($exams as $exam)
								<option value="{{$exam->id}}" {{app('request')->input('exam') == $exam->id? 'selected':'hidden'}} >{{$exam->name}}</option>
								@endforeach
							</select>
							@endif
							@else
							<p>No Records</p>
							@endif
						</div>
					</div>
				</div>
				<div class="row">
					@foreach($records as $record)
					<div class="col-md-4">
						<div class="form-group">
							<label class="control-label">Name Subject</label>
							<input type="text" name="" class="form-control" value="{{$record->subject->name}}" disabled/>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label class="control-label">Mark</label>
							<input type="number" name="" class="form-control" value="{{$record->mark}}" disabled/>
						</div>
					</div>

					<div class="col-md-4">
						<div class="form-group">
							<label class="control-label">Gred</label>
							<input type="text" name="" class="form-control" value="Tidak Hadir" disabled/>
						</div>
					</div>
					@endforeach
				</div>
				@if(isset($user) && ($user->role_id == 1||$user->role_id == 1))
				<div class="row">
					<div class="col-12">
						{!! Form::submit('Save',['class'=>'btn btn-success']) !!}
						<button class="btn btn-light">Cancel</button>
					</div>
				</div>
				</form>
				@endif
			</div>


		</div>
		<!--/.Card-->

	</div>
	<!--Grid column-->
</div>
<!--Grid row-->
@stop
