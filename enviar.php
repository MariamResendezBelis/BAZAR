<?php 
$destino= "Mariamrebe@hotmail.com";
$Nombre= $POST["Nombre"];
$Correo= $POST["Correo"];
$Mensaje= $POST["Mensaje"];
$contenido = "Nombre: ". $Nombre . "\nCorreo: " .$Correo . "\nMensaje:" .$Mensaje;
mail($destino, "contacto", $contenido);
header("location:gracias.html");
<?