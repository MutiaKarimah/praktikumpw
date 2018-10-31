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
							<li><a href="/index.php">DVD Software</a></li>
							<li class="active">Windows 10 Pro</li>
						</ul>
	<div id="wrapper">
      <div class="box">
        <div class="main-container">
          <div class="left-cl">
            <div class="diagonal"></div>
            <img class="Preview" src="images/windows.jpg">
          </div>
          <div class="right-cl">
            <h1>Windows Software DVD <p> +with license Key </p></h1>
			
            <h3>Harga :<s>RP.50.000</s> RP.35.000</h3>
            <p>Windows 10 is a series of personal computer operating systems produced by Microsoft as part of its Windows NT family of operating systems. It is the successor to Windows 8.1, and was released to manufacturing on July 15, 2015, and to retail on July 29, 2015.[8] Windows 10 receives new builds on an ongoing basis, which are available at no additional cost to users. Mainstream builds of Windows 10 are labelled version YYMM with YY representing the year and MM representing the month of release. For example, the latest mainstream build of Windows 10 is Version 1809.

One of Windows 10's most  <span id="dots">...</span><span id="more">
notable features is support for universal apps, an expansion of the Metro-style apps first introduced in Windows 8. </span></p><button id="myBtn1" onclick="myFunction()" >Read more</button> 	

            <h4>Isi Paket</h4>
            <p>DVD Software, License key : 1.</p>
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

