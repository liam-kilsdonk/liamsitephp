<?php 
  include('../actions/sessions.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="shortcut icon" href="../images/logo-sushi.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <?php 
    include '../includes/admin_header.php';
    ?>
    <main>
      <div class="sample-header">
        <div class="sample-header-section">
          <h1>Liam's Sushi palace</h1>
          <h2>Japan to Nijmegen</h2>
          <p>日本, 寿司</p>
        </div>
      </div>
      <div class="sample-section-wrap">
        <div class="sample-section">
          <p>Admin Panel</p>
        </div>
      </div>
      <div class="page-home">
        <div class="page-panel">
          <?php
            require_once('../actions/reservation_read.php')
          ?>
        </div>
      </div>
    </main>
    <?php 
    include '../includes/admin_footer.php';
    ?>
  </body>
  <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"
  ></script>
  <script src="../js/main.js"></script>
  <script
    src="https://kit.fontawesome.com/143048b42c.js"
    crossorigin="anonymous"
  ></script>
</html>
