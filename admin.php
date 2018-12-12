<html>
	<head>
		<title> MJA's GAMESTORE</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		
	</head>
	<?php
session_start();
if($_SESSION['username']=="admin"){

}else{
 echo header("location:form_login.php");
 
}

?>
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

		<hr class="lineShading">	
		<div class="button-up">
		<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
		</div>
	<aside>
		<div class="menu">
			<div class="login">
			<form method="post" action="log_out.php">	
				 <div class="foto"></div>
				<h4> Username	: <?=$_SESSION['username'];  ?> </h3>
				<h4> ID	: #00<?=$_SESSION['ID'];?> </h4> 
				
			<button type="submit" name="submit" value="Login">Logout <i class="fa fa-sign-out-alt"></i></button>
			</form>
			<?php if($_SESSION['username']=="admin")
    {		
		  echo "<form action='datapenjualan.php'>";
          echo "<button name='toadmin' href='datapenjualan.php'>Admin <i class='fa fa-pen-square'></i></button>";
		  echo "</form>";	
	}else{
		echo "<form action='Order.php'>";
        echo "<a class='btn'  href='Order.php'>My Order <i class='fas fa-archive'></i></a>";
		echo "</form>";
	} ?>
	</div><br>			
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
		 <h2 class="title"><span>Tambah Game</span></h2>	  			
				<form method="post" name="" action="proses_input.php">
<table border=0 align="center" cellpadding=5 cellspacing=0>
<tr>
<td colspan=3><center><font size=5>Input Data Penjualan</font></center></td>
</tr>
<tr>
<td>ID Game</td><td>:</td><td><input type="text" name="idgame"></td>
</tr>
<tr>
<td>Nama Game</td><td>:</td><td><input type="text" name="namagame"></td>
</tr>
<tr>
<td>Tanggal Rilis</td><td>:</td><td><input type="date" name="tglrilis"></td>
</tr>
<tr>
<td>Versi Game</td><td>:</td><td><input type="text" name="versi"></td>
</tr>
<tr>
<td>Genre</td><td>:</td><td><input type="text" name="genre"></td>
</tr>
<tr>
<td>Isi Paket</td><td>:</td><td><input type="text" name="isipaket"></td>
</tr>
<tr>
<td>Harga Paket</td><td>:</td><td><input type="text" name="harga"></td>
</tr>
<tr>
<td>Deskripsi</td><td>:</td><td><textarea name="deskripsi"></textarea></td>
</tr>
<tr>
<td colspan=2>&nbsp;</td>
<td><input type="submit" name="submit" value="Masukkan"></td>
</tr>
<tr>
<td colspan=3><a href="datapenjualan.php">Data Penjualan</a></td>
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