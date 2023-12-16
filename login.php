<?php
$nome = $_POST["nome"];
$senha = $_POST["senha"];

if ($nome == "Admin" and $senha == "adm123") {
    header("Location: admin.php");
    exit;  
} elseif ($nome == "Medio" and $senha == "med123") {
    header("Location: medio.php");
    exit;
} else {
    header("Location: user.php");
    exit;
}
?>