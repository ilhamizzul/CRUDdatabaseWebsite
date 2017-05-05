<?php
	require_once "connect.php";
	
	//menghapus data
		if(isset($_GET['do']) && $_GET['do'] == 'hapus'){
		
		$query = 'DELETE FROM tb_berita WHERE ID ='.$_GET['id'];
		$result = mysqli_query($connect, $query);
		
		
		
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
		
		td{
			text-align:center;
			font-size:18px;
			padding-top:10px;
			padding-bottom:10px;
		}
		
		tr:first-child {border-bottom:5px solid #96989A}
		
		th{
			text-align:center;
			font-family:sans-serif;
			font-size:20px;
		}
		
		#option-button{
			background-color: #68C4AF;
            font-size: 22px;
            font-family: "Lato", sans-serif;
            top: 0px;
		}
		
		img {
			width:200px;
			height:50px;
		}
    </style>
	<link rel="icon" type="image/png" href="logoweb3.png">
	<title> Data Berita </title>
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
				<?php
					$query = 'SELECT * FROM tb_berita';
					$result = mysqli_query($connect, $query);
			
					if($result){ ?>	
					<table border="0" style="margin:0px auto;border-collapse:collapse;width:80%">
						<tr style="background-color:#D9DADC;">
							<th width="5%">ID</th>
							<th width="45%">Judul Berita</th>
							<th width="20%">Kategori</th>
							<th width="30%" colspan="2">Pilihan</th>
						</tr>
						<?php
							if(mysqli_num_rows($result)) {
					
							$no = 1;
							while($row = mysqli_fetch_assoc($result)){ 
						?>
						<tr style="background-color:#F2EAEA;">
							<b><td><?php echo $no; ?></td></b>
							<td><?php echo $row['judul']; ?></td>
							<td><?php echo $row['kategori']; ?></td>
							<td style="width:15%;" class="option-button">
								<a href="edit_news.php?id=<?php echo $row['tb_berita']; ?>">Edit</a>
							</td>
							<td style="width:15%;" class="option-button">
								<a  href="news_data.php?do=hapus&id=<?php echo $row['ID']; ?>">Hapus</a>
							</td>
						</tr>
					<?php	
					$no++;
					}
					
				}
				echo '</table>';
			}
		?>
            </div>
        </div>
    </div>
</body>
</html>