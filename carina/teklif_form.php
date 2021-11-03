<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Teklif Formu</title>

	<?php include 'theme/src.php'; ?>

</head>
<body>

	<?php include 'theme/navbar.php'; ?>



	<div class="clearfix"></div>

	<div class="main-bg" style="background: url('assets/img/main-bg.jpg') no-repeat;">

		<div class="container">
			
			<div class="row justify-content-center">
				
				<div class="col-md-12 text-center">
					
					

					<h2>TEKLİF FORMU</h2>


					<div class="col-md-12 text-center">
						

						<ul> 

							<li class="list-inline-item">
								<a href="index.php" title="Anasayfa">Anasayfa</a>
							</li>

							<li class="list-inline-item"><a href="#"><i class="fas fa-caret-right"></i></a></li>

							<li class="list-inline-item">
								<a href="teklif_form.php" title="Teklif Formu">Teklif Formu</a>
							</li>

						</ul>

					</div>

				</div>

			</div>

		</div>

	</div>

	<!-- Main-bg End -->
	<div class="clearfix"></div>


	<div class="teklif-form">

		<div class="container">

			<form>
				<div class="row">

					<div class="col-xl-6">
						<div class="form-group">
							<label for="exampleInputEmail1">Toplantı Adı</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						</div>
					</div>
					<div class="col-xl-6">
						<div class="form-group">
							<label for="exampleInputEmail1">Toplantı Talep Edilen Bölüm</label>
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						</div>
					</div>
					<div class="col-xl-6">
						<div class="form-group">

							<label for="exampleInputEmail1">Toplantı Tarihi & Saati</label>
							<input type="date" class="form-control" required="">
						</div>
					</div>
					<div class="col-xl-6">
						<div class="form-group">
							<label for="exampleInputEmail1">Talep Edilen Şifre</label>
							<input type="password" class="form-control">
						</div>
					</div>
					<div class="col-xl-6">
						<div class="form-group">

							<label for="exampleInputEmail1">Toplantı Kayıt Edilsin Mi?</label>
							<select name="element[604]" class="form-control">
								<option>Seçiniz</option>
								<option>Evet</option>
								<option>Hayır</option>
							</select>

						</div>
					</div>
					<div class="col-xl-6">
						<div class="form-group">
							<label for="exampleInputEmail1">Toplantı Talep Eden Mail Adresi</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-xl-6">
						<div class="form-group">
							<label for="exampleInputEmail1">Toplantı Katılım Sayısı</label>
							<input type="text" class="form-control">
						</div>
					</div>
					<div class="col-xl-6">
						<div class="form-group">

							<label for="exampleInputEmail1">Toplantı Öncesi Test İsteniyor Mu?</label>
							<select name="element[604]" class="form-control">
								<option>Seçiniz</option>
								<option>Evet</option>
								<option>Hayır</option>
							</select>

						</div>
					</div>
					<div class="col-xl-6">
						<div class="form-group">
							<label for="exampleInputEmail1">Test Tarihi & Saati</label>
							<input type="date" class="form-control" required="">
						</div>
					</div>
					<div class="col-xl-6">
						<div class="form-group">
							<label for="exampleInputEmail1">Talep Edilen Görsel (Birden Çok Yükleme Yapabilirsiniz)</label>
							<input type="file" class="form-control-file" id="exampleFormControlFile1">
						</div>
					</div>
					<div class="col-xl-6">
						<div class="form-group">
							<label for="exampleInputEmail1">Toplantı Programı</label>
							<input type="file" class="form-control-file" id="exampleFormControlFile1">
						</div>
					</div>
					<div class="col-xl-12">
						<div class="form-group">
							<label for="exampleInputEmail1">Bizlere iletmek istediğiniz diğer notları yazabilirsiniz</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="7" placeholder="Mesajınız"></textarea>
						</div>
					</div>

					<button type="button" class="btn btn-primary mt-4">Gönder</button>
				
				</div>
			</form>

		</div>

	</div>

	<div class="clearifx"></div>




	<?php include 'theme/footer.php'; ?>



	<?php include 'theme/js.php'; ?>

</body>
</html>