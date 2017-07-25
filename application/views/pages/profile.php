<html>
<head>
	<title><?php echo $_SESSION['fname']?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!--scripts-->
		<script type="text/javascript" src="<?= $js ?>/jquery-3.2.1.js"></script>
		<script type="text/javascript" src="<?= $js ?>/materialize.js"></script>
		<script type="text/javascript" src="<?= $js ?>/account.js"></script>
		<script>var path="<?=$path?>"</script>

		 <!--stylesheet-->
		<link rel="stylesheet" href="<?= $css ?>/account.css">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">
	    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!-- Materialize Icons -->
 
	<script>
	$(document).ready(function() {

        $('#logoutbtn').on('click', function (e) {
        	          e.preventDefault();
        	 console.log("hello");
			var url="<?=$base_url?>";
		 	var url = path+"/logout";
		 	console.log(url);
  			window.location.href = url; 
          });

        });
	</script>

   
</head>

<!-- Dropdown Structure -->
		<ul id="dropdown1" class="dropdown-content" option="open"s>
		  <li><a href="#!">Account</a></li>
		  <li><a href="#!">Change Password</a></li>
		  <!-- s -->
		  <li><a href="#!" id="logoutbtn">Logout</a></li>
		</ul>

<!--navbar section-->
<nav>
  <div class="nav-wrapper #00bcd4 cyan">
  	<div class="container">
  	<a id="logo-container" href="<?= base_url() ?>">
			<img class="brand-logo" src="<?= $images; ?>/thekochi.png" alt="theKochi">
    </a>
    <ul class="right hide-on-med-and-down">
      <li><a href="<?= base_url().$_SESSION['name'] ?>"><?= $_SESSION['fname'] ?></a></li>
      <li><a href="<?= base_url()?>">What's Happening?</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" data-beloworigin="true" data-constrainWidth="false"  href='#' data-activates='dropdown1'><i class="material-icons">settings</i></a>
      </li>
    </ul>
   </div>
  </div>
</nav>

<!--content section-->

<body>

<div class="container"> 
<div class="divider"></div>


<div class="divider"></div>
  <ul class="collection">
      <li class="collection-item">something</li>
      <li class="collection-item">something</li>
      <li class="collection-item">something</li>
      <li class="collection-item">something</li>
    </ul>
          
</div> <!--container-->
</body>
</html>
