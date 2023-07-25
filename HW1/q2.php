<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTIS256 Homework 1 Question 2 - Omer Batuhan Tandogan 21803754</title>


    <style>
        *{text-align: center;}
        h1{tex-align:center; }
        table{margin-left: auto; margin-right: auto; padding: 15px;}
        th,td{float:left;}
        
    </style>
</head>
<body>
<table>
<h1>Top 10 Crowded Countries</h1>
<?php
require_once('db.php');

function sortByPopulation($a, $b)
{
    return $b['population'] - $a['population'];
}

usort($countries, 'sortByPopulation');

$topCount = array_slice($countries, 0, 10);

$numerousNumbers = range(1, count($topCount));

foreach ($topCount as $index => $country) {
    $countryName = strtoupper($country['name']);
    $capitalCode = $country['capital'];

    $capital = '';
    if ($capitalCode !== "" && isset($cities[$capitalCode])) {
        $capital = $cities[$capitalCode]['name'];
    }

    $countryCode = $country['code'];
    $cityPopulations = [];

    foreach ($cities as $city) {
        if ($city['code'] === $countryCode) {
            $cityPopulations[$city['name']] = $city['population'];
        }
    }

    $topCity = '';
    $topPopulation = '';

    if (!empty($cityPopulations)) {
        arsort($cityPopulations);
        $topCity = key($cityPopulations);
        $topPopulation = $cityPopulations[$topCity];
    }

    echo "<tr><td><b>{$numerousNumbers[$index]}. {$countryName}</b></td></tr>";
    echo "<tr><td>&nbsp;&nbsp;&nbsp;Capital:</span> <b>{$capital}</b></td></tr>"; 
    echo "<tr><td>&nbsp;&nbsp;&nbsp;Most Crowded City:</span> <b><strong>{$topCity}</strong></b> : {$topPopulation}</td></tr>"; 
}
?>



</table>

    
</body>
</html>