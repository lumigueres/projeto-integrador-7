<?php include 'functions.php'; ?>
<?php include 'definitions.php'; ?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
    <title>maxperience</title>
</head>

<body>
<!-- header e menu -->
<div class="row">
  <header class="main-header text-center btn-group">
    <img class="logo" src="images/logo_maxperience.png" alt="logotipo" class="logo img-circle">
</header>

<div class="menu">
    <nav class="main-nav navbar navbar-default">
      <ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="#">Home</a></li>
  <?php  foreach ($list as $item) { ?>
      <li role="presentation"><a href="#">Página <?php echo $item; ?></a></li>
  <?php } ?>

</ul>

</nav>
</div>
</div>

<!-- categorias de experiências -->
<div class="container">

<section class="vip-products row">
  <?php  foreach ($experienciasJson["experiencias"] as $experiencia) {
    buildExperience($experiencia);
  } ?>

</section>


<!-- footer -->
<ul class="nav nav-pills">
  <li role="presentation"><a href="#">QUEM SOMOS</a></li>
  <li role="presentation"><a href="#">FAQ</a></li>
</ul>

</div>

  <script
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
