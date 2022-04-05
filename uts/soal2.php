<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style>
			table {border: 1px solid}
			td {border: 1px solid;
				width: 50px;
				height: 50px;
			}
		</style>
	</head>
	<body>
		<form action="" method="POST">
			<label>Jumlah Baris: </label><br>
			<input type="text" name="baris"value="<?=isset($_POST["baris"]) ? $_POST["baris"] : ''?>"><br>
			<label>Jumlah Kolom: </label><br>
			<input type="text" name="kolom"value="<?=isset($_POST["kolom"]) ? $_POST["kolom"] : ''?>"><br>
			<button type="submit" name="submit">Submit</button>
		</form>
		<?php
			if(isset($_POST["submit"])){
				if(empty($_POST["baris"]) or empty($_POST["kolom"])){
					$eror = NULL;
					if(empty($_POST["kolom"]) and empty($_POST["baris"])){
						$error = "jumlah baris dan jumlah kolom";
					}  
					else if(empty($_POST["baris"])){
						$error = "jumlah baris";
					}
					else if(empty($_POST["kolom"])){
						$error = "jumlah kolom";
					}
					echo "<h3>Anda belum memasukkan $error</h3>";
				}
				else{
					$baris = $_POST["baris"];
					$kolom = $_POST["kolom"];
					$i = 1;
					echo "<table>";
					while($i <= $baris){
						$j = 1;
						echo "<tr>";
						while($j <= $kolom){
							echo "<td></td>";
							$j ++;
						}
						echo "<tr>";
						$i ++;
					}
				}
			}	
		?>
	</body>
</html>