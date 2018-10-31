<html lang="en">
<head>
  <title>Login Form</title>
</head>
<body>
        
    <?php 
        if(isset($_GET["login_error"])){
            echo "<h2 style='color:red';>Username atau password salah</h2>";
        }
    ?>
      <h1>Login to Web App</h1>
      <div class="login">
				<form method="post" action="login.php">					
						<label for="username"><b>Username</b></label>
						<input type="text" placeholder="Enter Username" name="iusername" required></input>
						<label for="password"><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="ipassword" required></input>
						<button type="submit" value="Login">Login</button>
						<label><input type="checkbox" checked="checked" name="remember"> Remember me |						</label>
						<label><a href="#"> Sign Up </label></a>					
				</form>
    </div>
  
</body>
</html> 