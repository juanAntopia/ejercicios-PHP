<?php

if(isset($_GET['numero1']) && isset($_GET['numero2']))
{
	$numero1=$_GET['numero1'];
	$numero2=$_GET['numero2'];

	if($numero1 < $numero2)
	{
		for($i=$numero1; $i<=$numero2; $i++)
		{
			if($i%2 !=0)
			{
				echo "<h2>$i Es impar</h2>";
			}else{
				echo "<h2>$i Es par</h2>";
			}
		}		
	}else{
		echo "<h1>El valor número 1 debe ser menor que el valor número 2</h1>";
	}
}else{
	echo "los valores GET no existen";
}


?>