<?php

require_once("config.php");

# AULA S13A62: PDO - DAO
//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

# AULA S13A63: PDO - DAO - SELECT
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

# AULA S13A64: PDO - DAO - LIST
//Carregando uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carregando uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("user","12345");
//echo $usuario;

# AULA S13A65: PDO - DAO - INSERT
//$aluno = new Usuario("aluno2", "@luno@");
//$aluno->insert();
//echo $aluno;

# AULA S13A66: PDO - DAO - UPDATE
//$usuario = new Usuario();
//$usuario->loadById(13);
//$usuario->update("professor", "!@#$%¨&*");
//echo $usuario;

$usuario = new Usuario();

$usuario->loadById(13);

$usuario->delete();

echo $usuario;


 ?>