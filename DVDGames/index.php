<html>
	<head>
		<title> MGI's GAMESTORE</title>
		<link href="css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<?php
session_start();
if(isset($_SESSION["username"])){
	echo 'Login';
}else{
 echo header("location:/logindulu.php");
 
}
?>
<
	</head>
	
<body>
	<div class="sidebar">
   		 		<div class="search">
	  			   <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
				   <input type="submit" value="">
	  			</div>
   		 	</div>
		<header id="top-header" >
			<div class="header">
				<h1> <a href="../index.php" class="NamaToko"  > MJA's Gamestore </a> </h1>
			</div>
			
			<hr class="line"><hr class="lineShading">
		</header>
				
		
		
		<div id="hot-deal" class="section">		
						<a class="primary-btn hot-btn" href="diskon.php">Shop now</a>
		</div>
		<hr class="lineShading">	
		<div class="button-up">
		<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
		</div>
		<aside>
		<div class="menu">
			<div class="login">
				<form method="post" action="/log_out.php">	
				 <div class="foto"></div>
				<h3> Username	: Admin </h3>
				<h3> ID	: #001 </h3> 
				<button type="submit" value="Login">Logout</button>
			</div>
			</form>
			<hr class="line">
			<a href="sidebar/carapesan.php"><h3>Cara Memesan</h3></a>
			<hr class="line">
			<a href="sidebar/list.php"><h3>List PC Game</h3></a>
			<hr class="line">
			<a href="sidebar/qna.php"><h3>FAQ</h3></a>
			<hr class="line">
			<a href="sidebar/support.php"><h3>Support</h3></a>
			<hr class="lineShading">
			
		
		
		</aside>
		
		<div class="container">	
		 <h2 class="title"><span>List Item</span></h2>
						<div class="shop">
							<div class="shop-img">
								<img src="images/Dota2.jpg" alt="">
							</div>
							
							<div class="product-label">
													<span class="sale">-50%</span>
													<span class="new">NEW</span>
												</div>

							
							<div class="shop-box">
								<h3>Dota 2 Update V.7.9<br>Rp.15.000</h3>
								<a href="OrderID1.php" class="primary-btn cta-btn">Buy now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>

				
						<div class="shop">
							<div class="shop-img">
								<img src="images/Pala.jpg" alt="">
							</div>
							
							<div class="product-label">
													<span class="sale">-50%</span>
													<span class="new">NEW</span>
												</div>

												
							<div class="shop-box">
								<h3>Palladins Update v.5.6<br>Rp.10.000</h3>
								<a href="OrderID2.html" class="primary-btn cta-btn">Buy now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
						
						
			
			</div>
</div>
<footer>
<hr class="lineShading">
<div class="footer1">
<h2><i class="fas fa-map-marker-alt"></i> Alamat Toko</h2><br>
<h3><i class="fas fa-store"></i>Alamat Toko Cabang #1<br>
<i class="fas fa-store"></i>Alamat Toko Cabang #2<br>
<i class="fas fa-store"></i>Alamat Toko Cabang #3<br>
<i class="fas fa-store"></i>Alamat Toko Cabang #4<br>

</div>
<div class="footer2">
<h2><i class="fas fa-mobile-alt"></i> Kontak Admin</h2><br>
<h3><i class="fab fa-instagram"></i>Instagram : @YosuaXG<br>
<i class="fab fa-instagram"></i>Instagram : @mutia<br>
<i class="fab fa-instagram"></i>Instagram : @Azkakz<br>
<i class="fab fa-facebook"></i>Facebook : /OFFicialMJA<br></h3>

</div>
<div class="contact">
<h2><i class="fas fa-copyright"></i> Disclaimer</h2><br>
<h3>" Lorem ipsum sit dolor sit amet .. "	</h3>
</div>
</footer>
</body>
<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}


function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
</html>

