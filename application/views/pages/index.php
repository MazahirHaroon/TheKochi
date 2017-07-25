<html>
<head>
	<title>theKochi</title>
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
 			
 		<!-- favicons -->	
 		<link rel="apple-touch-icon" sizes="57x57" href="<?= $images ?>/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?= $images ?>/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?= $images ?>/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?= $images ?>/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?= $images ?>/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?= $images ?>/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?= $images ?>/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?= $images ?>/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?= $images ?>/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?= $images ?>/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?= $images ?>/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?= $images ?>/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?= $images ?>/favicon/favicon-16x16.png">
		<link rel="manifest" href="<?= $images ?>/favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?= $images ?>/favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

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
	    <div class="row">
	        <div class="col s6 offset-s3">
    	      <div class="card">
        	    <div class="card-image">
            	  <img src="<?= $images; ?>/Comics.jpg">
            	</div>
              <div class="card-content">
                <span class="card-title text-red">Wonder Woman Day</span>
                <p>I am a very simple card. I am good at containing small bits of information.
                I  am convenient because I require little markup to use effectively.</p>
              </div>
              <div class="card-action">
                <a href="#">This is a link</a>
              </div>
          	 </div>
            </div>
        </div>

		   
<!-- 			<div class="card small">
			<div class="card-image waves-effect waves-block waves-light">
				<img class="activator" src="<?= $images; ?>/Comics.jpg">
			</div>
			<div class="card-content">
			    <span class="card-title activator grey-text text-darken-4">Wonder Woman Day<i class="material-icons right">more_vert</i></span>
			</div>
	        <div class="card-reveal">
	     	    <span class="card-title grey-text text-darken-4"><a href="https://www.facebook.com/keralacomicsbrotherhood/">Kerala Comics Brothehood</a><i class="material-icons right">close</i></span>
			    <p>From the people who brought you the first Comic book Event in Kerala, comes an Event to Celebrate the 75th Year of Wonder Woman in Comics and her first appearance in Movies this year.
				DC Comics is celebrating 3rd of June as Wonder Woman Day and It will be a chance for all the fans of comics in Kerala to come together, meet, greet and celebrate their love for the character.</p>
				<ul>
				<li>Venue : Big Fat Momo, Ernakulam </li>
				<li>Time: 4.00 P.M.</li>
				<li>Stay stuned to theKochi.com</li>
				</ul>
			</div>
			</div> -->
	<!-- 	</div> -->
	
	</div>
          
</div> <!--container-->
</body>
</html>
