<?php

$db = mysqli_connect("localhost", "root", "", "aplicatie");

if (isset($_POST['username']) && isset($_POST['parola1'])){
        $username = $_POST['username'];
        $password = $_POST['parola1'];

        $query = "INSERT INTO login (username, password) VALUES ('$username', '$password')";
        $result = mysqli_query($db, $query);
        if($result){
          $redirectUrl = 'index.php';
            echo '<script type="application/javascript">alert("Inregistrare completa!"); window.location.href = "'.$redirectUrl.'";</script>';
        }else{
           echo '<script type="application/javascript">alert("Error! '.mysql_error().'");</script>';
        }
    }

?>





<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

  <!-- css -->
  <link rel="stylesheet" href="css/style.css">

  <title>FC Cavnic</title>
</head>
<body>

  <?php

  include('navbar.php');
  ?>

  <section id="login">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card">
            <div class="card-header">
              <h4>Inregistrare</h4>
            </div>
            <div class="card-body">
              <form name="form1" action=""  method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="form-group">
                  <label for="user">Utilizator</label>
                  <input type="text" class="form-control"  name="username" required />
                </div>
                <div class="form-group">
                  <label for="password">Parola</label>
                  <input type="password" class="form-control"  name="parola1" id="password" autocomplete="new-password" required />

                </div>

                  <div class="form-group">
                  <label for="password">Confirmare Parola</label>
                  <input type="password" class="form-control"  name="parola2" autocomplete="new-password" required />
                </div>
                  <input type="submit" value="Inregistreaza-te" name="register" class="btn btn-block btn-primary" />

                <p style="margin-top:20px;">Esti membru?<a href="login.php"> Autentificare</p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
















  <?php
  include 'footer.php';
  ?>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script>
  $(document).ready(function () {
    $('.dropdown-toggle').dropdown();
  });
</script>
</body>
</html>
