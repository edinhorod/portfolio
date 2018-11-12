<?php

# Try running this locally.
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('key-731a21d75e398f9071534c5947916088');
$domain = "poprepasse.com.br";

$name = @trim(stripslashes($_POST['name']));
$email = @trim(stripslashes($_POST['email']));
$phone = @trim(stripslashes($_POST['phone']));
$message = @trim(stripslashes($_POST['message']));

$body = 'Nome: ' . $name . "\n\n" . 'E-mail: ' . $email . "\n\n" .'Telefone: ' . $phone . "\n\n" . 'Mensagem: ' . $message;

# Make the call to the client.
$result = $mgClient->sendMessage($domain,
	array('from'    => 'Site <edinho_rodrigues@hotmail.com>',
          'to'      => 'Site <edinho_rodrigues@hotmail.com>',
          'subject' => 'Site - Contato site',
          'text'    => $body));

?>
