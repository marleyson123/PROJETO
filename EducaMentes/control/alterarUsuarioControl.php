<?php
// pegar o id do usuario que sera alterado
// criar usuarioDAO
// chamar a função buscarusuario por id
require_once'../model/DTO/UsuarioDTO.php';
require_once'../model/DAO/UsuarioDAO.php';

$id = $_GET['id'];

// var_dump($id);

$usuarioDAO = new UsuarioDAO();

$sucesso = $usuarioDAO->BuscarUsuarioPorId($id);






?>