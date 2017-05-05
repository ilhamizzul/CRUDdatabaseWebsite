<?php
	require_once "./connect.php";
	
	$judul="";
	$sub_judul="";
	$konten="";
	$kategori="";
	if(isset($_GET['do']) && $_GET['do'] == 'tambah')
	{
		//cek apakah judul dan konten terisi
		if((isset($_POST['judul']) != "") && (isset($_POST['konten']) != "") && (isset($_POST['kategori']) != "") && (isset($_POST['sub_judul']) != ""))
		{
			$judul = $_POST['judul'];
			$sub_judul = $_POST['sub_judul'];
			$konten = $_POST['konten'];
			$kategori = $_POST['kategori'];
			
			$query = 'INSERT INTO tb_berita (judul, konten, kategori, sub_judul) VALUES ("'.$judul.'","'.$konten.'","'.$kategori.'","'.$sub_judul.'")';
			$result = mysqli_query($connect, $query);
		}
	}
	


?>

<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            margin: 0px;
            border: 0px;
            padding: 0px;
            background-image: url("background.png");
            background-attachment: fixed;
        }
        .parallax {
            background-image: url("parallax.jpg");
            height: 500px;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .news-item-overlay {
            background-color: rgba(255, 255, 255, 0.5);
            padding-top: 15px;
			padding-bottom: 15px;
			height:600px;
			
        }
		.add-news-overlay{
			padding-left: 25px;
            padding-right: 25px;
            padding-top: 15px;
            padding-bottom: 15px;
			margin-left: 20%;
            margin-right: 20%;
            margin-top: 15px;
            margin-bottom: 15px;
			background-color: rgba(255, 255, 255, 0.5);
			
		}
        .news-item {
            margin-left: 5%;
            margin-right: 5%;
            margin-bottom: 15px;
            background-color: #FAFAFA;
            color: #333333;
            padding-left: 25px;
            padding-right: 25px;
            padding-top: 15px;
            padding-bottom: 15px;
            font-size: 36px;
        }
        .news-detail {
            font-size: 18px;
            margin-top: 5px;
            margin-bottom: 5px;
        }
        .header {
            background-color: #68C4AF;
            overflow: auto;
            font-size: 22px;
            font-family: "Lato", sans-serif;
            position: fixed;
            top: 0px;
            width: 100%;
            
        }
        div.header a {
            display: inline-block;
            transition: 0.3s;
            color: #D2D3D5;
            text-align: center;
            padding: 20px;
            text-decoration: none;
        }
        div.header a:hover {
            background-color: #B8DBD3;
            color: #E6E7E8;
            text-decoration: underline;
        }
		
		button {
			background-color: #68C4AF;
            font-size: 22px;
            font-family: "Lato", sans-serif;
            top: 0px;
			border-style:none;
		}
		
		.center {
			margin-left:30%;
		}
		
		#submit {
			background-color: #68C4AF;
            font-size: 22px;
            font-family: "Lato", sans-serif;
            top: 0px;
			border-style:none;
			color: #D2D3D5;
			padding: 10px;
		}
		
		#submit:hover {
			background-color: #B8DBD3;
            color: #E6E7E8;
            text-decoration: underline;
			transition: 0.3s;
			padding: 10px;
		}
		
		button a {
			display: inline-block;
            transition: 0.3s;
            color: #D2D3D5;
            text-align: center;
            padding: 10px;
            text-decoration: none;
		}
		
		button a:hover{
			background-color: #B8DBD3;
            color: #E6E7E8;
            text-decoration: underline;
		}
		
		#judul {
			width:350px;
			height:20px;
			border-style: none;
		}
		textarea{
			font-family:tahoma;
			border-style:none;
		}
		#kategori {
			margin-left:60px;
		}
		
		img {
			width:200px;
			height:50px;
		}
    </style>
	<link rel="icon" type="image/png" href="logoweb3.png">
	<title> Tambaha Berita </title>
</head>

<body>
    <div>
        <div class="header">
			<img src="logoweb2.jpg">
            <a href="index.php"> Beranda </a>
            <a href="news_data.php"> Data Berita </a>
			<a href="about.php"> Profil Pembuat </a>
            <a href="add_berita.php" > Tambah Berita </a>
			
        </div>
        <div class="content">
			<!-- TEMPAT TAMBAH BERITA -->
            <div class="news-item-overlay" style="margin-top:60px;">
				<div class="add-news-overlay">
					<form action="add_berita.php?do=tambah" method="post" enctype="multipart/form-data">
						<label for="judul">Judul</label><br>
						<input type="text" name="judul" id="judul"><br>
						
						<label for="sub_judul">Sub Judul</label><br>
						<input type="text" name="sub_judul" id="judul"><br>
						
						<label>Kategori</label><br>
								<input type="radio" name="kategori" value="kesehatan" id="kategori"> Kesehatan <br>
								<input type="radio" name="kategori" value="kecantikan" id="kategori"> Kecantikan <br>
								<input type="radio" name="kategori" value="makanan" id="kategori"> Makanan <br>
								<input type="radio" name="kategori" value="elektronik" id="kategori"> Elektronik <br>
								<input type="radio" name="kategori" value="pakaian" id="kategori"> Pakaian <br>
						
						<label> Isi Berita </label><br>
						<textarea class="input" id="isi" name="konten" name="isi" rows="12" cols="63"> </textarea><br><br>
						
						

							<center><input type="submit" class="submit" value="simpan" id="submit" name="submit" ></center>
						
					</form>
				</div>
            </div>
        </div>
    </div>
</body>
</html>