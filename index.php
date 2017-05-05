<?php
	require_once "connect.php";
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
            background-color: rgba(255, 255, 255, 0.6);
            padding-top: 15px;
			padding-bottom: 15px;
			
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
		
		.tombol {
			background-color: #68C4AF;
            font-size: 22px;
            font-family: "Lato", sans-serif;
            top: 0px;
			border-style:none;
			color: #D2D3D5;
			padding: 10px;
			width:10%;
		}
		
		.tombol:hover {
			background-color: #B8DBD3;
            color: #E6E7E8;
            text-decoration: underline;
			transition: 0.3s;
			padding: 10px;
		}
		
		img {
			width:200px;
			height:50px;
		}
    </style>
	<link rel="icon" type="image/png" href="logoweb3.png">
	<title>Selamat Datang</title>
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
        <div class="parallax"></div>
        <div class="content">
			<!-- TEMPAT TAMBAH BERITA -->
			<?php
			$query = 'SELECT * FROM tb_berita';
			$result = mysqli_query($connect, $query);
			
			if($result){ ?>
            <div class="news-item-overlay">
			<?php
				if(mysqli_num_rows($result)) {
					
					$no = 1;
					while($row = mysqli_fetch_assoc($result)){ ?>
				<a href="content.php" style="text-decoration:none;">
                <div class="news-item"><?php echo $row['judul']; ?>
						<div class="news-detail">
							<p><?php echo $row['sub_judul']; ?></p>
						</div>
                </div>
				
					<?php	
						$no++;
						}
					
					}
					echo '</a>';
				}
			?>
				
				
            </div>
        </div>
    </div>
</body>
</html>