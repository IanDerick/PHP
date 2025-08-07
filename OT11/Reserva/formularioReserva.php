<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("Location: index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Reservar Sala</title>
</head>
<body>
    <h1>Reserva de Sala</h1>
    <?php
    if (isset($_SESSION["success"])) {
        echo "<p style = 'color:green'>". $_SESSION["success"] ."</p>";
        unset($_SESSION["success"]);
    }
    if (isset($_SESSION["error"])) {
        echo "<p style = 'color:red'>". $_SESSION["error"] ."</p>";
        unset($_SESSION["error"]);
    }
    ?>

    <form action="reservaSala.php" method="POST">
        <label for="sala_id">Sala:</label>
        <select name="sala_id" id="sala_id" required>
            <option value="1">Sala 1</option>
        </select><br><br>
        <label for="data_reserva">Data:</label>
        <input type="date" name="data_reserva" id="data_reserva" required><br><br>
        <label for="hora_inicio">Hora de Início:</label>
        <input type="time" name="hora_inicio" id="hora_inicio" required><br><br>
        <label for="hora_fim">Hora de Fim:</label>
        <input type="time" name="hora_fim" id="hora_fim" required><br><br>
        <input type="submit" value="Reservar Sala">
    </form>
    <form action="logout.php" method="POST" style="display:inline;">
        <button type="submit">Sair</button>
    </form>
</body>
</html>
