<?php include 'conexao.php';
$id = $_GET ['id'];

$resultado = $conexao -> query ("SELECT * FROM alunos where id =$id" );
$aluno = $resultado->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $nome       =$_POST['nome'];
    $email      =$_POST['email'];
    $telefone   =$_POST['telfona'];
    $telefone   =$_POST['telefone'];
    $curso       =$_POST['curso'];

    $sql = "UPDATE  alunos SET
            nome    = '$nome',
            email   = '$email',
            teledone = '$teledone',
            curso = '$curso'
        where id = $id";

    if ($conexao-> query($sql)) {
        header("Location: index.php");
    }
}
?>

<!-- editar.php - parte HTML (continua apos o PHP) -->
<form method= "POST" action="editar.php:id=<?= $id ?>">
    <label>Nome:</label>
    <input type="text" name="nome" value="<? $aluno['nome'] ?>" required>
    
    <label>Email:</label>
    <input type="email" name="email" value="<? $aluno['email'] ?>" required>

    <label>Telefone:</label>
    <input type="text" name="telefone" value="<? $aluno['telefone'] ?>">

    <label>Curso:</label>
    <input type="text" name="curso" value="<? $aluno['curso'] ?>">

    <button type= "submit">Atualizar</button>
    <a href= "index.php">Cancelar</a>
</form>
