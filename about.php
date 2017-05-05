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
            padding-top: -20px;
			padding-bottom: 15px;
			height:580px;
			border:5%;
			
			
			
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
            padding-top: -20px;
            width: 100%;
            
        }
		
		.header2 {
            background-color: #68C4AF;
            overflow: auto;
            font-size: 22px;
            font-family: "Lato", sans-serif;
			top: 0px;
            width: 100%;
			padding-bottom:30px;
			
			display: inline-block;
            
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
		
		.card {
	background-color:rgba (255, 255, 255, 0.5);
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 27.5%;
    border-radius: 5px;
	float:left;
	margin-left:1%;
	margin-right:2%;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

	img {
    border-radius: 5px 5px 0 0;
	}
.profile {
	width:100%;
	height:100%;
}
.container {
    padding: 2px 16px;
}
img {
			width:200px;
			height:50px;
		}
    </style>
	<link rel="icon" type="image/png" href="logoweb3.png">
	<title> Profil Pembuat </title>
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
            <div class="news-item-overlay">
				<center><h2 class="header2"> PROFIL KITA </h2></center>
				<div class="card" style="margin-left:5%">
						<img src="IMG_4784.jpg" alt="Avatar" class="profile">
					<div class="container">
						<h4><b>Ilham Izzul Hadyan</b></h4>
						<p>Web Designer</p>
					</div>
				</div>
				
				<div class="card">
						<img src="Untitled-1.jpg" alt="Avatar" class="profile">
					<div class="container">
						<h4><b>Hana Kamila</b></h4>
						<p>Back End</p>
					</div>
				</div>
				
				<div class="card">
						<img src="tomama.jpg" alt="Avatar" class="profile">
					<div class="container">
						<h4><b>Nabila Tamimi</b></h4>
						<p>Content</p>
					</div>
				</div>
				
            </div>
        </div>
    </div>
</body>
</html>