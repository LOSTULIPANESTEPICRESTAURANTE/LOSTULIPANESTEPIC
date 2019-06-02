<?php
$destino="tepiclostulipanes@gmail.com"
$Nombre= $_POST["Nombre"];
$Correo= $_POST["Correo"];
$Teléfono= $_POST["Teléfono"];
$Pedido= $_POST["Pedido"];
$contendio="Nombre:" . $Nombre . "\ nCorreo:". $Correo . "\nTeléfono:" . $Teléfono . "\nPedido:" .$Pedido;
mail($destino,"Contacto", $contenido);
header("Location:gracias.html");	
?>
