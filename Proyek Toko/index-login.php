<html>
	<head>
		<title> MGI's GAMESTORE</title>
		<link href="css/style.css" rel="stylesheet">
		
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
				<h1> <a href="#" class="NamaToko"  > MJA's Gamestore </a> </h1>
			</div>
			
			<hr class="line"><hr class="lineShading">
		</header>
				
		
		
		<div id="hot-deal" class="section">		
						<a class="primary-btn hot-btn" href="#">Shop now</a>
		</div>
		<hr class="lineShading">	
		<div class="button-up">
		<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
		</div>
		<aside>
		<div class="menu">
			<div class="login">
				 <?php
					ob_start();
					session_start();
						ob_end_clean();
					if(isset($_SESSION["username"])){
						echo "BERHASIL";
						echo "<a href='log_out.php'>Logout</a>";
						}else{
							echo header("location:form_login.php");
						}
					?> 
			</div>
			<hr class="line">
			<a href="#"><h3>Cara Memesan</h3></a>
			<hr class="line">
			<a href="#"><h3>List PC Game</h3></a>
			<hr class="line">
			<a href="#"><h3>FAQ</h3></a>
			<hr class="line">
			<a href="#"><h3>Support</h3></a>
			<hr class="lineShading">
			
		
		
		</aside>
		
		<div class="container">	
		 <h2 class="title"><span>Best Seller</span></h2>
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
								<a href="DVDGames/OrderID1.html" class="primary-btn cta-btn">Buy now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>

						<div class="shop">
							<div class="shop-img">
								<img src="images/Windows.jpg" alt="">
							</div>
							
							<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">Retail</span>
												</div>

							
							<div class="shop-box">
								<h3>Windows 10 Pro + Retail<br>Rp.35.000</h3>
								<a href="DVDSoftware/OrderID1.html" class="primary-btn cta-btn">Buy now <i class="fa fa-arrow-circle-right"></i></a>
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
								<a href="DVDGames/OrderID2.html" class="primary-btn cta-btn">Buy now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
						
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
								<a href="DVDGames/OrderID1.html" class="primary-btn cta-btn">Buy now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>

						<div class="shop">
							<div class="shop-img">
								<img src="images/Windows.jpg" alt="">
							</div>
							
							<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">Retail</span>
												</div>

							
							<div class="shop-box">
								<h3>Windows 10 Pro + Retail<br>Rp.35.000</h3>
								<a href="DVDSoftware/OrderID1.html" class="primary-btn cta-btn">Buy now <i class="fa fa-arrow-circle-right"></i></a>
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
								<a href="DVDGames/OrderID2.html" class="primary-btn cta-btn">Buy now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>

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
								<a href="DVDGames/OrderID1.html" class="primary-btn cta-btn">Buy now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>

						<div class="shop">
							<div class="shop-img">
								<img src="images/Windows.jpg" alt="">
							</div>
							
							<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">Retail</span>
												</div>

							
							<div class="shop-box">
								<h3>Windows 10 Pro + Retail<br>Rp.35.000</h3>
								<a href="DVDSoftware/OrderID1.html" class="primary-btn cta-btn">Buy now <i class="fa fa-arrow-circle-right"></i></a>
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
								<a href="DVDGames/OrderID2.html" class="primary-btn cta-btn">Buy now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
			
			</div>
</div>
		
<footer>
<hr class="lineShading">
<div class="footer1">
test
</div>
<div class="footer2">
test2
</div>
<div class="contact">
Contact
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

