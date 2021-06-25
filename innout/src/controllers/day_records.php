<?php
ini_set('display_errors', 0 );
error_reporting(0);
?>
<?php
session_start();
requireValidSession();


$date = (new Datetime())->getTimestamp();
$today = strftime('%d de %B de %Y', $date);
loadTemplateView('day_records', ['today' => $today,'records' => $records]);