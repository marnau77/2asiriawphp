<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tabla dinámica divisores</title>
<body>
<td bgcolor="#FFFF99">
<?php
include recupera.php;

$div_1= recoge("dividendo_1");
$div_2= recoge("dividendo_2");
$limite =(($div_2-$div_1)+1);
$div_1_Ok = false;
$div_2_Ok = false;

if ($div_1 == "") {
    print "<p class=\"aviso\">No ha escrito el primer dividendo.</p>\n";
} elseif (!ctype_digit($div_1)) {
    print "<p class=\"aviso\">No ha escrito el primer dividendo como número entero positivo.</p>\n";
} else {
	$div_1_Ok=true;
}

if ($div_2=="") {
    print "<p class=\"aviso\">No ha escrito el segundo dividendo.</p>\n";
} elseif (!ctype_digit($div_2)) {
    print "<p class=\"aviso\">No ha escrito el segundo dividendo como número entero positivo.</p>\n";
} else {
	$div_2_Ok = true;
}

if ($div_1_Ok && $div_2_Ok) 
{
   
 //Se empieza a crear la tabla

echo("<?php><?><table border=\"1\">\n");
//cada fila
for($i=0; $i<$limite ; $i = $i+1)
{
	echo("\t<tr>\n");//dibujamos filas
	if($i==0)//Primera fila
	{
		for($j=-1; $j<$limite; $j = $j +1)
		{
			if($j == -1)
				{
				echo("\t\t<td bgcolor=\"#7777FF\"></td>\n");
				}
			else
				{
				echo ("\t\t<td bgcolor=\"#CCAAFF\">\n");
				echo ($j+$div_1);
				echo ("</td>\n");
				}
		}
	}
		
	//Resto de filas
	else //Por cada fila
	{
		//Primera celda que muestra el número
	    	echo ("\t\t<td bgcolor=\"#CCAAFF\">");
		echo ($i);
		echo ("</td>\n");
	//Seleccionamos el color

		if($i%2==0)
			{
			$color = "#FFDDAA";
			}
		else
			{
			$color = "#FFFFAA";
			}
		//Resto de columnas
		for($j=0; $j<$limite; $j=$j+1)
		{
		//Si divisible  *
			if( (($j+$div_1)%$i) == 0)
				{
				echo("<td bgcolor=\"$color\" >*</td>");
				}
			else
		// Si no divisible -
				{
				echo("<td bgcolor=\"$color\" >-</td>");
				}
		}
	}//fin else resto de filas
	echo("\t</tr>\n\n");//terminamos de dibujar fila
  }//fin for
 echo("</table>");//terminamos la tabla
}//primer if
//else{
//
//    echo("<p><a href="divisores-1.html">Volver al formulario</a></p>");
//}
?>
</body>
</html>
