<html>
	<head>
		<title> MGI's GAMESTORE</title>
		<link href="css/style.css" rel="stylesheet">
		<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn1");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
<?php
session_start();
if(isset($_SESSION["username"])){
	echo 'Login';
}else{
 echo header("location:/logindulu.php");
 
}
?>
</script>
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
				<h1> <a href="..//index.php" class="NamaToko"  > MJA's Gamestore </a> </h1>
			</div>
			
			<hr class="line"><hr class="lineShading">
		</header>
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
			</form><br>
			
			<hr class="line">
			<a href="#"><h3>Cara Memesan</h3></a>
			<hr class="line">
			<a href="#"><h3>List PC Game</h3></a>
			<hr class="line">
			<a href="#"><h3>FAQ</h3></a>
			<hr class="line">
			<a href="#"><h3>Support</h3></a>
			<hr class="lineShading">
			
		</div>
		
		</aside>				
						<ul class="breadcrumb">
							<li><a href="..//index.php">Home</a></li>
							<li><a href="/index.php">DVD Games</a></li>
							<li class="active">Dota 2</li>
						</ul>
<div id="wrapper">
      <div class="box">
        <div class="main-container">
          <div class="left-cl">
            <div class="diagonal"></div>
            <img class="Preview" src="images/Dota2.jpg">
          </div>
          <div class="right-cl">
            <h1>Windows Software DVD <p> +Update V7.9 </p></h1>
			
            <h3>Harga :<s>RP.30.000</s> RP.15.000</h3>
            <p><p>Dota 2 is one of the world's most popular competitive games. Having launched fully in 2013, the game has gone on to offer the highest esports tournament prize pool in the world.

The International, the biggest annual tournament <span id="dots">...</span><span id="more">
in Dota 2, had a combined prize pool of $20.7m in 2016. It started at $1.6m, and increased via a portion of in-game purchases made by players.

It's one of the most played titles with some 13m players as of summer 2016, and is also one of the most watched games on streaming platform Twitch.

Dota 2 is a multiplayer online battle arena (MOBA) game like League of Legends and Heroes of the Storm, with players able to choose from more than 100 playable heroes. Two teams of five must compete with one another - the winner being the first to enter the opposing team's stronghold and destroy their ancient.
</span></p><button id="myBtn1" onclick="myFunction()" >Read more</button> 	

            <h4>Isi Paket</h4>
            <p>DVD Software</p>
            <button class="primary-btn checkout">Pesan Sekarang</button>
			
          </div>
        </div>
      </div>	  
    </div>
	<hr class="lineShading">	

		
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

