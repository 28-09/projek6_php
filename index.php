
<html>
<head>
	<title>tugas praktikum</title>
	<style>
		body{
	background-color: #943c71;
	font-family: sans-serif;
}
 
.kalkulator{
	width: 335px;
	background: #2F495A;
	margin: 100px auto;
	padding: 10px 20px 50px 20px;
	border-radius: 5px;
	box-shadow: 0px 10px 20px 0px #D1D1D1;
}
 
.bil{  
	width: 300px;
	margin: 5px;
	border: none;
	font-size: 16pt;
	border-radius: 5px;
	padding: 10px;	
}
 
.opt{
	font-size: 16pt;
	border: none;
	width: 215px;
	margin: 5px;
	border-radius: 5px;
	padding: 10px;
}
 
.tombol{
	background: #EC5159;
	border-top: none;
	border-right: none;
	border-left: none;
	border-radius: 5px;
	padding: 10px 20px;
	color: #eee;
	font-size: 15pt;
	border-bottom:4px solid #BF3D3D;
}
 
.brand{
	color: #eee;
	font-size: 11pt;
	float: right;
	text-decoration: none;
	margin: 12px;
}
 
.judul{
	text-align: center;
	color: #eee;
	font-weight: normal;
}




	</style>
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil1 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		$hasil = match ($operasi) {
		  'tambah' => $bil1+$bil1,
		  'kurang' => $bil1-$bil2,
		  'kali' => $bil1*$bil2,
		  'bagi' => $bil1/$bil2,
		  'modulus' => $bil1%$bil2,
		  'akar pangkat' => sqrt ($bil1),
		};
	}
	?>
	<div class="kalkulator">
		<h2 class="judul">KALKULATOR</h2>
	
		<form method="post" action="index.php">			
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
			<select class="opt" name="operasi">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">/</option>
				<option value="modulus">%</option>
				<option value="akar pangkat">V</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">											
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>			
	</div>
</body>
</html>



