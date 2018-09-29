


<?php
session_start();

$db = mysqli_connect("localhost", "root", "", "aplicatie");

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Real Madrid</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php

  include('navbar.php');

  ?>

  <div id="error">
  </div>



  <!-- LOGIN -->
  <section id="login">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card">
            <div class="card-header">
              <h4>Autentificare</h4>
            </div>
            <div class="card-body">
              <form name="form1" action="" id="forma" method="post">
                <div class="form-group">
                  <label for="user">Utilizator</label>
                  <input type="text" id="utilizator" required class="form-control" name="user">
                </div>
                <div class="form-group">
                  <label for="password">Parola</label>
                  <input type="password" id="parol" required class="form-control" name="parola">
                </div>
                <input type="submit" name="trimitelog" class="btn btn-primary btn-block" value="Autentificare">

                <p style="margin-top:20px;">Nu esti membru? <a href="register.php">Inregistreaza-te</p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php

  include('footer.php');

  ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
  <script>
  CKEDITOR.replace( 'editor1' );
  </script>

  <?php

  if(isset($_POST["trimitelog"])){


    $result = mysqli_query($db, "SELECT * FROM login WHERE username = '$_POST[user]'  && password = '$_POST[parola]'");
    while($row = mysqli_fetch_array($result))
    {
      $_SESSION["admin"] = $row["username"];
      ?>
      <script type="text/javascript">
      window.location="admin/acasa.php";
      </script>

      <?php


    }

  }



  ?>




</body>
</html>
