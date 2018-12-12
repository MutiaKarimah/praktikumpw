<?php include("config.php"); ?>

<html>
    <head>
        <title> MJA's GAMESTORE</title>
        <link href="css/style.css" rel="stylesheet">
        
    </head>
    <?php
session_start();

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
                <form method="post" action="login.php">                 
                        <label for="username"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="iusername" required></input>
                        <label for="password"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="ipassword" required></input>
                        <button type="submit" value="Login">Login</button>
                        <label><input type="checkbox" checked="checked" name="remember"> Remember me |                      </label>
                        <label><a href="#"> Sign Up </label></a>                    
                </form>
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
        
        <header>
        <h1>Data Pembeli</h1>
    </header>
    <nav>
        <a href="pembeli.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Email</th>
            <th>Nama</th>
            <th>Alamat Pemesan</th>
            <th>Nomor Telpon</th>
            <th>Game</th>
            <th>Jumlah Pesanan</th>
        </tr>
    </thead>
    
    <tbody>
        <?php
        $sql = "SELECT * FROM tb_pembeli";
        $query = mysqli_query($db, $sql);

        while($data = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$data['email']."</td>";
            echo "<td>".$data['nama']."</td>";
            echo "<td>".$data['alamat']."</td>";
            echo "<td>".$data['notelp']."</td>";
            echo "<td>".$data['idgame']."</td>";
            echo "<td>".$data['jumlah']."</td>";
            
            echo "<td>";
            echo "<a href='data-edit.php?nim=".$data['idgame']."'>Edit</a> | ";
            echo "<a href='hapus.php?nim=".$data['idgame']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>
    </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
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



<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>MJA's GAMESTORE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

</html>
