<?PHP
$name = $_POST[name];
$email= $_POST[email];
$message= $_POST[message];

// Coloque a mensagem que irá ser enviada para seu e-mail abaixo: 
$mensagem = $name ."</br>". $email ."</br>". $message; 

//Este loop coloca todos os campos do formulário na mensagem do e-mail a ser enviado 
while(list($campo, $valor) = each($HTTP_POST_VARS)) { 
$mensagem .= ucwords($campo).": ".$valor."\n";
} 

// Agora iremos fazer com que o PHP envie os dados do formulário para seu e-mail: 
mail("vendas@noobox.org", "Assunto do E-mail", $mensagem, "From: $REMOTE_ADDR"); 

header('Location: contato-sucess');
?>
