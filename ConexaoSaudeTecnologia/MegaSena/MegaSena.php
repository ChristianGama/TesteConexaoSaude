<?php 

	$apostas = array();

	function sorteio($qtde, $min, $max, $nDez)
	{
		$vetorRandom = array();
		$temp = array();
		$numero;
		
		
		for($i = 0; $i < $qtde; $i++)
		{
			for($j = 0; $j < $nDez; $j++)
			{			
				$numero = mt_rand ($min, $max);

				if($j > 0)
				{
					while (in_array($numero, $temp)) 
					{
						$numero = mt_rand ($min, $max);
					}					
				}

				$temp[$j] = $numero;

			}	

			sort($temp);	

			if(in_array($temp, $vetorRandom))
				$i--;
			else
				$vetorRandom[$i] = $temp;
		}

		return $vetorRandom;
	}

	function gerarTabela($qtde, $lin, $col, array $apostas)
	{
		for ($i=0; $i < $qtde; $i++) { 
			
			echo '<table>';

			for ($j=0; $j < $lin; $j++) 
			{ 
				echo '<tr>';

				for ($k=0; $k < $col; $k++) 
				{ 
					if(in_array((10*($j))+($k+1), $apostas[$i]))
						echo '<td><font color="0000FF">'.((10*($j))+($k+1)).'</font></td>';
					else
						echo '<td>'.((10*($j))+($k+1)).'</td>';
				}
				echo '</tr>';
			}

			echo '</table>';

		}
	}

	$apostas = sorteio(3, 1, 60, 6);
	gerarTabela(3, 6, 10, $apostas);

	var_dump($apostas);

?>