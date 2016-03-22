<?php require 'functions.php'; ?>
<html>
<head>
	<title>Primer Repositorio</title>
		<?php echo head();?>
</head>
<?php echo mheader(); ?>
<body>

<?php

	$html="";	
	$data="";	
	$formulario="";
	
	//for($i=1;$i<7;$i++){
	$html="";
	
	//$html="<table width='100%'>";
	$html=$html . "<div><p>".geninput("  value=''","text","nombre","Nombre")."<br></p></div>";
	$html= $html . "<div><p>" . geninput("  value=''","text","apellido","Apellido")."<br></p></div>";
	$html= $html . "<div><p>" . geninput(" value=''","number","telefono","Tel")."<br></p></div>";
	$html= $html . "<div><p>" . geninput(" value=''","text","email","Email")."<br></p></div>";
	$html= $html . "<div><p>" . geninput(" value=''","password","pass1","Password")."<br></p></div>";
	$html= $html . "<div><p>" . geninput(" value=''","password","pass2","Password")."<br></p></div>";
	$html= $html . "<div><p>" . geninput(" value='Enviar'","Submit","btn","")."<br></p></div>";
	//$html=$html . "</form>";
	//$html=$html . "</table>";

	$formulario=genform($html);
	echo gentabla('100%','100%',"",$formulario);
	// $html;

	//echo $_POST["apellido"];

	//}









	
?>
<?php echo footer();?>
</body>
</html>