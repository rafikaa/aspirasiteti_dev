<?php include '../inc/head.php';?>

<body>

	<?php include '../inc/navbar.php';?>

	<!-- Button Navigasi Step -->
	<div class="container">
		<div class="col-lg-4 col-lg-offset-4 box-step">
			<div class="col-lg-6 step">
				<button class="btn btn-step btn-step-active" id="btn-step-1">1</button>
				<h5>Pilih Bidang</h5>
			</div>
			<div class="col-lg-6 step">
				<button class="btn btn-step" id="btn-step-2" onclick="nextStep(this)">2</button>
				<h5>Beri Aspirasi</h5>
			</div>
<!-- 			<div class="col-lg-4 step">
				<button class="btn btn-step">3</button>
				<h5>Kirim Aspirasi</h5>
			</div>	 -->		
		</div>
		<div class="col-lg-12 box-button">
			<!-- Pilih Bidang -->
			<div class="section-bidang">
				<h4 class="instruction">Sampaikan <b>aspirasi</b> berdasarkan bidang yang ada:</h4>
				<button class="btn btn-bidang" onclick="selectBidang(this)">
					<img src="<?php echo BASE_URL; ?>img/akademik.png" class="img-button-bidang"><br>
					Akademik
				</button>
				<button class="btn btn-bidang" onclick="selectBidang(this)">
					<img src="<?php echo BASE_URL; ?>img/dosen.png" class="img-button-bidang"><br>
					Dosen
				</button>
				<button class="btn btn-bidang" onclick="selectBidang(this)">
					<img src="<?php echo BASE_URL; ?>img/fasilitas.png" class="img-button-bidang"><br>
					Fasilitas
				</button>
				<button class="btn btn-bidang" onclick="selectBidang(this)">
					<img src="<?php echo BASE_URL; ?>img/kemahasiswaan.png" class="img-button-bidang"><br>
					Kemahasiswaan
				</button>
				<button class="btn btn-bidang" onclick="selectBidang(this)">
					<img src="<?php echo BASE_URL; ?>img/kmteti.png" class="img-button-bidang"><br>
					KMTETI
				</button>
			</div>
			<!-- Ketik Saran -->
			<div class="section-ketik" style="left:100%;">
				<form>
					<textarea placeholder="Ketikkan aspirasi Anda disini" resize="none"></textarea>
					<br>
				</form>
				<button type="submit" class="btn btn-info btn-lg btn-kirim-aspirasi" data-toggle="modal" data-target="#terimaKasihModal">
					Kirim
				</button>
			</div>			
		</div>
	</div>

	<?php include '../inc/terima-kasih.php';?>

	<!-- jQuery -->
    <script src="<?php echo BASE_URL; ?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo BASE_URL; ?>js/bootstrap.min.js"></script>

    <script>
	    function nextStep(event) {
	    	$(".section-ketik").removeAttr("style");
	    	$("#btn-step-2").addClass("btn-step-active");
	    	$("#btn-step-1").removeClass("btn-step-active");
	    	$("#btn-step-1").addClass("disabled");
	    }

	    function selectBidang(event) {
	    	$("#btn-step-2").trigger("click");
	    }
    </script>
</body>