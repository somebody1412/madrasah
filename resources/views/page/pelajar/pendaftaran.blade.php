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
			@if($status == "luar")
			<span>Pendaftaran Murid</span>
			@elseif($status == 'asrama')
			<span>Pendaftaran Murid Berasrama</span>
			@endif
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
			<form action="/public/pelajar/store" method='POST'>
				@csrf


				<div class="d-sm-flex justify-content-between mb-3">

					<h4 class="mb-2 mb-sm-0">
						<span>Pendaftaran Murid Baru	</span>
					</h4>

				</div>
				
				@if($status == "luar")
				<input type="hidden" name="status" value="luar"/>
				@elseif($status == 'asrama')
				<input type="hidden" name="status" value="asrama"/>
				@endif

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label">Nama Penuh</label>
							<input type="text" name="nama_penuh" class="form-control" />
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label">Tarikh Lahir</label>
							<input type="date" name="tarikh_lahir" class="form-control" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label">No Pengenalan</label>
							<input type="text" name="nric" class="form-control" />
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label">No Sijil Lahir</label>
							<input type="text" name="sijil_lahir" class="form-control" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label">No Passport</label>
							<input type="text" name="passport" class="form-control" />
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label">Kewarganegaraan</label>
							<input type="text" name="warganegara" class="form-control" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label">Kaum / Keturunan</label>
							<input type="text" name="kaum" class="form-control" />
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label">Agama</label>
							<input type="text" name="agama" class="form-control" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label">Anak Ke Berapa:</label>
							<input type="number" name="anak_ke_berapa" class="form-control" />
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label">Status Murid</label>
							<input type="text" name="status_murid" class="form-control" placeholder="Anak Kandung"/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<label class="control-label">Alamat</label>
							<textarea name='alamat' class="form-control" placeholder="Alamat" rows="3"></textarea>
						</div>
					</div>
				</div>
				
				<div class="d-sm-flex justify-content-between mb-3">

					<h4 class="mb-2 mb-sm-0">
						<span>Penjaga 1</span>
					</h4>

				</div>

				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Nama Penuh</label>
							<input type="text" name="nama_penuh_1" class="form-control" />
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">No Pengenalan</label>
							<input type="text" name="nric_1" class="form-control" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">No Passport</label>
							<input type="text" name="passport_1" class="form-control" />
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Kewarganegara</label>
							<input type="text" name="warganegara_1" class="form-control" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Phone</label>
							<input type="text" name="phone_1" class="form-control" />
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Bil Tanggungan</label>
							<input type="number" name="tanggungan_1" class="form-control" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Pekerjaan</label>
							<input type="text" name="pekerjaan_1" class="form-control" />
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Nama Majikan</label>
							<input type="text" name="nama_majikan_1" class="form-control" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<label class="control-label">Alamat Majikan</label>
							<textarea name='alamat_1' class="form-control" rows="3"></textarea>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Pendapatan</label>
							<input type="number" name="pendapatan_1" class="form-control" />
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Tarikh Lahir</label>
							<input type="date" name="tarikh_lahir_1" class="form-control" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">No Sijil Lahir</label>
							<input type="number" name="sijil_lahir_1" class="form-control" />
						</div>
					</div>

					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Hubungan Dengan Murid</label>
							<input type="text" name="hubungan_1" class="form-control" />
						</div>
					</div>
				</div> 

				<div class="d-sm-flex justify-content-between mb-3">

					<h4 class="mb-2 mb-sm-0">
						<span>Penjaga 2</span>
					</h4>

				</div>

				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Nama Penuh</label>
							<input type="text" name="nama_penuh_2" class="form-control" />
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">No Pengenalan</label>
							<input type="text" name="nric_2" class="form-control" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">No Passport</label>
							<input type="text" name="passport_2" class="form-control" />
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Kewarganegara</label>
							<input type="text" name="warganegara_2" class="form-control" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Phone</label>
							<input type="text" name="phone_2" class="form-control" />
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Bil Tanggungan</label>
							<input type="number" name="tanggungan_2" class="form-control" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Pekerjaan</label>
							<input type="text" name="pekerjaan_2" class="form-control" />
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Nama Majikan</label>
							<input type="text" name="nama_majikan_2" class="form-control" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<label class="control-label">Alamat Majikan</label>
							<textarea name='alamat_2' class="form-control" rows="3"></textarea>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Pendapatan</label>
							<input type="number" name="pendapatan_2" class="form-control" />
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Tarikh Lahir</label>
							<input type="date" name="tarikh_lahir_2" class="form-control" />
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<label class="control-label">No Sijil Lahir</label>
							<input type="number" name="sijil_lahir_2" class="form-control" />
						</div>
					</div>

					<div class="col-6">
						<div class="form-group">
							<label class="control-label">Hubungan Dengan Murid</label>
							<input type="text" name="hubungan_2" class="form-control" />
						</div>
					</div>
				</div> 

				@if($status == "luar")
				@elseif($status == 'asrama')
				<div class="d-sm-flex justify-content-between mb-3">

					<h4 class="mb-2 mb-sm-0">
						<span>Maklumat Kesihatan Murid</span>
					</h4>

				</div>
				
				<p>Saya dengan ini mengesahkan bahawa saya membenarkan anak jagaan saya tinggal di asrama. Pihak sekolah juga berhak mengambil apa-apa tindakan terhadap anak jagaan saya sekiranya dia melakukan kesalahan disiplin di sekolah</p>

				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<input type="checkbox" name="kulit_berjangkit"/>
							<label> Penyakit Kulit Berjangkit</label>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<input type="checkbox" name="semput" />
							<label> Semput / Lelah</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
							<input type="checkbox" name="sawan" />
							<label> Sawan</label>
						</div>
					</div>
					<div class="col-6">
						<div class="form-group">
							<input type="checkbox" name="lemah_jantung" />
							<label> Lemah Jantung</label>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<label class="control-label">Penyakit Lain (jika ada)</label>
							<textarea name='lain' class="form-control" rows="3"></textarea>
						</div>
					</div>
				</div>
				@endif
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
