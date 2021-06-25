<div class="titulo"> Desafio Operadores Lógicos</div>

<!--
    Dois trabalhos -> terça e quinta
    - Se os dois forem executados -> Tv 50 e sorvete 
    - se apenas um for executado Tv 32 e Sorvete1 
    Se nenhum for executado -> Fica em casa 

-->

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id ="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</opion>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta): </label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select {
        font-size: 1.8rem;

    }
</style>
<?php

if(isset($_POST['t1']) && isset($_POST['t2'])) {
$t1 = $_POST['t1'] === '1';
$t2 = !!$_POST['t2'];
$tv = '';
$sorvete= false;

if($t1 and $t2) {
    $tv = 'Comprar TV 50 e Sorvete';
}elseif($t1 xor $t2) {
    echo 'Tv 32 e Sorvete';
}else{
    echo 'Ficar em casa';
}

if($tv) {
    $resutaldo = "Vamos comprar uma tv de $tv";
} else {
    $resutaldo = "Sem tv dessa vez :(";
}

if($sorvete) {
    $resultado .= '<br>Estamos mais saudáveis!';
} else {
    $resultado .= '<br>Sorvete Liberado \o/';
}

echo "<p>$resultado</p>"
}

?>