<?php $this->load->view('components/head'); ?>
<base href="<?= base_url(); ?>">
<?php $this->load->view('components/navbar'); ?>

<!--sidebar-menu-->

<li><a href="home"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
<li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Manage Mahasiswa</span> <span
			class="icon icon-chevron-down pull-right" style="margin-right: 5px;"></span></a>
	<ul>
		<li><a href="mahasiswa">Data Mahasiswa</a></li>
		<li><a href="nilai">Nilai</a></li>
	</ul>
</li>
<li  class="submenu open"> <a href="#"><i class="icon icon-print"></i> <span>Laporan</span> <span
			class="icon icon-chevron-down pull-right" style="margin-right: 5px;"></span></a>
	<ul>
		<li class="active"><a href="laporan/mahasiswalaporan">Laporan Mahasiswa</a></li>
		<li><a href="laporan/nilailaporan">Laporan Nilai</a></li>
	</ul>
</li>
</ul>
</div>
<!--sidebar-menu-->


<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="home" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a
				href="mahasiswa" class="current">Mahasiswa</a> </div>
		<h1><span class="icon-briefcase"></span>
			Laporan mahasiswa <small>Eleaernig Polinema</small></h1>
	</div>
	<hr>
	<div class="container-fluid offset4">
		<form action="<?= $action ?>" method="GET" target="blank">
				<div class="control-group">
					<label class="control-label" for="prodi">Program Studi</label>
					<div class="controls">
						<select id="prodi" name="prodi" class="form-control">
							<option disabled selected>Pilih</option>
							<option value="TI">Teknik Informatika</option>
							<option value="SI">Sistem Informasi</option>
						</select>
						<?php echo form_error('prodi'); ?>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="semester">Semester</label>
					<div class="controls">
						<select id="semester" name="semester" class="form-control">
							<option disabled selected>Pilih</option>
							<option value="1">I</option>
							<option value="2">II</option>
							<option value="3">III</option>
							<option value="4">IV</option>
							<option value="5">V</option>
							<option value="6">VI</option>
							<option value="7">VII</option>
							<option value="8">VIII</option>
						</select>
						<?php echo form_error('semester'); ?>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="kelas">Kelas</label>
					<div class="controls">
						<select id="kelas" name="kelas" class="form-control">
							<option disabled selected>Pilih</option>
							<option value="P1">P1</option>
							<option value="P2">P2</option>
							<option value="M1">M1</option>
						</select>
						<?php echo form_error('kelas'); ?>
					</div>
				</div>
				<!-- <input type="hidden" name="prodi" id="prodi">
				<input type="hidden" name="semester" id="semester"> -->
				<input type="submit" id="submit" class="btn btn-success" value="Cetak Laporan">
			</div>
		</form>
	</div>
</div>

<?php $this->load->view('components/foot'); ?>
<script>
	$(document).ready(function () {
		$('#matakuliah').on('change', function () {
			alert('asd');
			prodi = $(this).find(':selected').data('prodi');
			semester = $(this).find(':selected').data('sem');
			console.log(prodi, semester);
			$("#prodi").val(prodi);
			$("#semester").val(semester);
		});
		// $("#sumbit").click(function(){
		// 	prodi = $( "#prodi option:selected" ).val();
		// 	semester = $( "#semester option:selected" ).val();
		// 	kelas = $( "#kelas option:selected" ).val();
		// 	if (prodi == "" | semester == "" | kelas == "") {
		// 		alert("Pilih dengan benar!");
		// 	} else {
		// 		alert("benar!");
		// 	}
		// });
	});
</script>
<?php $this->load->view('components/jsfoot'); ?>
</body>

</html>