<!DOCTYPE html>
<html>      <!--By Kev -->
  <head>
  	<meta charset="utf-8">
  	<link rel="stylesheet" href="view/css/style.css" </link>
  	<title>Open Factory</title>
  </head>
  <body>

  	<nav class="navtop">
  		<div class="carre">
  			<h1>PAGE ADMIN</h1>
  		</div>
      <div class="login_box">
          <form method="POST" action="">
            	<input type="text" name="username" placeholder="Username ou email"/>
              <input type="password" name="pass" placeholder="******">
              <input type="submit" name="btn_login" class="btn" value="Connexion">
          </form>
      </div>
  	</nav>

    <?php
    require 'menu.php';
    ?>
