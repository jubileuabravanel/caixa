<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuarios = [
        "40028922" => "40028922"
    ];

    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"];

    if (isset($usuarios[$cpf]) && $usuarios[$cpf] == $senha) {
        session_start();
        $_SESSION['cpf'] = $cpf;
        header('location:index.php');
        exit();
    } else {
        echo "<p>Número da conta ou senha incorretos.</p>";
        echo "<a href='index.html'>Voltar</a>";
    }
}
