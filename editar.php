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
        header("Location
    }
}
?>

<!-- editar.php - parte HTML (continua apos o PHP) -->
        <label>Nome:</label>
        <input type="text" name="nome" value<? = $aluno ['email']?> "required>

        <label>Email:</label>
        <input type="email" name="email" value<? = $aluno ['email']?> "required>
        
        <label>telefone:</label>
        <input type="text" name="telefone" value<? = $aluno ['telefone']?> "required>

        <label>curso:</label>
        <input type="text" name="curso" value<? = $aluno ['curso']?> "required>

        <button type="submit