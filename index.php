<?php include 'conexao.php'; ?>
<DOCTYPE html>
<html>
<head><title>Lista de Alunos</title></head>
<body>
    <h1>Alunos Cadastrados</h1>
    <a href= "criar.php">+ Novo Aluno</a>
    <table border="1">
        <tr>
            <th>ID</th><th>Nome</th><th>Email</th>
            <th>Telefone</th><th>Curso</th><th>Ações</th>
        </tr>
        <?php
            $resultado = $conexao ->query ("SELECT * FROM alunos");
            while($aluno = $resultado-> fetch_assoc()){
                ?>

            <tr>
            <td><?= $aluno['id']?></td>
            <td><?= $aluno['nome']?></td>
            <td><?= $aluno['email']?></td>
            <td><?= $aluno['telefone']?></td>
            <td><?= $aluno['curso']?></td>
            <td>
                <a href = "editar.php?id=<?= $aluno ['id']?>">Excluir</a>
            </td>
            </tr>
            <?php } ?>
            </table>
            </body>
            </html>