<?php
  
  $to = "infor@bluesea.com";

// Recoger datos de formulario
  $name = $_POST["name"];  
  $email = $_POST["email"];
  $phone = $_POST["phone"];  
  $msg = $_POST["msg"];

  $contenido = "Nombre y Apellido: " . $name . "\nEmail: " . $email . "\nTeléfono: " . $phone . "\nMensaje: " . $msg;

  mail($to,"Le han contactado desde su web", $contenido);

  if (!empty($_POST["name"]) || !empty($_POST["email"]) || !empty($_POST[phone]) || !empty($_POST["msg"]) ) {
      header("Location: contacto.html?success=Mensaje%20Enviado%20");
  }else{
    header("Location: contacto.html?error=Error%20de%20conexion");
  }
  
  




 ?>