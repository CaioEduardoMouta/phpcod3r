<div class="tiutlo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metros > km</option>
        <option value="km-metro">Km > Metros</option>
        <option value="Celsius">Celsius > Fahrenheit </option>
        <option value="Fahrenheit ">Fahrenheit  > Celsius</option>
    </select>
    <button>Calcular</button>
   
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_CEL_FAH = 1.8;

$param = $_POST['param'] ?? 0;
switch ($_POST['conversao']) {
    case 'km-milha' :
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "param Km = $distancia Milhas";
        break;
    case 'milha-km';
        $distancia = $param/FATOR_KM_MILHA;
        $mensagem = "$param Milhas = $distancia Km";
        break;
    case 'metro-km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param Km = $distancia Metros";
    break;
    case 'Celsius':
        $conversao = $param * FATOR_CEL_FAH + 32;
        $mensagem = "{$param}º Celsius = {$conversao}º Fahrenheit";
        break;
    case 'Fahrenheit':
        $conversao = ($param - 32) / FATOR_CEL_FAH;
        $mensagem = "{$param}º Fahrenheit = {$conversao}º Celsius";
    break; 
    default:
        $mensagem = "Nenhum valor calculado";
}

echo "<p> $mensagem </p>";

?>