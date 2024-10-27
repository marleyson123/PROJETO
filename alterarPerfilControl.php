<?php
// incluir a conexão com o banco de dados
require_once '../control/conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_usuario = $_POST['id_usuario'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];

    // Atualizando as informações no banco de dados
    $query = "UPDATE usuarios SET nome = ?, email = ?, cpf = ? WHERE id_usuario = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssi", $nome, $email, $cpf, $id_usuario);

    if ($stmt->execute()) {
        echo "Informações atualizadas com sucesso.";
    } else {
        echo "Erro ao atualizar as informações.";
    }

    $stmt->close();
    $conn->close();

    // Redirecionar de volta para o perfil (ou outra página)
    header("Location: ../view/perfil.php");
}
?>
