<?php
echo "<a href='index.php'>Voltar</a><br>";
	function geraCSS(){
	$marcador = $_POST['marcador'];
	$atributos = $_POST['atributos'];
	$testestr="color";
	$color = $_POST['color'];
	switch($atributos){
		case strpos($atributos,"color")!==false:
		 echo $marcador;
	 echo "{";
	 	echo"<br>".nl2br(str_replace("color", "color:$color;",$atributos)."\n");
	 echo "}";
	 break;
	 case strpos($atributos,"background-color")!==false:
	   echo $marcador;
	 echo "{";
	 	echo"<br>".nl2br(str_replace("background-color", "background-color:$color;",$atributos)."\n");
	 echo "}";
	 break;
	 default:
	  echo $marcador;
	 echo "{";
	 	echo"<br>".nl2br($atributos."\n");
	 echo "}";
	}	
	}

	geraCSS();
?>

