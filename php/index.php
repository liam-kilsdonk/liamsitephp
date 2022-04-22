<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sushi palace | Home</title>
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
      include '../includes/header.php';
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
          <p>Home</p>
        </div>
      </div>
      <div class="page-home">
        <div class="inner-page-home">
          <div class="intro-menu"><p>Populaire gerechten</p></div>
          <div class="pop-menu">
            <div class="pop-dish">
              <div class="pic-dish">
                <img height="250px" src="../images/nigiri.jpg" alt="#" />
              </div>
              <div class="text-dish">
                <h3>Nigiri</h3>
                <br />
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Voluptatum laboriosam delectus hic praesentium doloribus
                  aliquid.
                </p>
                <br />
                <h4>€ 1,69</h4>
              </div>
            </div>
            <div class="pop-dish">
              <div class="pic-dish">
                <img
                  height="250px"
                  src="../images/makizushi reform.png"
                  alt="#"
                />
              </div>
              <div class="text-dish">
                <h3>Makizushi</h3>
                <br />
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Voluptatum laboriosam delectus hic praesentium doloribus
                  aliquid.
                </p>
                <br />
                <h4>€ 2,99</h4>
              </div>
            </div>

            <div class="pop-dish">
              <div class="pic-dish">
                <img height="250px" src="../images/Inari-zushi.jpg" alt="#" />
              </div>
              <div class="text-dish">
                <h3>Inari-zushi</h3>
                <br />
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Voluptatum laboriosam delectus hic praesentium doloribus
                  aliquid.
                </p>
                <br />
                <h4>€ 2,69</h4>
              </div>
            </div>
            <div class="pop-dish">
              <div class="pic-dish">
                <img height="250px" src="../images/temaki.jpg" alt="#" />
              </div>
              <div class="text-dish">
                <h3>Temaki</h3>
                <br />
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  Voluptatum laboriosam delectus hic praesentium doloribus
                  aliquid.
                </p>
                <br />
                <h4>€ 3,99</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="next-page">
        <div class="pakage">
          <div class="titel-next"><p>Nijmegen, Kom langs!</p></div>
          <div class="under-page">
            <img src="../images/waalbrug.jpg" alt="waalbrug" />
            <img src="../images/waalkadestoelen.jpg" alt="terras" />
          </div>
        </div>
      </div>
    </main>
    <?php 
      include '../includes/footer.php';
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
