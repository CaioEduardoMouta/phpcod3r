<div class="titulo">PDO:Alterar</div>

<?php
require_once "conexao_pdo.php";

$sql = "UPDATE cadastro SET nome = ?, nascimento = ?, 
email = ?, site = ?, filhos = ?, salario = ?
WHERE id = ?";

$conexao = novaConexao();
$stmt = $conexao->prepare($sql);

$resultado = $stmt->execute([
    'Caio Mouta',
    '1993-07-16',
    'caio@gostoso.com.br',
    'http://caio.com',
    1,
    12000,
    4
]);


if($resultado) {
    echo "Sucesso :)";
} else {
    print_r($stmt->errorInfo());
}