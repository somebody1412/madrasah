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
            <span>Penjaga</span>
            <span>/</span>
            <span>View Penjaga</span>
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
			<form action="/user/penjaga/update" method='POST'>
				@csrf


				<div class="d-sm-flex justify-content-between mb-3">

					<h4 class="mb-2 mb-sm-0">
						<span>Edit Parent</span>
					</h4>

				</div>
				<input type="hidden" name="id" value="{{$parent->id}}">
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Nama Penuh</label>
							<input type="text" name="nama_penuh" class="form-control" value="{{$parent->nama_penuh}}" />
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">No Pengenalan</label>
							<input type="text" name="nric" class="form-control" value="{{$parent->nric}}"/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">No Passport</label>
							<input type="text" name="passport" class="form-control" value="{{$parent->no_passport}}"/>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Kewarganegara</label>
							<input type="text" name="warganegara" class="form-control" value="{{$parent->warganegara}}"/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Phone</label>
							<input type="text" name="phone" class="form-control" value="{{$parent->phone}}"/>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Bil Tanggungan</label>
							<input type="number" name="tanggungan" class="form-control" value="{{$parent->bil_tanggungan}}"/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Pekerjaan</label>
							<input type="text" name="pekerjaan" class="form-control" value="{{$parent->pekerjaan}}"/>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Nama Majikan</label>
							<input type="text" name="nama_majikan" class="form-control" value="{{$parent->nama_majikan}}"/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<label class="control-label">Alamat Majikan</label>
							<textarea name='alamat' class="form-control" placeholder="Alamat" rows="3">{{$parent->alamat_majikan}}</textarea>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Pendapatan</label>
							<input type="number" name="pendapatan" class="form-control" value="{{$parent->pendapatan}}"/>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Tarikh Lahir</label>
							<input type="date" name="tarikh_lahir" class="form-control" value="{{$parent->tarikh_lahir}}"/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">No Sijil Lahir</label>
							<input type="number" name="sijil_lahir" class="form-control" value="{{$parent->sijil_lahir}}"/>
						</div>
					</div>

					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Hubungan Dengan Murid</label>
							<input type="text" name="hubungan" class="form-control" value="{{$parent->hubungan}}"/>
						</div>
					</div>
				</div> 
				<div class="row">
					<div class="col-12">
						{!! Form::submit('Save',['class'=>'btn btn-success']) !!}
						<a href="/user/penjaga" class="btn btn-light" >Cancel</a>
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
