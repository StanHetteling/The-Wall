<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Dit is een site waar je foto's kan posten">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>BS Memes</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <header>
      <nav>
        <div class="head">
          <a href="#">
            <img src="images/logo.png" alt="logo" class="logo">
          </a>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Hot</a></li>
            <li><a href="#">Me</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
          <div class="login-head">
            <?php
              if (isset($_SESSION['userId'])) {
                echo '<form action="includes/logout.inc.php" method="post">
                  <button type="submit" name="logout-submit">logout</button>
                </form>';
              }
              else {
                echo '<form action="includes/login.inc.php" method="post">
                  <input type="text" name="mailuid" placeholder="E-mail...">
                  <input type="password" name="pwd" placeholder="wachtwoord">
                  <button type="submit" name="login_submit">Login</button>
                </form>
                <a href="signup.php">Signup</a>';
              }
            ?>


          </div>
        </div>
      </nav>
      <section class="section-default">
        <?php
          if (isset($_SESSION['userId'])) {
            echo '<p class="login-status">You are logged in!</p>';
          }
          else {
            echo '<p class="login-status">You are logged out!</p>';
          }
         ?>
      </section>
    </header>
