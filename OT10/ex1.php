<?php
echo $variavel_que_nao_existe;
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "<p style='color:red;'>ID inválido.</p>";
    exit;
}

$id = (int) $_GET['id'];

try {
    $pdo = new PDO("mysql:host=localhost;port=3307;dbname=meubanco", "root", "root");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("SELECT * FROM USUARIOS WHERE ID = ?");
    $stmt->execute([$id]);

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "<p style='color:red;'>Erro: " . htmlspecialchars($e->getMessage()) . "</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Resultado da Consulta</title>
    <style>
        table {
            border-collapse: collapse;
            margin-top: 20px;
            width: 50%;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Resultado da Consulta</h1>

    <?php if ($usuario): ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
            </tr>
            <tr>
                <td><?= htmlspecialchars($usuario['id']) ?></td>
                <td><?= htmlspecialchars($usuario['nome']) ?></td>
                <td><?= htmlspecialchars($usuario['email']) ?></td>
            </tr>
        </table>
    <?php else: ?>
        <p>Nenhum usuário encontrado com o ID <?= htmlspecialchars($id) ?>.</p>
    <?php endif; ?>
</body>
</html>
