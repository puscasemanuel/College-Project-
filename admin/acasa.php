<?php
session_start();
if(isset($_SESSION["admin"]) == "")
{



  ?>
  <script type="text/javascript">

  window.location="../login.php";


</script>
<?php
}
?>


<?php

$db = mysqli_connect("localhost", "root", "", "aplicatie");

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Fotbal Admin</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">

  <!--<link rel="stylesheet" href="../css/style.css">-->
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
      <a href="index.html" class="navbar-brand">RealMadrid</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item px-2">
            <a href="../index.php" class="nav-link">Acasa</a>
          </li>

          <li class="nav-item px-2">
            <a href="../echipa.php" class="nav-link">Echipa</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown mr-3">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-user"></i> Bun venit, Manager
            </a>
            <div class="dropdown-menu">
              <a href="profile.html" class="dropdown-item">
                <i class="fa fa-user-circle"></i> Profile
              </a>
              <a href="settings.html" class="dropdown-item">
                <i class="fa fa-gear"></i> Settings
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a href="../logout.php" class="nav-link">
              <i class="fa fa-user-times"></i> Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- ACTIONS -->
  <section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="http://www.4footballnews.com/football-news.jpg" alt="" class="img-fluid">
          <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addPostModal">
            <i class="fa fa-plus"></i> Adauga o stire
          </a>
        </div>


        <div class="col-md-6">
          <img src="http://d1bdhkmqqz901h.cloudfront.net/1200x630/smart/http://s3.amazonaws.com/new-smedia/ea64aa9a7cd6480ab39b3d9dae682512/68881f4616ae4ffab03c93fa752f9a46.jpg" alt="" class="img-fluid">
          <a href="#" class="btn btn-danger btn-block" data-toggle="modal" data-target="#stergestire">
            <i class="far fa-trash-alt"></i> Sterge stire
          </a>
        </div>




        <div class="col-md-6" style="margin-top: 50px;">
          <img src="https://images0.minutemediacdn.com/production/1200x630/5ad5af0b2ff54161b4000001.jpg" alt="" class="img-fluid">
          <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#addUserModal">
            <i class="fas fa-futbol"></i> Adauga jucator

          </a>

        </div>



        <div class="col-md-6" style="margin-top:50px;">
          <img src="../images/stergejucator.jpg" alt="" class="img-fluid">
          <a href="#" class="btn btn-danger btn-block" data-toggle="modal" data-target="#addCategoryModal">
            <i class="far fa-trash-alt"></i> Sterge jucator
          </a>
        </div>


        <div class="col-md-6" style="margin-top: 50px;">
          <img src="../images/ucladauga.png" alt="" class="img-fluid">
          <a href="#" class="btn btn-warning btn-block" data-toggle="modal" data-target="#addMeci">
            <i class="fas fa-futbol"></i> Adauga meci

          </a>

        </div>




        <div class="col-md-6" style="margin-top:50px;">
          <img src="https://www.macobserver.com/wp-content/uploads/2017/09/delete-custom-ringtones-1200x630.jpg?x10063" alt="" class="img-fluid">
          <a href="#" class="btn btn-danger btn-block" data-toggle="modal" data-target="#stergeMeci">
            <i class="far fa-trash-alt"></i> Sterge meci
          </a>
        </div>

      </div>
    </div>
  </section>



  <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
    <div class="conatiner">
      <div class="row">
        <div class="col">
          <p class="lead text-center">Copyright &copy; 2018 Puscas</p>
        </div>
      </div>
    </div>
  </footer>


  <!-- adauga stire -->
  <div class="modal fade" id="addPostModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title">Adauga Stire</h5>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
        <div class="modal-body">
          <form method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="file">Imagine</label>
              <input type="file" name="pozastire" class="form-control-file">
            </div>

            <div class="form-group">
              <label for="text">Autor</label>
              <input type="text" name="autor" class="form-control">
            </div>

            <div class="form-group">
              <label for="body">Continut</label>
              <textarea name="editor1"  class="form-control"></textarea>
            </div>

            <div class="modal-footer">
              <button class="btn btn-secondary" data-dismiss="modal">Inchide</button>
              <button class="btn btn-primary" name="trimitestire" type="submit">Trimite</button>
            </div>
          </form>

          <?php
          if(isset($_POST["trimitestire"]))

          {

            unset($_POST['trimitestire']);
            $file = $_FILES["pozastire"]["name"];
            $destinatie = 'C:\xampp\htdocs\Website Laborator\imagini_stiri/'.$file;
            move_uploaded_file($_FILES["pozastire"]["tmp_name"], $destinatie);


            $pozastire = $_FILES['pozastire']['name'];
            $autor = $_POST['autor'];
            $continut = $_POST['editor1'];

            $sql = "INSERT INTO stiri (autor, imagine, stire) VALUES ('$autor', '$pozastire', '$continut')";
            mysqli_query($db, $sql);

            ?>

            <script type="text/javascript">
            window.location="acasa.php";
            </script>

            <?php


          }

          ?>


        </div>
      </div>
    </div>
  </div>


  <!-- sterge stire -->

  <div class="modal fade" id="stergestire">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-danger text-white">
          <h5 class="modal-title">Sterge stire</h5>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
        <div class="modal-body">
          <form method="post" action="">
            <div class="form-group">
              <label for="title">Autor:</label>
              <input type="text" name="autor" class="form-control">
            </div>


            <div class="modal-footer">
              <button class="btn btn-secondary" data-dismiss="modal">Inchide</button>
              <button class="btn btn-danger" type="submit" name="sterge1" >Sterge</button>
            </div>
          </form>

          <?php
          if(isset($_POST["sterge1"]))

          {

            $autor = $_POST['autor'];

            $sql = "DELETE FROM stiri WHERE autor = '$autor'";
            mysqli_query($db, $sql);

            ?>

            <script type="text/javascript">
            window.location="acasa.php";
            </script>

            <?php


          }

          ?>

        </div>
      </div>
    </div>
  </div>




  <!-- sterge jucator -->
  <div class="modal fade" id="addCategoryModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-danger text-white">
          <h5 class="modal-title">Sterge jucator</h5>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
        <div class="modal-body">
          <form method="post" action="">
            <div class="form-group">
              <label for="title">Nume:</label>
              <input type="text" name="nume1" class="form-control">
            </div>


            <div class="modal-footer">
              <button class="btn btn-secondary" data-dismiss="modal">Inchide</button>
              <button class="btn btn-danger" type="submit" name="sterge" >Sterge</button>
            </div>
          </form>

          <?php
          if(isset($_POST["sterge"]))

          {

            $nume = $_POST['nume1'];

            $sql = "DELETE FROM jucatori WHERE nume = '$nume'";
            mysqli_query($db, $sql);

            ?>

            <script type="text/javascript">
            window.location="acasa.php";
            </script>

            <?php


          }

          ?>




        </div>
      </div>
    </div>
  </div>

  <!-- Adauga jucator -->
  <div class="modal fade" id="addUserModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title">Adauga jucator</h5>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
        <div class="modal-body">
          <form name="form1" action = "" id="forma" method = "post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="user" id="user" class="form-control">
            </div>

            <div class="form-group">
              <label for="name">Post</label>
              <input type="text" name="post"  class="form-control">
            </div>

            <div class="form-group">
              <label for="link">Pagina</label>
              <input type="text"  name="link" class="form-control">
            </div>

            <label for="jname">Fotografie</label>
            <input type="file" name="jname" id="jname" class="form-control">


            <div class="modal-footer">
              <button class="btn btn-secondary" data-dismiss="modal">Inchide</button>
              <button class="btn btn-success" name="imagesubmit" type="submit">Adauga</button>
            </div>
          </form>





          <?php
          if(isset($_POST["imagesubmit"]))

          {

            unset($_POST['imagesubmit']);
            $filename = $_FILES["jname"]["name"];
            $destination  = 'C:\xampp\htdocs\Website Laborator\imagini_jucatori/'.$filename;
            move_uploaded_file($_FILES["jname"]["tmp_name"], $destination);


            $nume = $_POST['user'];
            $post = $_POST['post'];
            $pagina = $_POST['link'];
            $poza = $_FILES['jname']['name'];

            $sql = "INSERT INTO jucatori (nume, poza, post, link) VALUES ('$nume', '$poza', '$post', '$pagina')";
            mysqli_query($db, $sql);

            ?>

            <script type="text/javascript">
            window.location="acasa.php";
            </script>

            <?php


          }

          ?>


        </div>
      </div>
    </div>
  </div>



  <!-- **************************** -->


  <!-- Adauga meci -->
  <div class="modal fade" id="addMeci">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-warning text-white">
          <h5 class="modal-title">Adauga meci</h5>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
        <div class="modal-body">
          <form name="form1" action ="" id="forma" method = "post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="name">Acasa</label>
              <input type="text" name="acasa" id="user" class="form-control">
            </div>

            <div class="form-group">
              <label for="name">Deplasare</label>
              <input type="text" name="deplasare"  class="form-control">
            </div>

            <div class="form-group">
              <label for="link">Rezultat</label>
              <input type="text"  name="rezultat" class="form-control">
            </div>


            <div class="form-group">
              <label for="link">Data</label>
              <input type="datetime-local"  name="data1" class="form-control">
            </div>




            <div class="modal-footer">
              <button class="btn btn-secondary" data-dismiss="modal">Inchide</button>
              <button class="btn btn-warning" name="adaugameci" type="submit">Adauga</button>
            </div>
          </form>





          <?php
          if(isset($_POST["adaugameci"]))

          {




            $acasa = $_POST['acasa'];
            $deplasare = $_POST['deplasare'];
            $scor = $_POST['rezultat'];
            $data = $_POST['data1'];


            $sql = "INSERT INTO meciuri (acasa, deplasare, scor, data) VALUES ('$acasa', '$deplasare', '$scor', '$data')";
            mysqli_query($db, $sql);

            ?>

            <script type="text/javascript">
            window.location="acasa.php";
            </script>

            <?php


          }

          ?>


        </div>
      </div>
    </div>
  </div>




  <!-- sterge jucator -->
  <div class="modal fade" id="stergeMeci">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-danger text-white">
          <h5 class="modal-title">Sterge meci</h5>
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
        <div class="modal-body">
          <form method="post" action="">
            <div class="form-group">
              <label for="title">Deplasare:</label>
              <input type="text" name="deplasare" class="form-control">
            </div>


            <div class="modal-footer">
              <button class="btn btn-secondary" data-dismiss="modal">Inchide</button>
              <button class="btn btn-danger" type="submit" name="stergemeci" >Sterge</button>
            </div>
          </form>

          <?php
          if(isset($_POST["stergemeci"]))

          {

            $deplasare = $_POST['deplasare'];

            $sql = "DELETE FROM  meciuri WHERE deplasare = '$deplasare'";
            mysqli_query($db, $sql);

            ?>

            <script type="text/javascript">
            window.location="acasa.php";
            </script>

            <?php


          }

          ?>




        </div>
      </div>
    </div>
  </div>





  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>



</body>
</html>
