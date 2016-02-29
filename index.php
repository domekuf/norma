<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<link rel="stylesheet" href="font-awesome/css/font-awesome.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<style>
div{
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
}

</style>
</head>
<body>

<div class="container">
	<h1>Associazione Norma</h1>
		<div class="well" id="menu">
		<?
		include('lib/menu.php');
		?>
			<a dest="container" meth="GET" class="btn btn-primary" href="http://www.google.com">Registrati</a>
		</div>
		<div class="panel-body">
			<div id="container">
			</div>	
		</div>	
		<div class="panel panel-default">
		</div>
	</div>
</div>

<script src="js/ajax_setup.js"></script>
<script>
	ajax_setup();
</script>
</body>

