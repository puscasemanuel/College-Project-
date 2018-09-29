<?php

$db = mysqli_connect("localhost", "root", "", "aplicatie");


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
        include 'navbar.php';
      ?>

  <section id="showcase">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item carousel-image-1 active">

      </div>

      <div class="carousel-item carousel-image-2">
        <div class="container">
          <div class="carousel-caption d-none d-sm-block mb-5">

          </div>
        </div>
      </div>

      <div class="carousel-item carousel-image-3">

      </div>
    </div>


    <a href="#myCarousel" data-slide="prev"  class="carousel-control-prev">
      <span class="carousel-control-prev-icon"></span>
    </a>

    <a href="#myCarousel" data-slide="next"  class="carousel-control-next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
</section> <!-- showcase -->


<!-- Stiri -->

    <div class="container stiri">
      <h1>Ultimele Stiri</h1>
        <div class="row">

          <?php

          $rezultat = mysqli_query($db, "SELECT * FROM stiri");

          while($row = mysqli_fetch_array($rezultat))
          {

            ?>


            <div class="col-md-4">
            <a href="#"><img class="img-fluid" src="imagini_stiri/<?php echo $row['imagine'];?>"></a>
            <h5 class="stire"><?php echo $row["stire"];?></h5>
          </div>

            <?php

          }


          ?>


        </div>




        <div class="row stire2">







        </div>
    </div> <!-- container -->

    <hr>



   <div class="container clasament">

        <h1>Clasament La Liga</h1>

    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Club</th>
      <th scope="col">MJ</th>
      <th scope="col">V</th>
      <th scope="col">î</th>
      <th scope="col">P</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1  <img src="images/loc1.png">Barcelona</th>
      <td>37</td>
      <td>27</td>
      <td>1</td>
      <td>90</td>
    </tr>

    <tr>
      <th scope="row">2  <img src="images/loc2.png">Atletico Madrid</th>
      <td>37</td>
      <td>23</td>
      <td>5</td>
      <td>78</td>
    </tr>

    <tr>
      <th scope="row">3  <img src="images/loc3.png">Real Madrid</th>
      <td>38</td>
      <td>22</td>
      <td>6</td>
      <td>76</td>
    </tr>



    <tr>
      <th scope="row">4  <img src="images/loc4.png">Valencia</th>
      <td>37</td>
      <td>27</td>
      <td>9</td>
      <td>70</td>
    </tr>




    <tr>
      <th scope="row">5  <img src="images/loc5.png">Villareal</th>
      <td>37</td>
      <td>27</td>
      <td>9</td>
      <td>61</td>
    </tr>





    <tr>
      <th scope="row">6  <img src="images/loc6.png">Real Betis</th>
      <td>37</td>
      <td>27</td>
      <td>14</td>
      <td>60</td>
    </tr>



    <tr>
      <th scope="row">7  <img src="images/loc7.png">Sevilla</th>
      <td>37</td>
      <td>27</td>
      <td>14</td>
      <td>58</td>
    </tr>


    <tr>
      <th scope="row">8  <img src="images/loc8.png">Getafe</th>
      <td>37</td>
      <td>27</td>
      <td>14</td>
      <td>55</td>
    </tr>

    <tr>
      <th scope="row">9  <img src="images/loc9.png">Girona</th>
      <td>37</td>
      <td>27</td>
      <td>15</td>
      <td>51</td>
    </tr>


    <tr>
      <th scope="row">10  <img src="images/loc10.png">Eibar</th>
      <td>37</td>
      <td>27</td>
      <td>1</td>
      <td>50</td>
    </tr>

    <tr>
      <th scope="row">11  <img src="images/loc11.png">Reak Sociedad</th>
      <td>37</td>
      <td>27</td>
      <td>16</td>
      <td>49</td>
    </tr>


    <tr>
      <th scope="row">12  <img src="images/loc12.png">Celta Vigo</th>
      <td>37</td>
      <td>27</td>
      <td>15</td>
      <td>49</td>
    </tr>

    <tr>
      <th scope="row">13  <img src="images/loc13.png">Alaves</th>
      <td>37</td>
      <td>27</td>
      <td>21</td>
      <td>47</td>
    </tr>


    <tr>
      <th scope="row">14  <img src="images/loc14.png">Espanyol</th>
      <td>37</td>
      <td>27</td>
      <td>13</td>
      <td>46</td>
    </tr>


    <tr>
      <th scope="row">15  <img src="images/loc15.png">Levante</th>
      <td>37</td>
      <td>27</td>
      <td>14</td>
      <td>43</td>
    </tr>
  </tbody>
</table>

</div> <!-- container -->

<hr>


<div class="container-fluid palmares">
    <h1 class="text-light">Cupe</h1>
<div class="row">
<div class="col-md-3 col-sm-3">
<figure class="figure">
  <img src="images/worldcup.png"  class="figure-img img-fluid" alt="A generic square placeholder image with rounded corners in a figure.">
 <p style="text-align:center;">Fifa World Club Cup</p>
  <p class="mare" style="text-align:center;">6</p>
</figure>
</div>


<div class="col-md-3 col-sm-3">
<figure class="figure">
  <img src="images/uclcup.png"  class="figure-img img-fluid" alt="A generic square placeholder image with rounded corners in a figure.">
 <p style="text-align: center;">Champions League</p>
  <p class="mare" style="text-align:center;">12</p>
</figure>
</div>



<div class="col-md-3 col-sm-3">
<figure class="figure">
  <img src="images/supercupaeuropa.png"  class="figure-img img-fluid" alt="A generic square placeholder image with rounded corners in a figure.">
 <p style="text-align: center;">Supercupa Europa</p>
  <p class="mare" style="text-align:center;">4</p>
</figure>
</div>



<div class="col-md-3 col-sm-3">
<figure class="figure">
  <img src="images/laligacup.png"  class="figure-img img-fluid" alt="A generic square placeholder image with rounded corners in a figure.">
 <p style="text-align:center; margin-left: 30px">La Liga Cup</p>
  <p class="mare" style="text-align: center; margin-left: 30px;">33</p>
</figure>
</div>


</div> <!--- row -->
</div>
















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
