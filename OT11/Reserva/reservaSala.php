<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'config/database.php';
require_once 'sala.php';

// Dados vindos do formulário
$sala_id      = $_POST['sala_id'] ?? null;
$data_reserva = $_POST['data_reserva'] ?? null;
$hora_inicio  = $_POST['hora_inicio'] ?? null;
$hora_fim     = $_POST['hora_fim'] ?? null;

// Simulação de usuário autenticado
$usuario_id = 16; // Em sistema real, viria da sessão

if ($sala_id && $data_reserva && $hora_inicio && $hora_fim && $usuario_id) {
    $sala = new Sala($sala_id, $pdo);

    if ($sala->reserva($usuario_id, $data_reserva, $hora_inicio, $hora_fim)) {
        echo "<p>Reserva realizada com sucesso para a sala: " . htmlspecialchars($sala->getNome()) . "</p>";
    } else {
        echo "<p>Erro: Sala indisponível nesse horário.</p>";
    }
} else {
    echo "<p>Erro: Dados incompletos.</p>";
}
?>
