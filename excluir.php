<?php include 'conexao.php';


$id = $_GET['id'];

$sql = "DELETE FRPM alunos WHERE id = $id";

if ($conexao->query($sql)) {
    header ("Location : index.php");
    exit;
}else{
    echo "Erro ao excluir: " . $conexao
}

