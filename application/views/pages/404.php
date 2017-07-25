
<html>

<head>
  <title>404 - The Kochi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="<?= $js ?>/jquery-3.2.1.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <!-- <link rel="stylesheet" href="<?= $css ?>/app.css"> -->
  <link rel="stylesheet" href="<?= $css ?>/404.css">
  <script>
    var path = "<?=$path?>";
    var base = "<?=site_url()?>"

  </script>

<style>
h1,h4{
  color: white;s
}
</style>

</head>
<nav class="transparent z-depth-0">
  <div class="nav-wrapper container">
    <a id="logo-container" href="<?= base_url() ?>">
      <img class="brand-logo" src="<?= $images; ?>/thekochi.png" alt="theKochi">
    </a>
  </div>
</nav>

<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- ####################################################################################################### -->
    <!-- ####################################################################################################### -->
    <!-- ####################################################################################################### -->
    <!-- ####################################################################################################### -->
    <section id="fof" class="clear">
      <!-- ####################################################################################################### -->
      <a class="go-back" href="javascript:history.go(-1)">Return<br>&laquo;</a>
      <div class="positioned">
        <h1>404 Error !</h1>
        <h4>Sorry, the page is not in <strong>theKochi<strong> yet</h4>
      </div>
      <a class="go-home" href="<?= base_url() ?>">To Kochi<br>&raquo;</a>
      <!-- ####################################################################################################### -->
    </section>
    <!-- ####################################################################################################### -->
    <!-- ####################################################################################################### -->
    <!-- ####################################################################################################### -->
    <!-- ####################################################################################################### -->
  </div>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
<script src="<?= $js ?>/jquery-ui.min.js"></script>


</html>
