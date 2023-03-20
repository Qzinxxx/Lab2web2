<!DOCTYPE html>
<html>
<head>
	<title>Program PHP</title>
</head>
<body>
	<h2>Form Input</h2>
	<form method="post" action="">
		<label for="nama">Nama:</label>
		<input type="text" id="nama" name="nama"><br><br>
		<label for="tgl_lahir">Tanggal Lahir:</label>
		<input type="date" id="tgl_lahir" name="tgl_lahir"><br><br>
		<label for="pekerjaan">Pekerjaan:</label>
		<select id="pekerjaan" name="pekerjaan">
			<option value="pns">PNS</option>
			<option value="swasta">Swasta</option>
			<option value="wirausaha">Wirausaha</option>
			<option value="crew">Crew</option>
		</select><br><br>
		<input type="submit" value="Submit" name="submit">
	</form>

	<?php
		if(isset($_POST['submit'])){
			$nama = $_POST['nama'];
			$tgl_lahir = $_POST['tgl_lahir'];
			$pekerjaan = $_POST['pekerjaan'];

			$today = date("Y-m-d");
			$umur = date_diff(date_create($tgl_lahir), date_create($today))->y;

			switch($pekerjaan){
				case "pns":
					$gaji = "Rp 5.000.000";
					break;
				case "swasta":
					$gaji = "Rp 5.000.000";
					break;
				case "wirausaha":
					$gaji = "Rp 8.000.000";
					break;
                case "crew":
                    $gaji = "Rp 3.300.000";
                    break;    
				default:
					$gaji = "Belum ditentukan";
					break;
			}

			echo "<h3>Hasilnya</h3>";
			echo "Nama: ".$nama."<br>";
			echo "Umur: ".$umur." tahun<br>";
			echo "Pekerjaan: ".$pekerjaan."<br>";
			echo "Gaji: ".$gaji;
		}
	?>
</body>
</html>
