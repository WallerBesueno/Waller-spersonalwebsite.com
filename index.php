<head>

    <link rel="stylesheet" href="libs/css/style11.css">
    <title>MERCADO MONITORING SYSTEM</title>
  </head>
  
  <body>
    <header>
      <div class="logo"><a href="#">MERCADO MONITORING SYSTEM</a></div>
      <div class="menu">
        <a href="#">
          <ion-icon name="close" class="close"></ion-icon>
        </a>
      </div>
      <form class="expanding-search-form">
</form>
     
      <div class="heading1">
        <ion-icon name="menu" class="ham"></ion-icon>
      </div>
    </header>
    <section>
      <div class="section">
        <div class="section1">
          <div class="img-slider">
            <img src="Pictures/July.png" alt="" class="img">
            <img src="Pictures/August.png" alt="" class="img">
            <img src="Pictures/September.png" alt="" class="img">
            <img src="Pictures/October.png" alt="" class="img">
            <img src="Pictures/November.jpg" alt="" class="img">
          </div>
  
        
              
    </section>
    <footer>
      <div id="footer" class="footer0">
      </div>
  </body>
  </html>
<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="login-page">
        <div class="text-center">
          <h1>Mercado Monitoring System</h1>
          <h2>Please Log in</h2>
     </div>
     <?php echo display_msg($msg); ?>
      <form method="post" action="auth.php" class="clearfix">
      <div class="form-group">
              <label for="username" class="control-label">Username</label>
              <input type="name" class="form-control" name="username" placeholder="Username" autocomplete="off" required >
        </div>
        <div class="form-group">
            <label for="Password" class="control-label">Password</label>
            <input type="password" name= "password" class="form-control" placeholder="Password" autocomplete="off" required>
        </div>
        <div class="form-group">
                <button type="submit" class="btn btn-danger" style="border-radius:0%">Login</button>
        </div>
    </form>
</div>
<?php include_once('layouts/footer.php'); ?>
