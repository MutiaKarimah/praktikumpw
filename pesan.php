<html>
	<head>
		<title> MGI's GAMESTORE</title>
		<link href="css/style.css" rel="stylesheet">
		<link href="css/stylePHP.css" rel="stylesheet">
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
<div class="formm">
<form method="post" action="proses.php" >
		<fieldset class="field">
			<legend class="judul">A.Data Pribadi</legend>	
				 <div class="baris">
				<pre>Nama Lengkap	:</pre>
				<pre class="H22">Jenis Kelamin	:</pre>
				<pre class="H60">Asal SMU	:</pre>
				<pre class="H19">Provinsi	:</pre>
				<pre class="H19">TmptTglLahir	:</pre><br>
				<pre class="H19">Alamat Kantor	:</pre><br>
				<pre class="H30">No. Telepon	:</pre>
				<pre class="H30">Alamat rumah	:</pre>
				<pre class="H170">No. Telepon	:</pre>
				<pre class="H19">No. HP		:</pre>
				
		</div>
		<div class="baris2">
			<input placeholder="Nama Lengkap" class="D2405" type="text" name="namalengkap" /></input>	
			<input type="radio" name="JK" value="Lelaki" id="Lelaki">Laki-Laki</input><br><input type="radio" name="JK" value="Perempuan" id="perempuan">Perempuan</input>
			<input placeholder="Nama SMU" class="D2400" type="text" name="SMU"></input>
			<input placeholder="Nama Provinsi" class="D240" type="text" name="ProvinsiSMA"></input>
			<center>Tempat</center> 
			<input placeholder="		 	 ......" class="D240" type="text" name="Tempat"></input>
			<input placeholder="Alamat Kantor" class="D560" type="text" name="kantor"></input>
			<input placeholder="62+" class="D240" type="number" name="telepon"></input>
			<input placeholder="Alamat Rumah" class="D560" type="text" name="alamat"></input>
			<pre>Kelurahan: <input placeholder="......" class="D153" type="text" name="Kelurahan"></input></pre>
			<pre>Kecamatan: <input placeholder="......" class="D152" type="text" name="Kecamatan"></input></pre>
			<input placeholder="62+" class="D2400" type="number" name="teleponrumah"></input>
			<input placeholder="62+" class="D240" type="number" name="hp"></input>
		</div>
		<div class="baris3">
			<div style="margin-top:100;"><br>
			<pre>Kabupaten/Kota	:</pre>
			<pre>Kode Pos	:</pre>
			<pre style="position:absolute;">Tanggal     Bulan	   Tahun </pre><br>	
			<select style="margin-top:25;margin-left:5"name="Tanggal">
					<option value="01">01</option>
					<option value="02">02</option>
					<option value="03">03</option>
					<option value="04">04</option>
					<option value="05">05</option>
					<option value="06">06</option>
					<option value="07">07</option>
					<option value="08">08</option>
					<option value="09">09</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value='14'>14</option>
					<option value='15'>15</option>
					<option value='16'>16</option>
					<option value='17'>17</option>
					<option value='18'>18</option>
					<option value='19'>19</option>
					<option value='20'>20</option>
					<option value='21'>21</option>
					<option value='22'>22</option>
					<option value='23'>23</option>
					<option value='24'>24</option>
					<option value='25'>25</option>
					<option value='26'>26</option>
					<option value='27'>27</option>
					<option value='28'>28</option>
					<option value='29'>29</option>
					<option value='30'>30</option>
					<option value='31'>31</option>
</select>
				</select>	
			<select style="margin-top:25;margin-left:19;position:absolute;" name="Bulan">
					<option value="01">Januari</option>
					<option value="02">Februari</option>
					<option value="03">Maret</option>
					<option value="04">April</option>
					<option value="05">Mei</option>
					<option value="06">Juni</option>
					<option value="07">Juli</option>
					<option value="08">Agustus</option>
					<option value="09">September</option>
					<option value="10">Oktober</option>
					<option value="11">November</option>
					<option value="12">Desember</option>
					
				</select>	
			<pre style="margin-top:100;">Kode Pos	:</pre>
			<pre style="margin-top:105;">Kabupaten	: </pre>
			<pre style="margin-top:45;">Provinsi	: </pre>
			<pre style="margin-top:30;">Kode Pos	:</pre>
			<pre>Alamat E-mail	:</pre>
			<input type="submit" name="tombol" class="tombol" value="kirim"  />
			</div>
		</div>
		
		<div class="baris4">
			<div style="margin-top:84;"><br>
			<input placeholder="Nama Kabupaten / Kota" class="D240" type="text" name="KabupatenSMA"></input>
			<input placeholder="Kode Pos" maxlength="4" class="D240" type="text" name="KodePos"></input>		
<br><br>				
			<select style="margin-left:20;margin-top:40;"name="Tahun">
<option value='1947'>1947</option>
<option value='1948'>1948</option>
<option value='1949'>1949</option>
<option value='1950'>1950</option>
<option value='1951'>1951</option>
<option value='1952'>1952</option>
<option value='1953'>1953</option>
<option value='1954'>1954</option>
<option value='1955'>1955</option>
<option value='1956'>1956</option>
<option value='1957'>1957</option>
<option value='1958'>1958</option>
<option value='1959'>1959</option>
<option value='1960'>1960</option>
<option value='1961'>1961</option>
<option value='1962'>1962</option>
<option value='1963'>1963</option>
<option value='1964'>1964</option>
<option value='1965'>1965</option>
<option value='1966'>1966</option>
<option value='1967'>1967</option>
<option value='1968'>1968</option>
<option value='1969'>1969</option>
<option value='1970'>1970</option>
<option value='1971'>1971</option>
<option value='1972'>1972</option>
<option value='1973'>1973</option>
<option value='1974'>1974</option>
<option value='1975'>1975</option>
<option value='1976'>1976</option>
<option value='1977'>1977</option>
<option value='1978'>1978</option>
<option value='1979'>1979</option>
<option value='1980'>1980</option>
<option value='1981'>1981</option>
<option value='1982'>1982</option>
<option value='1983'>1983</option>
<option value='1984'>1984</option>
<option value='1985'>1985</option>
<option value='1986'>1986</option>
<option value='1987'>1987</option>
<option value='1988'>1988</option>
<option value='1989'>1989</option>
<option value='1990'>1990</option>
<option value='1991'>1991</option>
<option value='1992'>1992</option>
<option value='1993'>1993</option>
</select><bR>
		<input placeholder="......" style="padding:5px;height:24;width:145;border:solid 1px;position:absolute;margin-top:227;" type="text" name="Kabupaten"></input>
		  <input placeholder="......" style="padding:5px;height:24;width:145;border:solid 1px;position:absolute;margin-top:290" type="text" name="Provinsi"></input>
		<input placeholder="0" maxlength="1" pattern=".{1,}" style="padding:5px;height:24;width:24;border:solid 1px;margin-top:100;" type="text" name="KodePos1"></input>
		<input placeholder="0" maxlength="1" pattern=".{1,}" style="padding:5px;height:24;width:24;border:solid 1px;margin-top:100;" type="text" name="KodePos2"></input>	
		<input placeholder="0" maxlength="1" pattern=".{1,}" style="padding:5px;height:24;width:24;border:solid 1px;margin-top:100;" type="text" name="KodePos3"></input>
		<input placeholder="0" maxlength="1" pattern=".{1,}" style="padding:5px;height:24;width:24;border:solid 1px;margin-top:100;" type="text" name="KodePos4"></input>
		<br>
		<input placeholder="0" maxlength="1" pattern=".{1,}" style="padding:5px;height:24;width:24;border:solid 1px;margin-top:220;" type="text" name="KodePosrumah1"></input>
		<input placeholder="0" maxlength="1" pattern=".{1,}" style="padding:5px;height:24;width:24;border:solid 1px;margin-top:100;" type="text" name="KodePosrumah2"></input>	
		<input placeholder="0" maxlength="1" pattern=".{1,}" style="padding:5px;height:24;width:24;border:solid 1px;margin-top:100;" type="text" name="KodePosrumah3"></input>
		<input placeholder="0" maxlength="1" pattern=".{1,}" style="padding:5px;height:24;width:24;border:solid 1px;margin-top:100;" type="text" name="KodePosrumah4"></input><br>
		<input placeholder="        			   @mail.com" type="email" class="D240" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"></input>	
			</div>
		</div>
		</div>
		
				
			
			
				
			
			</fieldset>
			</form>
			</font>

	  
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

