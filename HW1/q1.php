<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTIS256 Homework 1 Question 1 - Omer Batuhan Tandogan 21803754</title>


    <style>
        body {            
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        p {

            text-align: center;
            display: inline;
            padding: 10px;
            
        }
        table {
            justify-content: center;
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        tr {
            border-bottom: 1px solid black;
        }
        td:first-child {
            background-color: #ddddfd;
        }
        td {
           margin-left: 5px;
           margin-left: 5px;
        }
    </style>
</head>
<body>


<h1>Statistics</h1>
<?php

$numbers = array();
$frequency = array();
for ($i = 0; $i < 30; $i++) {
    $randnum= rand(0,9);
    $numbers[] = $randnum;

    if(isset($frequency[$randnum])) {
        $frequency[$randnum]++;

    } else {
        $frequency[$randnum] = 1;
    }
    $average = array_sum($numbers) / count($numbers);

   
    $deviation = 0;
    foreach ($numbers as $number) {
        $deviation += pow($number - $average, 2);
    }
    $deviation = sqrt($deviation / count($numbers));

    $average = number_format($average, 2);
    $deviation = number_format($deviation, 2);
    

    
}

foreach($numbers as $num){

    echo "<p> $numbers[$num] </p>";
}


?>
<table>
        <tr>
            <th>Number</th>
            <th>Frequency</th>
        </tr>

        <?php foreach ($frequency as $number => $frequency): ?>
            <tr>
                <td><?php echo $number; ?></td>
                <td><?php echo $frequency; ?></td>
            </tr>
        <?php endforeach; ?>

        <tr>
                <td>Average</td>
                <td><?php echo $average; ?></td>
            </tr>

            <tr>
                <td>Deviation</td>
                <td><?php echo $deviation; ?></td>
            </tr>
    </table>

    
</body>
</html>