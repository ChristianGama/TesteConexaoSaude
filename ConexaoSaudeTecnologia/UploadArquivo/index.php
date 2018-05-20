<?php 

	require 'arquivo.class.php';

	$arquivo = new Arquivo();
	
	echo '<form action="#" method="POST" enctype="multipart/form-data">
		      <input type="file" name="arquivoUpload">
		      <input type="submit" value="Enviar">
		   </form>';

	if(isset($_FILES['arquivoUpload']))
	{
		$new_name = strtolower($_FILES['arquivoUpload']['name']); 
		$dir = './'; 

		move_uploaded_file($_FILES['arquivoUpload']['tmp_name'], $dir . $new_name); 

		$arquivo->carregarConteudo($dir . $new_name);
		$arquivo-> visualizarAtributo();		
	}

?>