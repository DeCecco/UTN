<?php require 'functions.php'; ?>
<html>
<head>
	<title>Primer Repositorio</title>
</head>
<?php echo mheader(); ?>
<body>

<?php

	$html="";	
	$data="";	
	
	//for($i=1;$i<7;$i++){
	$html="";
	$html= "<div><p>".geninput("type='text'  value=''","nombre","Nombre")."<br></p></div>";
	$html= $html . "<div><p>" . geninput("type='text'  value=''","apellido","Apellido")."<br></p></div>";
	$html= $html . "<div><p>" . geninput("type='number' value=''","telefono","Tel")."<br></p></div>";
	$html= $html . "<div><p>" . geninput("type='text' value=''","email","Email")."<br></p></div>";
	$html= $html . "<div><p>" . geninput("type='password' value=''","pass1","Password")."<br></p></div>";
	$html= $html . "<div><p>" . geninput("type='password' value=''","pass2","Password")."<br></p></div>";
	echo $html;
	//}









	
?>
<?php echo footer();?>
</body>
</html>