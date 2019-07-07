<?php 
/*tabla de multiplicar con HTML y php */
echo "<table border='1'>";
		echo "<tr>";
			for($cabecera = 1; $cabecera<=10; $cabecera++)
			{
				echo "<td><h4>Tabla del $cabecera</h4></td>";
			}
		echo "</tr>";

		echo "<tr>";
			for($i=1; $i<=10; $i++)
			{
				echo "<td>";
					$j=1;
					while($j<=10)
					{
						echo "$j x $i = ".($j * $i)."<br/>";
						$j++;
					}
				echo "</td>";	
			}
		echo "</tr>";

echo "</table>";

?>