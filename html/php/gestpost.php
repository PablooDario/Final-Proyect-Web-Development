<?php
  foreach($_POST as $nombre_campo => $valor){ 
		$asignacion = "\$".$nombre_campo."='".trim($valor)."';"; 
		eval($asignacion); 
  }
  #Obtiene los post que se envian, sirve como funcion.
?> 