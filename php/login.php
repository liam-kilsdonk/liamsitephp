<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sushi palace | Login</title>
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
          <p>Login</p>
        </div>
      </div>
      <div class="page-reserv">
        <div class="inner-page-home">
          <div class="content-reserv">
            <div class="center-login">
              <div class="container">
                <div class="left">
                  <div class="login">Login</div>
                  <div class="eula">
                    <p>please no hacking into my site, i'm friends with kim jong-un!</p>
                  </div>
                </div>
                <div class="right">
                  <svg viewBox="0 0 320 300">
                    <defs>
                      <linearGradient
                        inkscape:collect="always"
                        id="linearGradient"
                        x1="13"
                        y1="193.49992"
                        x2="307"
                        y2="193.49992"
                        gradientUnits="userSpaceOnUse"
                      >
                        <stop
                          style="stop-color: #ff00ff"
                          offset="0"
                          id="stop876"
                        />
                        <stop
                          style="stop-color: #ff0000"
                          offset="1"
                          id="stop878"
                        />
                      </linearGradient>
                    </defs>
                    <path
                      d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143"
                    />
                  </svg>
                  <form action="../actions/login_action.php" method="POST">
                    <div class="form">
                      <label for="username">Username</label>
                      <input type="username" id="username" name="username" />
                      <label for="password">Password</label>
                      <input type="password" id="password" name="password"/>
                      <input type="submit" id="submit" value="Submit" />
                    </div>
                  </form>
                </div>
              </div>
            </div>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js"></script>
</html>
