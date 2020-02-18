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
            <span>Maklumat Penjaga</span>
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
			<!-- <form action="/user/penjaga/store" method='POST'> -->
				@csrf


				<div class="d-sm-flex justify-content-between mb-3">

					<h4 class="mb-2 mb-sm-0">
						<span>Maklumat Penjaga 1</span>
					</h4>

				</div>

				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Nama Penuh</label>
							<input type="text" name="nama_penuh" class="form-control" value="{{$parent1->nama_penuh}}" disabled/>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">No Pengenalan</label>
							<input type="text" name="nric" class="form-control" value="{{$parent1->nric}}" disabled/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">No Passport</label>
							<input type="text" name="passport" class="form-control" value="{{$parent1->no_passport}}" disabled/>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Kewarganegara</label>
							<input type="text" name="warganegara" class="form-control" value="{{$parent1->warganegara}}" disabled/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Phone</label>
							<input type="text" name="phone" class="form-control" value="{{$parent1->phone}}" disabled/>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Bil Tanggungan</label>
							<input type="number" name="tanggungan" class="form-control" value="{{$parent1->bil_tanggungan}}" disabled/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Pekerjaan</label>
							<input type="text" name="pekerjaan" class="form-control" value="{{$parent1->pekerjaan}}" disabled/>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Nama Majikan</label>
							<input type="text" name="nama_majikan" class="form-control" value="{{$parent1->nama_majikan}}" disabled/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<label class="control-label">Alamat Majikan</label>
							<textarea name='alamat' class="form-control" placeholder="Alamat" rows="3" disabled>{{$parent1->alamat_majikan}}</textarea>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Pendapatan</label>
							<input type="number" name="pendapatan" class="form-control" value="{{$parent1->pendapatan}}" disabled/>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Tarikh Lahir</label>
							<input type="date" name="tarikh_lahir" class="form-control" value="{{$parent1->tarikh_lahir}}" disabled/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">No Sijil Lahir</label>
							<input type="number" name="sijil_lahir" class="form-control" value="{{$parent1->sijil_lahir}}" disabled/>
						</div>
					</div>

					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Hubungan Dengan Murid</label>
							<input type="text" name="hubungan" class="form-control" value="{{$parent1->hubungan}}" disabled/>
						</div>
					</div>
				</div> 

				<div class="d-sm-flex justify-content-between mb-3">

					<h4 class="mb-2 mb-sm-0">
						<span>Maklumat Penjaga 1</span>
					</h4>

				</div>

				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Nama Penuh</label>
							<input type="text" name="nama_penuh" class="form-control" value="{{$parent2->nama_penuh}}" disabled/>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">No Pengenalan</label>
							<input type="text" name="nric" class="form-control" value="{{$parent2->nric}}" disabled/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">No Passport</label>
							<input type="text" name="passport" class="form-control" value="{{$parent2->no_passport}}" disabled/>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Kewarganegara</label>
							<input type="text" name="warganegara" class="form-control" value="{{$parent2->warganegara}}" disabled/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Phone</label>
							<input type="text" name="phone" class="form-control" value="{{$parent2->phone}}" disabled/>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Bil Tanggungan</label>
							<input type="number" name="tanggungan" class="form-control" value="{{$parent2->bil_tanggungan}}" disabled/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Pekerjaan</label>
							<input type="text" name="pekerjaan" class="form-control" value="{{$parent2->pekerjaan}}" disabled/>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Nama Majikan</label>
							<input type="text" name="nama_majikan" class="form-control" value="{{$parent2->nama_majikan}}" disabled/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<label class="control-label">Alamat Majikan</label>
							<textarea name='alamat' class="form-control" placeholder="Alamat" rows="3" disabled>{{$parent2->alamat_majikan}}</textarea>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Pendapatan</label>
							<input type="number" name="pendapatan" class="form-control" value="{{$parent2->pendapatan}}" disabled/>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Tarikh Lahir</label>
							<input type="date" name="tarikh_lahir" class="form-control" value="{{$parent2->tarikh_lahir}}" disabled/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">No Sijil Lahir</label>
							<input type="number" name="sijil_lahir" class="form-control" value="{{$parent2->sijil_lahir}}" disabled/>
						</div>
					</div>

					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Hubungan Dengan Murid</label>
							<input type="text" name="hubungan" class="form-control" value="{{$parent2->hubungan}}" disabled/>
						</div>
					</div>
				</div> 

				<!-- <div class="row">
					<div class="col-12">
						{!! Form::submit('Save',['class'=>'btn btn-success']) !!}
						<button class="btn btn-light">Cancel</button>
					</div>
				</div> -->
				<!-- </form> -->
			</div>

		</div>
		<!--/.Card-->

	</div>
	<!--Grid column-->
</div>
<!--Grid row-->
@stop
