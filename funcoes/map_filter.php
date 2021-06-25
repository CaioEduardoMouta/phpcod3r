<div class="titulo">Map & Filter</div>

<?php 
$notas = [5.8, 7.3, 9.8, 6.7];
$notasFinais = [];

foreach($notas as $nota) {
    $notasFinais1[] = round($notas);
}

print_r($notasFinais1);

echo '<br>';
$notasFinais2 = array_map(round, $notas);
print_r($notasFinais2);


$ApenasOsAprvados1 = [];

foreach($notas as $nota) {
    if($nota >= 7) {
        $ApenasOsAprvados1 [] = round($nota);
    }
}

echo '<br>';
print_r($ApenasOsAprvados1);

function aprovados($nota) {
    return $nota >= 7;
}

echo '<br>';
$ApenasOsAprvados2 = array_filter($notas, aprovados);
print_r($ApenasOsAprvados2);

function calculoLegal($nota) {
    $notaFinal = $round($nota) + 1;
    return $notaFinal > 10 ? 10 :$notaFinal;
}

echo '<br>';
$notasFinais3 = array_map(calculoLegal, $notas);
print_r($notasFinais3);