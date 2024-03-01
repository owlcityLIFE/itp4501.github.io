<?php
$url = $_SERVER['REQUEST_URI'];
$parts = parse_url($url);
parse_str($parts['query'], $query);
$unixValue = $query['unix'];

$date = new DateTime();
$date->setTimestamp($unixValue);

$formattedTime = array(
    'year' => $date->format('Y'),
    'month' => $date->format('m'),
    'day' => $date->format('d'),
    'hours' => $date->format('H'),
    'minutes' => $date->format('i'),
    'seconds' => $date->format('s')
);

header('Content-Type: application/json');
echo json_encode($formattedTime);
?>