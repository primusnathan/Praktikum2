<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">    
    <?php 
        if(isset($_GET["login_error"])){
            echo "<h2 style='color:red; font-size:22px;margin-left:20px;'>Data login salah</h2>";
        }
    ?>
      <h1 id="logo">Login</h1>
      <form method="post" action="cek_login.php">
        <p class="uname"><input type="text" name="username" value="" placeholder="Username or Email"></p>
        <p class="password"><input type="password" name="password" value="" placeholder="Password"></p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
      </div>
  
</body>
</html> 