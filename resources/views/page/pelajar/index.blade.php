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
			<span>Student</span>
			<span>/</span>
			<span>View Student</span>
		</h4>

		<form class="d-flex justify-content-center">
			<!-- Default input -->
			<!-- <input type="search" placeholder="Type your query" aria-label="Search" class="form-control">
			<button class="btn btn-primary" type="submit">
			<i class="fa fa-search"></i>
		</button> -->

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
						<span>View Student	</span>
					</h4>

				</div>
				@if(isset($student))
				<input type="hidden" name="id" value="{{$student->id}}"/>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label">Nama Penuh</label>
							<input type="text" name="nama_penuh" class="form-control" value="{{$student->nama_penuh}}" disabled/>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label">Tarikh Lahir</label>
							<input type="date" name="tarikh_lahir" class="form-control" value="{{$student->tarikh_lahir}}"disabled/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label">No Pengenalan</label>
							<input type="text" name="nric" class="form-control" value="{{$student->nric}}"disabled/>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label">No Sijil Lahir</label>
							<input type="text" name="sijil_lahir" class="form-control" value="{{$student->sijil_lahir}}"disabled/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label">No Passport</label>
							<input type="text" name="passport" class="form-control" value="{{$student->no_passport}}"disabled/>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label">Kewarganegaraan</label>
							<input type="text" name="warganegara" class="form-control" value="{{$student->warganegara}}"disabled/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label">Kaum / Keturunan</label>
							<input type="text" name="kaum" class="form-control" value="{{$student->kaum}}"disabled/>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label">Agama</label>
							<input type="text" name="agama" class="form-control" value="{{$student->agama}}"disabled/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label">Anak Ke Berapa:</label>
							<input type="number" name="anak_ke_berapa" class="form-control" value="{{$student->anak_ke_berapa}}"disabled/>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label">Status Murid</label>
							<input type="text" name="status_murid" class="form-control" placeholder="Anak Kandung" value="{{$student->status_murid}}"disabled/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label class="control-label">Alamat</label>
							<textarea name='alamat' class="form-control" placeholder="Alamat" rows="3" disabled>{{$student->alamat_tetap}}</textarea>
						</div>
					</div>
				</div>
				<!-- <div class="row">
					<div class="col-12">
						<div class="form-group">
							<label class="control-label">e-notes</label>
							<input type="file" name="file" class="form-control" disabled/>
						</div>
					</div>
				</div> -->
				<div class="row">
					
				</div>
				@else
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<h3>No Student Records</h3>
						</div>
					</div>
				</div>
				@endif
			</div>

		</div>
		<!--/.Card-->

	</div>
	<!--Grid column-->
</div>
<!--Grid row-->
@stop
