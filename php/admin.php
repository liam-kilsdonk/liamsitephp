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
        <div class="warp-this">
          <div class="page-panel">
            <div class="description">
              <h4>Reserveringen. (Read)</h4>
            </div>
            <?php
                require_once('../actions/reservation_read.php')
              ?>
          </div>
          <div class="page-panel">
            <div class="description">
              <h4>Voeg product aan menu. (Create)</h4>
            </div>
            <form action="../actions/menu_updatedelete.php" method="POST">
              <div class="blok-input">
                <label for="name">Product naam:</label>
                <input type="text" id="item" name="product" value="" />
              </div>
              <div class="blok-input">
                <label for="name">beschrijving:</label>
                <input type="text" id="sub" name="subtext" value="" />
              </div>
              <div class="blok-input">
                <label for="name">Prijs:</label>
                <input type="text" id="kost" name="prijs" value="" />
              </div>
              <div class="blok-input">
                <label for="name">Image:</label>
                <input type="text" id="foto" name="image" value="" />
              </div>
              <br />
              <div class="center-res">
                <button class="custom-btn btn-4" name="stuur">stuur</button>
              </div>
            </form>
            <?php 
                    
                    require_once('../connector.php');
                    
                    if(isset($_POST['stuur'])) {
                      $product = $_POST['product'];
                      $subtext = $_POST['subtext'];
                      $prijs = $_POST['prijs'];
                      $image = $POST['image'];

                      echo $product;
                      echo $subtext;
                      echo $prijs;
                      echo $image;
                    } ?>
          </div>
          <div class="page-panel">
            <div class="description">
              <h4>Menu updaten. (Update)</h4>
            </div>
            <form action="../actions/menu_updateonly.php" method="POST">
            <div class="blok-input">
                <label for="name">ID:</label>
                <input type="text" id="num" name="identiteit" value="" />
              </div>
              <div class="blok-input">
                <label for="name">Product naam:</label>
                <input type="text" id="item" name="product" value="" />
              </div>
              <div class="blok-input">
                <label for="name">beschrijving:</label>
                <input type="text" id="sub" name="subtext" value="" />
              </div>
              <div class="blok-input">
                <label for="name">Prijs:</label>
                <input type="text" id="kost" name="prijs" value="" />
              </div>
              <div class="blok-input">
                <label for="name">Image:</label>
                <input type="text" id="foto" name="image" value="" />
              </div>
              <br />
              <div class="center-res">
                <button class="custom-btn btn-4" name="stuur">stuur</button>
              </div>
            </form>
            <?php 
                    
                    require_once('../connector.php');
                    
                    if(isset($_POST['stuur'])) {
                      $product = $_POST['product'];
                      $subtext = $_POST['subtext'];
                      $prijs = $_POST['prijs'];
                      $image = $POST['image'];

                      echo $product;
                      echo $subtext;
                      echo $prijs;
                      echo $image;
                    } ?>
          </div>
          <div class="page-panel">
            <div class="description">
              <h4>Menu producten. (Delete)</h4>
            </div>
            <?php
                require_once('../actions/menu_read.php')
              ?>
          </div>
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
