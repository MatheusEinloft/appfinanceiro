<?php
require_once("conexao.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

$query = $pdo->prepare("SELECT * FROM usuarios where email = :email and senha = :senha");
$query->bindValue(":email","$email");
$query->bindValue(":senha","$senha");
$query->execute();
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);

echo $total_reg;

if($total_reg > 0) {
    $nivel = $res[0]['nivel'];

    if($nivel == 'Administrador') {
        echo "<script>window.location='painel-adm'</script>";
    }
} else {
    echo "<script>window.alert('Dados Incorretos')</script>";
    echo "<script>window.location='index.php'</script>";
}


?>
