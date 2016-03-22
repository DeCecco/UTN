<?php

function genform($dat){
	$html="";
	$html="<form>".$dat."</form>";
}
function geninput($datos,$id,$nombre){

	$html="";
	$html=$nombre.": <input ".$datos.$id.">";

	return $html;
}
function head(){
	$html="";
	$html = "<link type'text/css' href='style/style.css' />";
	return $html;
}
function mheader(){

$menu="<div><a href='index.php'>Inicio</a> ";
$menu=$menu . "<a href='registro.php'>Registro</a> ";
$menu=$menu . "<a href='login.php'>Ingresar</a></div>";


$html = "";


$html=$html . " <table width='100%' border='1' height='153'> ";
$html=$html . "   <tr class='topheader' height=''> ";
$html=$html . "     <td width='12%' height='53px' align='center' valign='middle' bgcolor='#2B3843'><span class='mheader'>---</span></td> ";
$html=$html . "     <td width='55%' align='center' valign='middle' bgcolor='#2B3843'>&nbsp;</td> ";
$html=$html . "     <td width='33%' align='center' valign='middle' bgcolor='#2B3843'><span class='mheader'>redessociales</span></td> ";
$html=$html . "     <td bgcolor='#2B3843'>search ";
$html=$html . "     </td> ";
$html=$html . "   </tr> ";
$html=$html . "   <tr height=''> ";
$html=$html . "     <td height='127px' align='center' valign='middle' bgcolor='#3E5062'><span class='mheader'>logo</span></td> ";
$html=$html . "     <td colspan='3' align='center' valign='middle' bgcolor='#3E5062'><span class='mheader'>". $menu ."</span></td> ";
$html=$html . "   </tr> ";
$html=$html . " </table> ";


return $html;
}

function footer(){

$html="";
$html=$html . " <table width='100%' border='1'> ";
$html=$html . "   <tr class='footer'> ";
$html=$html . "     <td width='22%' height='179' bgcolor='#232323'>&nbsp;</td> ";
$html=$html . "     <td width='45%' bgcolor='#232323'>&nbsp;</td> ";
$html=$html . "     <td width='33%' bgcolor='#232323'>&nbsp;</td> ";
$html=$html . "   </tr> ";
$html=$html . "   <tr> ";
$html=$html . "     <td height='22' bgcolor='#232323' class='design'>&nbsp;</td> ";
$html=$html . "     <td colspan='2' bgcolor='#232323' class='socialred'>&nbsp;</td> ";
$html=$html . "   </tr> ";
$html=$html . " </table> ";

return $html;

}

?>