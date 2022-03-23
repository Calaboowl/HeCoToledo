<?php
if(isset($_POST['email'])) {

$email_to = "carmen.bueno.iglesias@gmail.com";
$email_subject = "Mensaje de WEB HECOTOLEDO";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['fullName']) ||
!isset($_POST['entity']) ||
!isset($_POST['email']) ||
!isset($_POST['telephone']) ||
!isset($_POST['comments'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['fullName'] . "\n";
$email_message .= "Entidad: " . $_POST['entity'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Teléfono: " . $_POST['telephone'] . "\n";
$email_message .= "Comentarios: " . $_POST['comments'] . "\n\n";

// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'De: '.$email_from."\r\n".
'Responder a: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
}
?>
