<html>
	<head>
		<title> MGI's GAMESTORE</title>
		<link href="css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<?php
session_start();
if(isset($_SESSION["username"])){
}else{
 echo header("location:/form_login.php");
 
}

    
?>	
	</head>
	
<body style="margin:0;">

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

		<hr class="lineShading">	
		<div class="button-up">
		<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
		</div>
		
		<aside>
		<div class="menu">
			<div class="login">
			<form method="post" action="/project/log_out.php">	
				 <div class="foto"></div>
				<h4> Username	: <?=$_SESSION['username'];  ?> </h3>
				<h4> ID	: #00<?=$_SESSION['ID'];?> </h4> 
				
			<button type="submit" name="submit" value="Login">Logout <i class="fa fa-sign-out-alt"></i></button>
			</form>
			<?php if($_SESSION['username']=="admin")
    {		
		  echo "<form action='../datapenjualan.php'>";
          echo "<button name='toadmin' href='datapenjualan.php'>Admin <i class='fa fa-pen-square'></i></button>";
		  echo "</form>";	
	}else{
		echo "<form action='../Order.php'>";
        echo "<a class='btn'  href='Order.php'>My Order <i class='fas fa-archive'></i></a>";
		echo "</form>";
	} ?>
	</div><br>	
			<hr class="line">
			<a href="carapesan.php"><h3>Cara Memesan</h3></a>
			<hr class="line">
			<a href="list.php"><h3>List PC Game</h3></a>
			<hr class="line">
			<a href="qna.php"><h3>FAQ</h3></a>
			<hr class="line">
			<a href="support.php"><h3>Support</h3></a>
			<hr class="lineShading">
			
		
		
		</aside>
		
		<div class="container">	
		 <h2 class="title"><span>Register</span></h2>
				<form method="post" name="pendaftaran" action="proses_daftar.php">
<table border=0 align="center" cellpadding=5 cellspacing=0>
<tr>
<td colspan=3><center><font size=5>PENDAFTARAN</font></center></td>
</tr>
<tr>
<td>Nama</td><td>:</td><td><input type="text" name="nama"></td>
</tr>
<tr>
<td>Email</td><td>:</td><td><input type="text" name="email"></td>
</tr>
<tr>
<td>Username</td><td>:</td><td><input type="text" name="username"></td>
</tr>
<tr>
<td>Password</td><td>:</td><td><input type="password" name="password"></td>
</tr>
<tr>
<td colspan=2>&nbsp;</td>
<td><input type="submit" name="submit" value="DAFTAR"></td>
</tr>
<tr>
<td colspan=3><a href="/login.php">LOGIN</a></td>
</tr>
</table>
</form>
			
			</div>
</div>
		
<footer>
<hr class="lineShading">
<div class="footer1">
<i class="far fa-home"></i>Alamat Toko Pusat<br>
<i class="far fa-home"></i>Alamat Toko Cabang #1<br>
<i class="far fa-home"></i>Alamat Toko Cabang #2<br>
<i class="far fa-home"></i>Alamat Toko Cabang #3<br>
<i class="far fa-home"></i>Alamat Toko Cabang #4<br>
</div>
<div class="footer2">
No. Telepon
E-MAIL
</div>
<div class="contact">
Website ini dibuat oleh MGI studio untuk <br>memudahka pembelian DVD diseluruh Indonesia.
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

