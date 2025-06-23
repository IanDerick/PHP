<?php
$host = "localhost";
$usuario = "root";
$senha = "root";
$banco = "meubanco";
$porta = 3307;

$conn = mysqli_connect($host, $usuario, $senha, $banco, $porta);

if (!$conn) {
    die("Erro na conexão: " . mysqli_connect_error());
}

if (isset($_POST['email'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $sql = "SELECT ID FROM USUARIOS WHERE EMAIL = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $token = bin2hex(random_bytes(16));
        $expiry = date("Y-m-d H:i:s", strtotime("+1 hour"));

        $sql_update = "UPDATE USUARIOS SET RESET_TOKEN = '$token', TOKEN_EXPIRY = '$expiry' WHERE EMAIL = '$email'";

        if (mysqli_query($conn, $sql_update)) {
            $reset_link = "http://www.recuperasenha.com/redefinir_senha.php?token=$token";
            echo "Um link para recuperação foi enviado: <a href='$reset_link'>$reset_link</a>";
        } else {
            echo "Erro ao gerar token.";
        }
    } else {
        echo "E-mail não encontrado.";
    }
} else {
    echo "Informe um e-mail.";
}

mysqli_close($conn);
?>
