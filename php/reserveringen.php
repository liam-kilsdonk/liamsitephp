<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sushi palace | Reserveringen</title>
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
          <p>Reserveringen</p>
        </div>
      </div>
      <div class="page-reserv">
        <div class="inner-page-home">
          <div class="content-reserv">
            <div class="content-res-page">
              <div class="reserveer-tab">
                <div class="img-reserveer">
                  <img
                    height="450px"
                    src="../images/cutout res red.png"
                    alt="#"
                  />
                </div>
                <div class="function-reserveer">
                  <div class="form-res">
                    <form action="../actions/reservation_action.php" method="POST">
                      <div class="blok-res">
                        <label for="name">naam:</label>
                        <input
                          type="text"
                          id="name"
                          name="full_name"
                          value=""
                        />
                      </div>
                      <div class="blok-res">
                        <label for="name">Email:</label>
                        <input
                          type="text"
                          id="email"
                          name="full_email"
                          value=""
                        />
                      </div>
                      <div class="blok-res">
                        <label for="name">mobiel:</label>
                        <input
                          type="text"
                          id="phone"
                          name="full_phone"
                          value=""
                        />
                      </div>
                      <br>
                      <div class="blok-res">
                      <input type="datetime-local"
                          id="date"
                          name="date_time"
                          value="" />
                      </div>
                      <br />
                      <div class="center-res">
                        <button class="custom-btn btn-4" name="stuur">
                          stuur
                        </button>
                      </div>
                    </form>
                    <?php 
                    
                    require_once('../connector.php');
                    
                    if(isset($_POST['stuur'])) {
                      $name = $_POST['full_name'];
                      $mail = $_POST['full_email'];
                      $phone = $_POST['full_phone'];
                      $date = $POST['date_time'];

                      echo $name;
                      echo $mail;
                      echo $phone;
                      echo $date;
                    } ?>
                  </div>
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
</html>
