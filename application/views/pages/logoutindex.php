<html>
<head>
	<title><?php echo $_SESSION['vid']?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="<?= $js ?>/jquery-3.2.1.js"></script>
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
          $('#login').on('click', function (e) {
        	          e.preventDefault();
        	 console.log("hello");
			var url="<?=$base_url?>";
		 	//var url = path+"/";
		 	console.log(url);
  			window.location.href = url; 
          });


        });
</script>
<style>
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">

<script>var path="<?=$path?>"</script>
</head>
<body>
<div class="container">
<button id="login">Login To See more</button>
<h3><?php echo $_SESSION['vid'] ?></h3>
</div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
</html>
