<?php $this->load->view('front/layout/header'); ?>


<style type="text/css">
	body {
		background-image: linear-gradient(to right top, #134aa0, #68459e, #983d93, #bb387f, #d23f66);
		overflow-y: scroll;
	}


</style>


<section class="pass-section padtb-60">
	<div class="container">
		<div class="ticket created-by-anniedotexe">
		<div class="row">
			<div class="col-lg-8">
				<div class="row">
					<div class="col-lg-6">
						<div class="image-pass">
							<p class="admit-one">
								<span>ADMIT ONE</span>
								<span>ADMIT ONE</span>
								<span>ADMIT ONE</span>
							</p>
						</div>
					</div>
					<div class="col-lg-6 t-center">
						<div class="ticket-info">
							<div class="w-100">
								<h5>PASS</h5>
								<p class="date-pass w-100">
									<!-- <span>TUESDAY</span> -->
									<span class="june-29">Jan 20th-22nd</span>
									<span class="june-29">2024</span>
								</p>
							</div>
							<div class="show-name">
								<h1>केतकी माटेगावकर आणि अनिरुद्ध जोशी (स्वरोत्सव पर्व उत्सवाचा), संक्रांती Queen, महानाट्य स्वामी (अशक्य ही शक्य करतील स्वामी)</h1>
								<!-- <h2></h2> -->
							</div>
							<div>
								<span> <i class="fas fa-map-marker-alt pink-color"></i> Open Ground, Near Patel Celebration Lawn, Main Road Besa, Nagpur</span>
							</div>
							<div class="time-pass">
								<!-- <p>4:00 PM <span>TO</span> 07:00 PM</p> -->
								<!-- <p>DOORS <span>@</span> 7:00 PM</p> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 t-center">
				<div class="right-info-container text-center">

					<div class="show-name">
						<h5 class="user-pass-name"><?php echo strtoupper($pass->name); ?></h5>
						<!-- <h1 class="mb-0">Timing</h1> -->
					</div>
					<!-- <div class="time">
						<p>04:00 PM <span>TO</span> 07:00 PM</p>
						
					</div> -->
					<div class="barcode">
						<img src="<?php echo base_url() ?><?php echo $pass->qrImage; ?>" alt="QR code">
					</div>
					<p class="ticket-number mt-2">
						KASM<?php echo date('Y'); ?><?php echo $pass->id; ?>
					</p>
				</div>
			</div>
		</div>
		</div>
	</div>
</section>

<div style="visibility: hidden;"><?php $this->load->view('front/layout/footer'); ?></div>