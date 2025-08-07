<?php
    session_start();
    if (!isset($_SESSION['usuario_id'])) {
        header("Location: login.php");
        exit();
    }    
    
    require_once 'config/database.php';
    require_once 'sala.php';

    $sala_id      = $_POST['sala_id'] ?? null;
    $data_reserva = $_POST['data_reserva'] ?? null;
    $hora_inicio  = $_POST['hora_inicio'] ?? null;
    $hora_fim     = $_POST['hora_fim'] ?? null;

    if (
        !$sala_id ||
        !$data_reserva ||
        !$hora_inicio ||
        !$hora_fim
    ) {
        $_SESSION['error'] = "Erro: Dados incompletos.";
        header("Location: formularioReserva.php");
        exit();
    }

    $usuario_id = $_SESSION['usuario_id'] ?? null;

    if (!$usuario_id) {
        $_SESSION['error'] = "Usuário não autenticado.";
        header("Location: login.php");
        exit();
    }

    if ($sala_id && $data_reserva && $hora_inicio && $hora_fim && $usuario_id) {
        $sala = new Sala($sala_id, $pdo);

        if ($sala->reserva($usuario_id, $data_reserva, $hora_inicio, $hora_fim)) {
            $_SESSION['success'] = "Reserva realizada com sucesso para a sala: ". htmlspecialchars($sala->getNome());
        } else {
            $_SESSION['error'] = "Sala indisponível nesse horário.";
        }
    } else {
        $_SESSION['error'] = "Erro: Dados incompletos.</p>";
    }

    header("Location: formularioReserva.php");
    exit();
?>
