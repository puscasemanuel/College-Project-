



  <nav class="navbar navbar-expand-lg  navbar-light fixed-top cl-effect-3" id="nav">
    <div class="container">


      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav pull-sm-left">
          <li class="nav-item ">
            <a class="nav-link" href="index.php">Acasa<span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item">
              <a class="nav-link" href="echipa.php">Echipa</a>
          </li>

          <li class="nav-item">
              <a class="nav-link" href="admin/acasa.php">Admin</a>
          </li>


        </ul>

        <ul class="navbar-nav navbar-logo mx-auto">
          <li class="nav-item">
              <img src="images/logonav.png" class="logonav" alt="">
          </li>
        </ul>

        <ul class="navbar-nav pull-sm-right">
          

          <li class="nav-item">
              <a class="nav-link" href="login.php"><i class="fas fa-user"></i> Autentificare</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="register.php"><i class="fas fa-user-plus"></i> Inregistrare</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<script>


  $(document).ready(function () {
    $('.dropdown-toggle').dropdown();
  });

</script>
