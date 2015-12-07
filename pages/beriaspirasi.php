<?php include '../inc/head.php';?>

<body>

	<?php include '../inc/navbar.php';?>

	<!-- Button Navigasi Step -->
	<div class="container">
		<div class="col-lg-6 col-lg-offset-3 box-step">
			<div class="col-lg-4 step">
				<button class="btn btn-step btn-step-active">1</button>
				<h5>Pilih Bidang</h5>
			</div>
			<div class="col-lg-4 step">
				<button class="btn btn-step">2</button>
				<h5>Ketik Aspirasi</h5>
			</div>
			<div class="col-lg-4 step">
				<button class="btn btn-step">3</button>
				<h5>Kirim Aspirasi</h5>
			</div>			
		</div>
		<div class="col-lg-10 col-lg-offset-1 box-button">
			<!-- Pilih Bidang -->
			<h4 class="instruction">Sampaikan <b>aspirasi</b> berdasarkan bidang yang ada:</h4>
			<button class="btn btn-bidang">
				<img src="<?php echo BASE_URL; ?>img/akademik.png" class="img-button-bidang"><br>
				Akademik
			</button>
			<button class="btn btn-bidang">
				<img src="<?php echo BASE_URL; ?>img/dosen.png" class="img-button-bidang"><br>
				Dosen
			</button>
			<button class="btn btn-bidang">
				<img src="<?php echo BASE_URL; ?>img/fasilitas.png" class="img-button-bidang"><br>
				Fasilitas
			</button>
			<button class="btn btn-bidang">
				<img src="<?php echo BASE_URL; ?>img/kemahasiswaan.png" class="img-button-bidang"><br>
				Kemahasiswaan
			</button>
			<button class="btn btn-bidang">
				<img src="<?php echo BASE_URL; ?>img/kmteti.png" class="img-button-bidang"><br>
				KMTETI
			</button>
			<!-- Ketik Saran -->
			<form>
				<textarea placeholder="Ketikkan aspirasi Anda disini" resize="none"></textarea>
				<br>
			</form>
			<button type="submit" class="btn btn-info btn-kirim-aspirasi" data-toggle="modal" data-target="#terimaKasihModal">
				Kirim
			</button>
		</div>
	</div>

	<?php include '../inc/terima-kasih.php';?>

	<!-- jQuery -->
    <script src="<?php echo BASE_URL; ?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo BASE_URL; ?>js/bootstrap.min.js"></script>
</body>