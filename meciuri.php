<?php

$db = mysqli_connect("localhost", "root", "", "aplicatie");

$start=0;
$limit=4;
$id=2;
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  $start=($id-1)*$limit;
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

  <div class="bg-secondary">

    <div class="container">
      <h1 class="bg-primary text-center" style="padding-top: 20px;">Meciuri</h1>
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">Nr</th>
            <th scope="col">Acasa</th>
            <th scope="col">Deplasare</th>
            <th scope="col">Rezultat</th>
            <th scope="col">Data</th>
          </tr>
        </thead>
        <tbody>


          <?php
          $rezultat = mysqli_query($db, "SELECT * FROM meciuri LIMIT $start, $limit");
          while ($row = mysqli_fetch_array($rezultat)) {

            echo "<tr>
            <td>" . $row[0] . "</td>
            <td>" . $row[1] . "</td>
            <td>" . $row[2] . "</td>
            <td>" . $row[3] . "</td>
            <td>" . $row[4] . "</td>

            </tr>";

          }



          ?>





        </tbody>
      </table>


      <?php

      $rows= mysqli_num_rows(mysqli_query($db,"SELECT * FROM meciuri "));
      $total=ceil($rows/$limit);
      echo "<ul class='pagination'>";
      if($id>1)
      {
        echo "<a href='?id=".($id-1)."' class='page-link'>Inapoi </a>";
      }
      if($id!=$total)
      {
        echo "<a href='?id=".($id+1)."' class='page-link'> Inainte</a>";
      }

      echo "<ul class='pagination'>";
      for($i=1;$i<=$total;$i++)
      {
        if($i==$id) { echo "<li class='page-item'><a class='page-link href='#'</a> ".$i."</li>"; }

        else { echo "<li><a class='page-link' href='?id=".$i."'>".$i. "</a></li>"; }
      }
      echo "</ul>";


      ?>

    </div>


    <!-- STAFF SECTION -->
    <section id="staff" class="py-5 text-center bg-secondary text-white" >
      <div class="container">
        <h1>Personal</h1>
        <hr>
        <div class="row">
          <div class="col-md-3">
            <img src="https://www.famousbirthdays.com/faces/perez-florentino-image.jpg" alt="" class="img-fluid rounded-circle mb-2">
            <h4>Florentino Perez</h4>
            <small>Presedinte</small>
          </div>
          <div class="col-md-3">
            <img src="https://playerswiki.com/uploads/thumb/zinedine-zidane-300-300.jpeg" alt="" class="img-fluid rounded-circle mb-2">
            <h4>Zinedine Zidane</h4>
            <small>Antrenor</small>
          </div>
          <div class="col-md-3">
            <img src="https://www.evangel.edu/wp-content/uploads/2015/09/GriffinMWP-8-300x300-1443037982.jpg" alt="" class="img-fluid rounded-circle mb-2">
            <h4>David Betoni</h4>
            <small>Antrenor secund</small>
          </div>
          <div class="col-md-3">
            <img src="https://playerswiki.com/uploads/thumb/roberto-carlos-300-300.jpeg" alt="" class="img-fluid rounded-circle mb-2">
            <h4>Roberto Carlos</h4>
            <small>Coordonator de tineret</small>
          </div>
        </div>
      </div>
    </section>



  </div>







  <?php

  include('footer.php');

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
