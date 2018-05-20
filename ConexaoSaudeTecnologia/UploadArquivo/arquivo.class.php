<?php 

	Class Arquivo
	{
		private $conteudo;

		function carregarConteudo($caminhoArquivo)
		{
			echo'<pre>';
			echo ($caminhoArquivo);
			echo'<pre>';

			$conteudo ="";
			$fp = fopen($caminhoArquivo, "r");

			while (!feof ($fp)) 
				$conteudo = $conteudo . fgets($fp);		

			$this->conteudo = $conteudo;		

			fclose($fp);	
		}		

		function visualizarAtributo()
		{
			echo $this->conteudo;
		}


		function getConteudo() {
	        return $this->conteudo;
	    }

	    function setConteudo($conteudo) {
	        $this->conteudo = $conteudo;
	    }

	}

?>