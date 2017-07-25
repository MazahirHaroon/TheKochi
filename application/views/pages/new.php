<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_SESSION['fname']?></title>
</head>
<body>

<h3> Hello, <?php echo $_SESSION['fname'] ?></h3>
<button onclick="logout()">Logout</button>
</body>
<script>
	function logout(){
		var url="<?=$base_url?>";
  		console.log(url);
  		window.location.replace(url);
	}
</script>
</html>