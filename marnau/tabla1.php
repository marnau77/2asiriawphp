<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tabla dinámica divisores</title>
</head>
<body>
<?php
echo("<?php><?><table border=\"1\">\n");
//cada fila
for($i=0; $i<11 ; $i = $i+1)
{
	echo("<tr>");//dibujamos filas
	if($i==0)//Primera fila
	{
		for($j=-1; $j<11; $j = $j +1)
		{
			if($j == -1)
			{
				echo("<td bgcolor=\"#7777FF\"></td>");
			}
			else
			{
				echo ("<td bgcolor=\"#CCAAFF\">");
				echo ($j+50);
				echo ("</td>");
			}
		}
	}

	//Resto de filas
	else //Por cada fila
	{
		//Primera celda que muestra el n�mero
		echo ("<td bgcolor=\"#CCAAFF\">");
		echo ($i);
		echo ("</td>");
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
		for($j=0; $j<11; $j=$j+1)
		{
			//Si divisible  *
			if( (($j+50)%$i) == 0)
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
	echo("</tr>");//terminamos de dibujar fila
}//fin for
echo("</table>");//terminamos la tabla
?>
</body>
</html>
