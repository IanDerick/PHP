<?php
class Sala {
    private $id;
    private $pdo;
    private $nome;
    private $capacidade;
    private $disponivel;
    
    public function __construct($id, $pdo) {
        $this->id = $id;
        $this->pdo = $pdo;
        $this->carregarDados();
    }

    public function getNome(){
        return $this->nome;
    }

    public function getCapacidade(){
        return $this->capacidade;
    }

    public function getStatus(){
        return $this->disponivel;
    }

    private function carregarDados() {
        $stmt = $this->pdo->prepare("SELECT nome, capacidade, disponivel FROM salas WHERE id = ?");
        $stmt->execute([$this->id]);
        $dados = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($dados) {
            $this->nome = $dados['nome'];
            $this->capacidade = $dados['capacidade'];
            $this->disponivel = $dados['disponivel'];
        }
    }

    public function estaDisponivel($data_reserva, $hora_inicio, $hora_fim) {
        $sql = "SELECT * FROM reservas 
                WHERE id_sala = ? 
                AND data_reserva = ? 
                AND hora_inicio < ? 
                AND hora_fim > ? 
                AND status = 'ativa'";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$this->id, $data_reserva, $hora_fim, $hora_inicio]);
        return $stmt->rowCount() === 0;
    }

    public function reserva($usuario_id, $data_reserva, $hora_inicio, $hora_fim) {
        if ($this->estaDisponivel($data_reserva, $hora_inicio, $hora_fim)) {
            $sql = "INSERT INTO reservas (id_sala, id_usuario, data_reserva, hora_inicio, hora_fim, status) VALUES (?, ?, ?, ?, ?, 'ativa')";
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute([$this->id, $usuario_id, $data_reserva, $hora_inicio, $hora_fim]);
        } else {
            return false;
        }
    }
}
?>
