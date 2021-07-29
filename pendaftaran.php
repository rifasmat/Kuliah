<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pendaftaran Sidang Proyek</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>


	<div class="header">
		<div class="logo">
			<img src="image/logo.png">
		</div>
		<div class="navbar">
			<nav>
				<ul>
					<li><a href="./">Home</a></li>
					<li><a href="project.php">Prosedur</a></li>
					<li><a href="pendaftaran.php">Pendaftaran</a></li>
					<li><a href="kontak.php">Kontak Kami</a></li>
				</ul>
			</nav>
		</div>

		<div class="daftar">
			<h1>Form Pendaftaran Sidang Proyek</h1>
		</div>

	</div>

	<div class="container">
		<div class="form">
			<form method="Post">
				
			     NIM           
			    <input type="text" name="nim">     <br><br>
			    Nama                    
			    <input type="text" name="nama">     <br><br>
				 <label>Proyek</label>
               <select name="proyek" value="proyek">
                    <option value="proyek1">Proyek1</option>
                    <option value="proyek2">Proyek2</option>
                    <option value="proyek3">Proyek3</option>
                    <option value="proyek4">Proyek4</option>
               </select><br><br>
              	<label>Judul Proyek</label><br><br>
               <textarea name="judul_proyek" id="" cols="50" rows="5"></textarea> <br>

               <input class="submit" type="submit" name="submit" value="SUBMIT"> 			
          </form>


		</div>
	</div>


	<?php 
	if(isset($_POST['nama'])){
		$nim=$_POST['nim'];
		$nama=$_POST['nama'];
		$proyek=$_POST['proyek'];
		error_reporting(0);
		$judul=$_POST['judul_proyek'];
		?>

		
		<div align="center" style="margin-top:10px;">
		<p>Terima kasih telah melakukan daftar sidang, silahkan tunggu info berikutnya untuk jadwal sidang! <br>
			Data yang anda masukan adalah sebagai berikut : <br><br></p>
		<p> Nim : <?php echo $nim; ?></p> <br>
		<p> Nama : <?php echo $nama; ?></p> <br>
		<p> Proyek : <?php echo $proyek; ?></p> <br>
		<p> Judul Proyek : <?php echo $judul; ?></p> <br>
		</div>
		<?php
	}
		?>
</body>
</html>