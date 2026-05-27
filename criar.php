<?php include 'conexao.php';

if ($_SERVER ['REQUEST_METHOD'] === 'POST') {
    $nome       =$_POST['nome'];
    $email      =$_POST['email'];
    $telefone   =$_POST['telfona'];
    $telefone   =$_POST['telefone'];
    $curso       =$_POST['curso'];

    $sql = "INSERT INTO alunos (nome, email, telefone, cursos)
            values ('$nome , '$email' , '$telefone', '$curso')";
            
    if ($conexao -> query ($sql)) {
        header ("Location: index.php"); 
        exit;
    } else {
        echo "Erro: "  . $conexao->error;
     
    }
}
?>

<! -- Formulário HTML -->
<form method="POST" action="criar.php">
    <label>Nome:</label>
    <input type="text" name="nome" required>

    <label>Email:</label>
    <input type = "email" name="email" required>

    <label>Telefone:</label>
    <input type="text" name="telefone">

    <label>Curso:</label>
    <input type="text" name="curso">

    <button type="submit">Salvar</button>
