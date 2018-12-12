<?php include("config.php"); ?>

<html>
<head>
    <title>MJA's GAMESTORE</title>		
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	
	<?php
session_start();
if($_SESSION['username']=="admin"){
}else{
 echo header("location:form_login.php");
 
}

?>

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

		<hr class="lineShading">	
		<div class="button-up">
		<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
		</div>
		<aside>
		<div class="menu">
			<div class="login">
			<form method="post" action="/log_out.php">	
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
			<a href="./sidebar/carapesan.php"><h3>Cara Memesan</h3></a>
			<hr class="line">
			<a href="./sidebar/list.php"><h3>List PC Game</h3></a>
			<hr class="line">
			<a href="./sidebar/qna.php"><h3>FAQ</h3></a>
			<hr class="line">
			<a href="./sidebar/support.php"><h3>Support</h3></a>
			<hr class="lineShading">
			
			
		
		
		</aside>


    <nav>
        <a href="admin.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Id Game</th>
            <th>Nama Game</th>
            <th>Tanggal Rilis</th>
            <th>Versi</th>
            <th>Genre</th>
            <th>Isi Paket</th>
            <th>Harga</th>
			<th>Deskripsi</th>
        </tr>
    </thead>
	
    <tbody>
        <?php
        $sql = "SELECT * FROM tb_barang";
        $query = mysqli_query($db, $sql);

        while($data = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$data['idgame']."</td>";
            echo "<td>".$data['namagame']."</td>";
            echo "<td>".$data['tglrilis']."</td>";
            echo "<td>".$data['versi']."</td>";
            echo "<td>".$data['genre']."</td>";
            echo "<td>".$data['isipaket']."</td>";
			echo "<td>".$data['harga']."</td>";
			echo "<td>".$data['deskripsi']."</td>";

            echo "<td>";
            echo "<a href='data-edit.php?idgame=".$data['idgame']."'>Edit</a> | ";
            echo "<a href='hapus.php?idgame=".$data['idgame']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>
    </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    </body>
</html>
