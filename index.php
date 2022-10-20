<?php

require_once("config.php");

/* retorna apenas o usuário do id
$root = new Usuario();
$root->loadbyId(3);

echo $root;*/


//carrega uma lista de usuários
/*$lista = Usuario::getList();

echo json_encode($lista);*/

//carrega uma lista pelo login

/*$search = Usuario::search("ri");

echo json_encode($search);*/

//carrega um usuário usando o login e a senha

/*$usuario = new Usuario();
$usuario->login("odaias","sadafaf");

echo $usuario;
*/

//$aluno = new Usuario("aluno","@aluno");


//$aluno->insert();

$usuario = new Usuario();

$usuario->loadById(2);
$usuario->update("professor","adsdafagaw");

echo $usuario;
?>