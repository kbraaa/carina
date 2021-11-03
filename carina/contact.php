<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>İletişim</title>

	<?php include 'theme/src.php'; ?>

</head>
<body>

	<?php include 'theme/navbar.php'; ?>



	<div class="clearfix"></div>

	<div class="main-bg" style="background: url('assets/img/main-bg.jpg') no-repeat;">

		<div class="container">
			
			<div class="row justify-content-center">
				
				<div class="col-md-12 text-center">
					
					

					<h2>İLETİŞİM</h2>


					<div class="col-md-12 text-center">
						

						<ul> 

							<li class="list-inline-item">
								<a href="index.php" title="Anasayfa">Anasayfa</a>
							</li>

							<li class="list-inline-item"><a href="#"><i class="fas fa-caret-right"></i></a></li>

							<li class="list-inline-item">
								<a href="contact.php" title="İletişim">İletişim</a>
							</li>

						</ul>

					</div>

				</div>

			</div>

		</div>

	</div>

	<!-- Main-bg End -->


	<div class="contact">
		
		<div class="container">
			
			<div class="row">
				
				<div class="contact-title mx-auto text-center col-md-8">
					<h2>Aylık Proje Ücreti</h2>
					<h2>Fiyat Planları Genel sorular için ön büro destek ekibimizle iletişime geçebilirsiniz.</h2>
				</div>
				<div class="clearfix"></div>

				<div class="contact-card row mt-5 mb-5">
					
					<div class="col-sm-4">
						<div class="card">
							<div class="card-body">
								<img src="assets/img/contact-3.png" class="img-fluid">
								<h5 class="card-title">Address</h5>
								<p class="card-text">125, Suitland Street, USA</p>
							</div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="card">
							<div class="card-body">
								<img src="assets/img/contact-1.png" class="img-fluid">
								<h5 class="card-title">Phone</h5>
								<p class="card-text">0 212 909 81 15</p>
							</div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="card">
							<div class="card-body">
								<img src="assets/img/contact-2.png" class="img-fluid">
								<h5 class="card-title">E-Mail</h5>
								<p class="card-text">info@carinaevent.com</p>
							</div>
						</div>
					</div>

				</div><!-- Contact Card End -->

				<div class="clearfix"></div>

				<div class="contact-map mt-5 mb-5">
					
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24084.009218396484!2d28.936111888032542!3d41.01429055698378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab989e5fae399%3A0x34f0847eed8b22e0!2zRmF0aWgvxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1620491397117!5m2!1str!2str" allowfullscreen="" loading="lazy" class="map-frame"></iframe>

				</div>

			</div>

			<div class="clearfix"></div>

			<div class="form-title mt-5 row">
				
				<div class="col-md-6 p-0">
					<h2>Mesajınızı Gönderiniz</h2>
				</div>

				<div class="col-md-6 p-0">
					<p>Amacımız, şirketlerimizin sınıfının en iyisine ulaşmasına 
					veya sürdürmesine yardımcı olmaktır.</p>
				</div>	

			</div>


			<div class="contact-form mt-5">
				
				<form>

					<div class="row">
						<div class="form-group col-md-6">
							<label for="exampleInputEmail1">İsim Soyisim</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group col-md-6">
							<label for="exampleInputEmail1">E-mail adres</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						</div>
					</div>

					<div class="row">
						<div class="form-group col-md-6">
							<label for="exampleInputEmail1">Telefon Numaranız</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group col-md-6">
							<label for="exampleInputEmail1">Web Site</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						</div>
					</div>

					<div class="row">
						<div class="form-group col-md-12">
							<label for="exampleInputEmail1">Mesajınız</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
						</div>
					</div>

					<div class="row">
						<button type="button" class="btn btn-primary mx-auto mt-4">Gönder</button>
					</div>

				</form>

			</div>



		</div>

	</div>





	<div class="clearfix"></div>


	<?php include 'theme/footer.php'; ?>










































	<?php include 'theme/js.php'; ?>

</body>
</html>