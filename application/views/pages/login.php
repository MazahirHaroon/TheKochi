<html>

<head>
	<title>The Kochi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="<?= $js ?>/jquery-3.2.1.js"></script>
	<script>
	$(document).ready(function() {

        $('#loginbtn').on('click', function (e) {
          document.getElementById("errorp").classList.add("hiddendiv");
          document.getElementById("not_user").classList.add("hiddendiv");
          document.getElementById("errorr").classList.add("hiddendiv");
          document.getElementById("success").classList.add("hiddendiv");	
          e.preventDefault();
          console.log("insidel");
		  var path="<?=$path?>";
		  var url = path+"/LoginProcess";
          $.ajax({
            type: 'post',
            url: url,
            data: $('#loginform').serialize(),
            success: logUser,
          });

        });
         $('#regbtn').on('click', function (e) {
          e.preventDefault();
          console.log("insideaa");
		  var path="<?=$path?>";
		  var url = path+"/RegProcess";
          $.ajax({
            type: 'post',
            url: url,
            data: $('#regform').serialize(),
            success: raddUser,
            });

           });

           $('#nowlogin').on('click', function (e) {
          e.preventDefault();
		  var path="<?=$path?>";
		  var url = path+"/LoginProcess";
          $.ajax({
            type: 'post',
            url: url,
            data: $('#regform').serialize(),
            success: logUser,
          });

        });


      });

    </script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link rel="stylesheet" href="<?= $css ?>/app.css">
	<script>
		var path = "<?=$path?>";
		var base = "<?=site_url()?>"

	</script>
</head>
<nav class="transparent z-depth-0">
	<div class="nav-wrapper container">
		<a id="logo-container" href="<?= base_url() ?>">
			<img class="brand-logo" src="<?= $images; ?>/thekochi.png" alt="theKochi">
		</a>
	</div>
</nav>

<body>
	<div class="container">
		<div class="row">
			<div class="col s12 m6 l6">
				<div class="card-panel transparent z-depth-0">
					<span class="white-text">
						<h3>
							For all things Kochi.
						</h3>
						<p id="maintext" class="flow-text">
							Join thousands of people in <strong>theKochi</strong> community to get realtime updates on the happenings in and around <strong>Kochi!</strong>
						</p>
					</span>
				</div>
			</div>
			<div class="col s12 m6 l6">
				<div class="card">
					<div class="card-content">
						<h2 id="formhead">Login</h2>
					</div>
					<div class="card-tabs">
						<ul class="tabs">
							<li class="tab"><a id="tablog" class="active" href="#login">Login</a></li>
							<li class="tab"><a id="tabreg" href="#reg">Register</a></li>
						</ul>
					</div>
					<div class="card-content grey lighten-4">
						<div id="login">
							<form id="loginform">
								<div id="formrow" class="row">
									<div class="input-field col s12">
										<input name="usernamer" id="login-name" type="text">
										<label for="login-name">Username</label>
									</div>
								</div>
								<div id="formrow" class="row">
									<div class="input-field col s12">
										<input name="passwordr" id="login-pass" type="password">
										<label for="password">Password</label>
										<p id="message" class="bg-danger"></p>
										<a class="login-link" href="#/">Lost your password?</a>
									</div>
								</div>
								<div id="errorp" class="hiddendiv">
									  <strong></i>Wrong password. Try again</strong><br>
									  Not <a href="<?= base_url() ?>" id="other_user"></a> 
								</div>
								<div id="not_user" class="hiddendiv">
									  <strong></i>Coudn't find your <font size="3px">theKochi</font> account</strong><br>
									  <a href="" onclick="toreg()"  id="not_user">Create an account</a> 
								</div>

								<div id="formrow" class="row">
									<a id="loginbtn" class="right waves-effect waves-green btn-flat">Login</a>
								</div>
							</form>
						</div>
						<div id="reg">
							<form id="regform">
								<div id="formrow" class="row">
									<div class="input-field col s12">
										<input name="fnamer" id="fnamer" type="text">
										<label for="fName">Full Name</label>
									</div>
								</div>
								<div id="formrow" class="row">
									<div class="input-field col s6">
										<input name="usernamer" id="usernamer" type="text" class="validate">
										<label data-error="Username already taken!" for="usernamer">Username</label>
									</div>
									<div class="input-field col s6">
										<input name="phoner" id="phoner" type="text" class="validate">
										<label data-error="Invalid Mobile Number!" for="phoner">Phone</label>
									</div>
								</div>
								<div id="formrow" class="row">
									<div class="input-field col s12">
										<input name="emailr" id="emailr" type="email" class="validate">
										<label data-error="Not a valid email" for="emailr">Email</label>
									</div>
								</div>
								<div id="formrow" class="row">
									<div class="input-field col s6">
										<input name="passwordr" id="passwordr" type="password" class="validate">
										<label data-error="Password too short!" for="passwordr">Password</label>
									</div>
									<div class="input-field col s6">
										<input name="passwordrc" id="passwordrc" type="password" class="validate">
										<span id="passwordnomatch" style="color: red;"></span>
									</div>
								</div>
									<div id="formrow" class="row">
									<div id="errorr" class="hiddendiv">
									<strong><i class="material-icons">&#xE000;</i>Error creating account!</strong>, Please try again
									</div>
									<div id="success" class="hiddendiv">
									<div class="alert success">
									<strong>Success!<a class="btn right white-text blue" id="nowlogin">Login</a>
									
									</div>
									</div>
									</div>

									<div id="regb">
									<div id="formrow" class="row">
									<div class="input-field col s6">
										<a id="reg-link" href="<?= base_url() ?>">Already a member?</a>
									</div>
									<div class="input-field col s6">
										<a id="regbtn" class="right waves-effect waves-green btn-flat">Register</a>
									</div>
									</div>
									</div>

									</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<script>
	var close = document.getElementsByClassName("closebtn");
	var i;
	for (i = 0; i < close.length; i++) {
	    close[i].onclick = function(){
	        var div = this.parentElement;
	        div.style.opacity = "0";
	        setTimeout(function(){ div.style.display = "none"; }, 600);
	    }
	}

function logUser(data,status){
	if(data=='incorrect username or password'){
  		 document.getElementById("errorp").classList.remove("hiddendiv");
  		 var other_user = document.getElementById("loginform").elements.namedItem("usernamer").value; 
  		 console.log("other ".other_user);
  		 document.getElementById("other_user").innerHTML = other_user;
  	}else if(data=='not_user') {
  		document.getElementById("not_user").classList.remove("hiddendiv");
	  }else{
	  		var url="<?=$base_url?>";
	  		console.log(url);
	  		// window.location.replace(url);
	  		window.location.href = url;
	  	}
  }
  function raddUser(data,status){
    
    if(data=='Passwords do not match'){
      document.getElementById("passwordnomatch").innerHTML = data;
    }else if(data=='Error creating account!, Please try again'){
       document.getElementById("errorr").classList.remove("hiddendiv");
    }else{
      document.getElementById("success").classList.remove("hiddendiv");
      document.getElementById("regb").classList.add("hiddendiv");
    }
  }	

 function toreg(){
 	console.log("noo");
 	window.location.replace("https://thekochi.herokuapp.com/#reg");
 }


</script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
<script src="<?= $js ?>/jquery-ui.min.js"></script>


</html>
