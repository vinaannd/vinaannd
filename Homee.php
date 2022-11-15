<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
	/* CSS Resets */
* {
	padding:0;
	margin:0;
}
body{
    background-color: white;
}
img {
	max-width: 100%;
	height: auto;
}
button{
    background-color:none;
}
a{
    text-decoration: none;
}
ul,ol {
	list-style-type: none;
}
/* end css reset */

.container {	/* posisikan letak slidernya */
	margin:1% auto;
	position: relative;
	overflow: hidden;
}
.container, ul.slide li img{
	width:1200px; /* Sesuaikan sendiri */
	height: 300px;  /* Sesuaikan sendiri */
}


ul.slide {
	position: absolute;
	display: block;
	width:500%;  /* <-- Angka 3 Bergantung pada jumlah slide */
}

.caption {	/* styling untuk deskripsi setiap slide */
	position: absolute;
	background-color: rgba(0,0,0,0.5);
	bottom:0;
	padding:10px;
	color:#fff;
	left: 0;
	right: 0;
}

/* Yang membuatnya jadi slider */
	ul.slide li {
  		display: inline-block;
  		float: left;
  		-webkit-box-sizing:border-box;
  		-moz-box-sizing:border-box;
  		ox-sizing:border-box;
  		-webkit-transition: -webkit-transform 2000ms;
  		-moz-transition: -moz-transform 2000ms;
  		transition: -webkit-transform 2000ms, transform 2000ms;
	}
	ul.slide li.slide-1 {
		left: 0%;
	}
	ul.slide li.slide-2 {
		left: 100%;
	}
	ul.slide li.slide-3 {
		left: 200%;
	}
	ul.slide li.slide-4 {
		left: 300%;
	}
	ul.slide li.slide-5 {
		left: 400%;
	
	}
	#nav-1:checked ~ ul.slide li{
	  	-webkit-transform: translateX(0%);
		-moz-transform: translateX(0%);
	  	transform: translateX(0%);
	}
	#nav-2:checked ~ ul.slide li{
	  	-webkit-transform: translateX(-100%);
	  	-moz-transform: translateX(-100%);
	 	transform: translateX(-100%);
	}
	#nav-3:checked ~ ul.slide li {
	  	-webkit-transform: translateX(-200%);
	  	-moz-transform: translateX(-200%);
	  	transform: translateX(-200%);
	}
	#nav-4:checked ~ ul.slide li {
	  	-webkit-transform: translateX(-300%);
	  	-moz-transform: translateX(-300%);
	  	transform: translateX(-300%);
	}
	#nav-5:checked ~ ul.slide li {
	  	-webkit-transform: translateX(-400%);
	  	-moz-transform: translateX(-400%);
	  	transform: translateX(-400%);
	}
/* End, yang membuatnya jadi slider */


/* Navigator */

.radio-nav { /* menghilangkan radio button */
	display: none;
}
	
	/* styling untuk tombol next dan previous slide */
	.nav-arrow {
		position: absolute;
		top:45%;
		width:50px;
		height: 50px;
	}
	.nav-next {
		right:10px;
	}
	.nav-prev {
		left:10px;
	}
	.nav-arrow label {
		-webkit-transition:all 0.3s;
		-moz-transition:all 0.3s;
		transition:all 0.3s;
		background-color: rgba(0,0,0,0.3);
		color: #fff;
		border-radius: 50%;
		display: block;
		position: absolute;
		padding:15px 20px;
		cursor: pointer;
		z-index: 1;
		opacity: 0;
		font-weight: bold;
		line-height: 1;
	}
	.container:hover .nav-arrow label{
		background-color: rgba(0,0,0,0.7);
	}
	/* end styling untuk tombol next dan previous slide */
	/*Setiap slide mempunya tombol prev dan next-nya masing-masing. Nah, tampilkan tombol yang tepat dengan kode dibawah ini*/ 
	#nav-1:checked ~ .nav-prev label.nav-5,
	#nav-1:checked ~ .nav-next label.nav-2,
	#nav-2:checked ~ .nav-prev label.nav-1,
	#nav-2:checked ~ .nav-next label.nav-3,
	#nav-3:checked ~ .nav-prev label.nav-2,
	#nav-3:checked ~ .nav-next label.nav-4,
	#nav-4:checked ~ .nav-prev label.nav-3,
	#nav-4:checked ~ .nav-next label.nav-5,
	#nav-5:checked ~ .nav-prev label.nav-4,
	#nav-5:checked ~ .nav-next label.nav-1 {
		z-index: 2;
		opacity: 1;
	}
	/* end */

/* Navigator */
</style>
</head>
<body>
    <center>
        <br>
        <br><a href="https://localhost/ProjectSentra/Homee.php">
        <img src="Logo som.png"></a>
        <br>
        <br>
        <a href="https://localhost/ProjectSentra/New%20Arrival.php">New Arrival</a>
        <a href="https://localhost/ProjectSentra/SKincare.php">Skincare</a>
        <a href="https://localhost/ProjectSentra/About%20Us.php">About Us</a>
        <br>
        <br>
        <br>
        <h1>Be You, Be Somethinc!</h1>
        <p>Since every part of YOU is unique, we always want to make something for you.</p>
        <br>
        <br>
        <div class="container">
	<input type="radio" name="slide" class="radio-nav" id="nav-1" checked/>
	<input type="radio" name="slide" class="radio-nav" id="nav-2"/>
	<input type="radio" name="slide" class="radio-nav" id="nav-3"/>
	<input type="radio" name="slide" class="radio-nav" id="nav-4"/>
	<input type="radio" name="slide" class="radio-nav" id="nav-5"/>

	<ul class="slide">
		<li class="slide-1">
			<img src="crmc.jpg"/>
		</li>
		<li class="slide-2">
			<img src="beeglow.jpg"/>
		</li>
		<li class="slide-3">
			<img src="newshade.jpg"/>
		</li>
		<li class="slide-4">
			<img src="gincu.jpg"/>
		</li>
		<li class="slide-5">
			<img src="serumbrlian.jpg"/>
		</li>
	</ul>

	<div class="nav-arrow nav-next">
		<label class="nav-1" for="nav-1">></label>
		<label class="nav-2" for="nav-2">></label>
		<label class="nav-3" for="nav-3">></label>
		<label class="nav-4" for="nav-4">></label>
		<label class="nav-5" for="nav-5">></label>
	</div>
	<div class="nav-arrow nav-prev">
		<label class="nav-1" for="nav-1"><</label>
		<label class="nav-2" for="nav-2"><</label>
		<label class="nav-3" for="nav-3"><</label>
		<label class="nav-4" for="nav-4"><</label>
		<label class="nav-5" for="nav-5"><</label>
	</div>
<br>

    </center>
<center>
    <h3>Best Sellers</h3><br><table border="1">
    <td><img src="moistur.jpg" heigth="200" width="200" />
    <center><div class="desc">10% Niacinamide </div><div class="desc">+</div><div class="desc"> Moisture Sabi Beet</div><div class="desc"> Max Brightening Serum</div></center>
    <td><img src="niaci.png" heigth="200" width="200" />
    <center><div class="desc">5% Niacinamide<div class="desc"> +</div><div class="desc"> Moisture Sabi Beet Serum</div></td></center>
    <td><img src="lowph.jpg" heigth="200" width="200" />
    <center><div class="desc">Low pH Gentle </div><div class="desc"> <br></div><div class="desc">Jelly Cleanser</div></td></center>
    <td><img src="srumad.jpg" heigth="200" width="200" />
    <center><div class="desc">HYALuronic9+ Advanced </div><div class="desc">+</div><div class="desc"> B5 Serum</div></td></center>
    <td><img src="oilser.jpg" heigth="200" width="200" />
    <center><div class="desc">BAKUCHIOL </div><div class="desc">Skinpair Oil Serum</div></td></center>
</center>
</body>
</html>