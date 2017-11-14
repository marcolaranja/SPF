<!DOCTYPE html>
<html>
<head>
  <title>Super Professional Fighters</title>
  <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<body>

  <?php include('./header.php'); ?>

  <div class="container">
    <h1 class="text-center">Super Professional Fighters <br><small>Escolha o seu profisonal</small></h1>

    <img src="./assets/images/banner-home.jpg" class="img-responsive center-block">

    <br clear="all" />

    <div class="col-md-6 col-md-offset-3">
      <div class="row">

        <div class="col-md-6">
          <a href="#" class="btn btn-success btn-lg btn-block">Personagens</a>
        </div>

        <div class="col-md-6">
          <a href="#" class="btn btn-info btn-lg btn-block">Sobre</a>
        </div>

      </div>
    </div>

  </div>
  
  <br clear="all" />

  <?php include('./footer.php'); ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="./bootstrap/js/bootstrap.js" type="text/javascript"></script>
  <script type="text/javascript">
    
    $(document).ready(function(){

      $('#footer-personagens').hover(function(){
        alert('Selecione seu personagem');
      });

    });

  </script>
</body>
</html>