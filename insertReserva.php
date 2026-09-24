<?php
require_once './crud.php';

session_start();

if (!$_SESSION['tipo'] === 'cliente') {
    header('location: ./login.php');
    exit;

}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $add = [
        'data_reserva' => $_POST['data'],
        'horario_reserva' => $_POST['horario'],
        'quantidade_pessoas' => $_POST['pessoas'],
        'ambiente_preferido' => $_POST['ambiente'],
        'nome' => $_POST['nome'],
        'email' => $_POST['email'],
        'telefone' => $_POST['telefone'],
        'observacoes' => $_POST['observacoes']
    ];
    create($pdo, 'reservas', $add);
    header('Location: ./reserva.php');
} 
?>