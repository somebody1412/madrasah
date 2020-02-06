@extends("layout.layout")
@section('head')
<link rel="stylesheet" type="text/css" href="/css/page/question.css">
<script>
function getExam() {
	var exam;
  	exam = document.getElementById("mySelect").value;
	  insertParam('exam',exam)
}
function insertParam(key, value)
{
    key = encodeURI(key); value = encodeURI(value);

    var kvp = document.location.search.substr(1).split('&');

    var i=kvp.length; var x; while(i--) 
    {
        x = kvp[i].split('=');

        if (x[0]==key)
        {
            x[1] = value;
            kvp[i] = x.join('=');
            break;
        }
    }

    if(i<0) {kvp[kvp.length] = [key,value].join('=');}

    //this will reload the page, it's likely better to store this until finished
    document.location.search = kvp.join('&'); 
}
</script>
@endsection

@section('content')

<!-- Heading -->
<div class="card mb-4 wow fadeIn">

	<!--Card content-->
	<div class="card-body d-sm-flex justify-content-between">

		<h4 class="mb-2 mb-sm-0">
            <span>Murid</span>
            <span>/</span>
            <span>View Exam</span>
        </h4>

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
			<form action="/staff/pelajar/exam/store/" method='POST'>
				@csrf


				<div class="d-sm-flex justify-content-between mb-3">

					<h4 class="mb-2 mb-sm-0">
						<span>Add New Exam	</span>
					</h4>

				</div>
				<input type="hidden" name="id" value="{{$student_id}}">
				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<label class="control-label">Jenis Peperiksaan</label>
							<select name="exam" id="mySelect" onchange="getExam()" class="form-control">
								<option value=null>Please Select Exam</option>
								@foreach($exams as $exam)
								<option value="{{$exam->id}}" {{app('request')->input('exam') == $exam->id? 'selected':''}} >{{$exam->name}}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					@foreach($subjects as $subject)
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Name Subject</label>
							<input type="text" name="subject[{{$subject->id}}]" class="form-control"value="{{$subject->name}}" />
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Mark</label>
							<input type="number" name="mark[{{$subject->id}}]" class="form-control" />
						</div>
					</div>
					@endforeach
				</div>
				
				<div class="row">
					<div class="col-12">
						{!! Form::submit('Save',['class'=>'btn btn-success']) !!}
						<button class="btn btn-light">Cancel</button>
					</div>
				</div>
				</form>
			</div>

		</div>
		<!--/.Card-->

	</div>
	<!--Grid column-->
</div>
<!--Grid row-->
@stop
