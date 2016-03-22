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
	$html=$html . "<div><p>".geninput("  value=''","text","nombre","Nombre:")."<br></p></div>";
	$html= $html . "<div><p>" . geninput("  value=''","text","apellido","Apellido:")."<br></p></div>";
	$html= $html . "<div><p>" . geninput(" value=''","number","telefono","Tel:")."<br></p></div>";
	$html= $html . "<div><p>" . geninput(" value=''","number","edad","Edad:")."<br></p></div>";
	$html= $html . "<div><p>" . geninput(" value=''","checkbox","m","Masculino")."";
	$html= $html . geninput(" value=''","checkbox","f","Femenino")."<br></p></div>";
	$html= $html . "<div><p>" . geninput(" value=''","number","dni","DNI:")."<br></p></div>";
	$html= $html . "<div><p>" . geninput(" value='DNI'","radio","t1","Tipo:    DNI");
	$html= $html . geninput(" value='CI'","radio","t2","CI");
	$html= $html . geninput(" value='LE'","radio","t3","LE")."<br></p></div>";	
	$html= $html . "<div><p>" . geninput(" value=''","text","email","Email:")."<br></p></div>";
	$html= $html . "<div><p>" . geninput(" value=''","password","pass1","Password:")."<br></p></div>";
	$html= $html . "<div><p>" . geninput(" value=''","password","pass2","Password:")."<br></p></div>";
	$html= $html . "<div><p>" . geninput(" value='Recargar'","reset","reset","");
	$html= $html . geninput(" value='Enviar'","Submit","btn","")."<br></p></div>";

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